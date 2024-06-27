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

    public function handleProviderCallback()
    {
        $navs = [
            '0' => ['url' => "javascript:void(0)", 'name' => "Phone number check", "last" => 0],
        ];
        $lineUser = Socialite::driver('line')->stateless()->user();
        return view("$this->prefix.pages.$this->folder.phone_verify", [
            'prefix' => $this->prefix,
            'folder' => $this->folder,
            'segment' => $this->segment,
            'navs' => $navs,
            'lineUser' => $lineUser,
        ]);
    }

    public function verifyPhoneNumber(Request $request)
    {
        $request->validate([
            'phone' => 'required|string',
            'line_id' => 'required|string',
        ]);

        $user = Cleaner::where('phone', $request->phone)->first();

        if ($user) {
            if (empty($user->line_id)) {
                // Update the user's line_id if it's empty
                $user->line_id = $request->line_id;
                $user->save();
                Auth::guard('cleaner')->login($user, true);
                return redirect()->route('cleaner.attendance-check');
            } elseif ($user->line_id === $request->line_id) {
                // Log the user in if the line_id matches
                Auth::guard('cleaner')->login($user, true);
                return redirect()->route('cleaner.attendance-check');
            } else {
                return redirect()->route('login.line')->with('error', 'Line ID ไม่ตรงกับเบอร์');
            }
        } else {
            return redirect()->route('login.line')->with('error', 'ไม่มีเบอร์โทรศัพท์นี้ในระบบ');
        }
    }

    public function logout()
    {
        Auth::guard('cleaner')->logout();
        return redirect('/cleaner/line-login');
    }
}
