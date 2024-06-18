<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\Authuse\Cleaner;

class LoginController extends Controller
{
    protected $prefix = 'cleaner-end';
    protected $segment = 'cleaner';
    protected $controller = 'line-login';
    protected $folder = 'line-login';

    public function index(Request $request)
    {
        $navs = [
            '0' => ['url' => "javascript:void(0)", 'name' => "line login", "last" => 0],
        ];
        return view("$this->prefix.pages.$this->folder.index", [
            'prefix' => $this->prefix,
            'folder' => $this->folder,
            'segment' => $this->segment,
            'navs' => $navs,
        ]);
    }

    /**
     * Redirect the user to the LINE authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('line')->redirect();
    }

    /**
     * Obtain the user information from LINE.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        try {
            $lineUser = Socialite::driver('line')->stateless()->user();
        } catch (\Exception $e) {
            return redirect('/cleaner/line-login');
        }

        // Check if the user already exists
        // $user = Cleaner::where('line_id', $lineUser->getId())->first();
        $user = Cleaner::where('email', $lineUser->getEmail())->first();


        if ($user) {
            // Log the user in using the cleaner guard
            Auth::guard('cleaner')->login($user, true);
        } else {
            // Create a new user
            $user = Cleaner::create([
                'line_name' => $lineUser->getName(),
                'email' => $lineUser->getEmail(),
                'line_id' => $lineUser->getId(),
                'avatar' => $lineUser->getAvatar(),
            ]);

            // Log the user in using the cleaner guard
            Auth::guard('cleaner')->login($user, true);
        }

        return redirect()->intended('/cleaner/attendance-check');
    }

    /**
     * Log the user out of the application.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::guard('cleaner')->logout();
        return redirect('/cleaner/line-login');
    }
}
