<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;
use Auth;
use Log;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';
    protected $username = 'username';
    protected $guard = 'web';

    public function getLogin()
    {
        // To check if user is logged in
        if(Auth::guard('web')->check())
        {
            return redirect()->route('dashboard');
        }
        return view('login');
    }

    public function postLogin(Request $request)
    {
        $auth = Auth::guard('web')->attempt([
            'username'=>$request->input('username'),
            'password'=>$request->input('password'),
            'active'=>1,
        ]);

        if($auth)
        {
            return redirect()->route('dashboard');
        }
        return redirect()->route('/');
    }

    public function getLogout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('/');
    }
}
