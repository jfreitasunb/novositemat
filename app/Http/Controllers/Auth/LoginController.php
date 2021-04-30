<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

use App\Models\UsuarioLogin;
use Carbon\Carbon;

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

    // use AuthenticatesUsers;

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
    
    public function index()
    {   
        App::setLocale('pt_BR');

        return view('layouts.app');
    }

    public function logar(Request $request)
    {
        $credentials['usuario'] = $request->username;

        $credentials['password'] = $request->password;

        $this->ensureIsNotRateLimited($credentials['usuario']);

        if (! Auth::attempt($credentials, $request->filled('remember'))) {
            RateLimiter::hit($this->throttleKey($credentials['usuario']));

            throw ValidationException::withMessages([
                'username' => __('auth.failed'),
            ]);
        }

        RateLimiter::clear($this->throttleKey($credentials['usuario']));

        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ]);
    }

    /**
     * Ensure the login request is not rate limited.
     *
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function ensureIsNotRateLimited($usuario)
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey($usuario), 5)) {
            return;
        }

        event(new Lockout($this));

        $seconds = RateLimiter::availableIn($this->throttleKey($usuario));

        throw ValidationException::withMessages([
            'username' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the rate limiting throttle key for the request.
     *
     * @return string
     */
    public function throttleKey($username)
    {
        return Str::lower($username).'|'.\Request::ip();
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {

        $id_login = UsuarioLogin::where('usuario_id', auth()->user()->id)->orderBy('data_hora_login', 'DESC')->get()->first()->id;

        UsuarioLogin::where('id', $id_login)->update(['data_hora_logout' => Carbon::now()]);

        Auth::guard('web')->logout();



        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
