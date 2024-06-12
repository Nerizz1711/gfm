<?php

// app/Http/Controllers/Auth/LoginController.php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\Backend\CleanerModel;

class LoginController extends Controller
{
    protected $prefix = 'front-end';
    protected $segment = 'webpanel';
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
            return redirect('/login');
        }

        // $line_id_dd = $lineUser->getId();
        // dd($line_id_dd);
        // Check if the user already exists
        $user = CleanerModel::where('line_id', $lineUser->getId())->first();

        if ($user) {
            // Log the user in
            Auth::login($user, true);
        } else {
            // Create a new user
            $user = CleanerModel::create([
                'name' => $lineUser->getName(),
                'email' => $lineUser->getEmail(),
                'line_id' => $lineUser->getId(),
                'avatar' => $lineUser->getAvatar(),
            ]);

            Auth::login($user, true);
        }

        return redirect()->intended('/location-check');
    }
}
