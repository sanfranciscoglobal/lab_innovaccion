<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ConfirmsPasswords;
use Illuminate\Auth;
use Hash;

class ConfirmPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Confirm Password Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password confirmations and
    | uses a simple trait to include the behavior. You're free to explore
    | this trait and override any functions that require customization.
    |
    */

    use ConfirmsPasswords;

    /**
     * Where to redirect users when the intended url fails.
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
        $this->middleware('auth');
    }

    public function show(){
        return view('auth.passwords.confirm');
    }

    public function update(){

        $data = $this->validate(request(), [
            'password' => 'required|string|confirmed|regex:/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W])[\S]{8,}$/|min:8',
        ]);

        $user = auth()->user();
        $user->password = Hash::make($data['password']);
        $user->save();

        return redirect()->route('app.escritorio')->with('status', 'Contraseña actualizada con éxito.');
    }
}
