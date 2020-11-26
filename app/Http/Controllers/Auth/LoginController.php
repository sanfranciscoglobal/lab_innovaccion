<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use App\Models\User;

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
        $this->middleware(function ($request, $next) {
            session()->forget('roles');
            return $next($request);
        });
    }

    public function login()
    {
        $credentials = $this->validate(request(), [
            'email' => 'email|required|string|exists:users,email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            if ($rolesUser = Auth::user()->roles()->pluck('name', 'roles.id')->all()) {
                $array_json = json_encode($rolesUser);
                session()->put('roles', $array_json);
            }
            
            if (auth()->user()->roles()->pluck('name', 'roles.id')->first() != 'user') {
                return redirect()->route('admin.escritorio')->with('status', 'Tu sesión ha iniciado exitosamente.');
            }
            return redirect()->route('app.escritorio')->with('status', 'Tu sesión ha iniciado exitosamente.');
        }

        return back()
            ->withInput(request(['email', 'login']))
            ->with('error', 'No hemos podido iniciar sesión, intenta nuevamente.');
        // ->with('error', 'No hemos podido iniciar sesión.')
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

    public function redirectTo()
    {
//        $roles = [];
//        if ($rolesUser = Auth::user()->rolUser()->get()) {
//            foreach ($rolesUser as $roluser) {
//                if ($roluser->estadoRegistro->codigo == 'AP') {
//                    $rol = $roluser->rol()->first();
//                    $roles[] = $rol->key;
//                }
//            }
//        }
//
//        dd($roles);
//        $array_json = json_encode($roles);
//        Cookie::queue(Cookie::make('roles', $array_json, 60 * 24 * 365));
        return redirect('home');
    }

    public function reset(User $user)
    {
        if ($user->verification_token == $_GET['hash']) {
            $user->verification_token = null;
            $user->email_verified_at = date('Y-m-d H:i:s');
            $user->save();
            Auth::loginUsingId($user->id, true);

            return redirect()->route('password.edit')->with('status', 'Confirma tu nueva contraseña.');
        } else {
            return redirect()->route('home')->with('error', 'Token de verificacion no válido.');
        }
    }
}
