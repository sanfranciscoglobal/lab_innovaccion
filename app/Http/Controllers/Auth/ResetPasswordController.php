<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use App\Mail\ResetPassword;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
// use Illuminate\Auth\Notifications\ResetPassword;
use Mail;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    public function send(Request $request){
        // dd($request->email);
        $user = User::where('email', $request->email);
        if(!$user->exists()){
            return redirect()->route('home')->with('error', 'No hemos encontrado este correo electronico en nuestros registros.');
        }
        $user = $user->first();
        $user->verification_token = Hash::make(date('Y-m-d H:i:s'));
        $user->save();
        Mail::to($user->email)->send(new ResetPassword($user));
        return redirect()->route('home')->with('status', 'Hemos enviado el link, revisa tu correo electronico.');
    }
}
