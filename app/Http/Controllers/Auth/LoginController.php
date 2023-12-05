<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('login', 'password');

        if (filter_var($request->login, FILTER_VALIDATE_EMAIL)){
            $loginType = 'email';
        }elseif (filter_var($request->login, FILTER_VALIDATE_INT)){
            $loginType = 'phone';
        }else{
            $loginType = 'login';
        }

        $credentials[$loginType] = $credentials['login'];
        if ($loginType != 'login'){
            unset($credentials['login']);
        }

        $user = User::where($loginType,'=',$credentials[$loginType])->first();

        if ($user && $credentials['password'] === $user->password && $user->hasRole('Super admin')) {
            // Log in the user manually (without password hashing)
            Auth::login($user);

            return redirect()->intended('/');
        }

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect()->intended('/');
        }

        // Authentication failed
        return redirect()->back()->withErrors([
            'login' => 'Login yoki parol xato.',
        ]);
    }

}
