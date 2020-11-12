<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Mail\EmailVerification;
use App\Http\Requests\User\StorePost;
use Mail;
use Auth;

// Models
use App\Models\User;
use App\Models\RoleUser;
use App\Models\Perfil;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return App\Models\User
     */
    protected function create(StorePost $request)
    {
        $validatedData = $request->validated();

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'verification_token' => Hash::make($validatedData['name'].$validatedData['email'].date('Y-m-d H:i:s')),
            'email_verified_at' => date('Y-m-d H:i:s'),
        ]);

        RoleUser::create([
            'user_id' => $user->id,
        ]);

        Auth::attempt($request->only('email', 'password'));

        // Mail::to($user->email)->send(new EmailVerification($user));

        return redirect()->route('home')->with('status', 'Usuario creado con éxito, porfavor verifica tu correo electrónico.');
    }
}
