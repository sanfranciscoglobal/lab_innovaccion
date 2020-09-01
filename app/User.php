<?php

namespace App;

use App\Models\Perfil;
use App\Models\RolesUsers;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function rolUser()
    {
        return $this->belongsTo(RolesUsers::class, 'id', 'user_id');
    }

    public function perfil()
    {
        return $this->belongsTo(Perfil::class, 'perfil_id', 'id');
    }
}
