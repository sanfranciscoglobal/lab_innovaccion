<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

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

    public function login()
    {
        $credentials = $this->validate(request(), [
            'email' => 'email|required|string',
            'password' => 'required|string'
        ]);

        if(Auth::attempt($credentials))
        {
            return 'Tu sesión ha iniciado exitosamente.';
            //return redirect()->route('admin/post');
        }

        return back()
            ->withErrors($credentials)
            ->withInput(request(['email']));
    }

    public function redirectTo()
    {
        $roles = [];
        if ($rolesUser = Auth::user()->rolUser()->get()) {
            foreach ($rolesUser as $roluser) {
                if ($roluser->estadoRegistro->codigo == 'AP') {
                    $rol = $roluser->rol()->first();
                    $roles[] = $rol->key;
                }
            }
        }

        $array_json = json_encode($roles);
        Cookie::queue(Cookie::make('roles', $array_json, 60 * 24 * 365));
        return redirect('app.dashboard');
    }
}
