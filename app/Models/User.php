<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Query\Builder;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\CanResetPassword;

// Models
use App\Models\Perfil;
use App\Models\RoleUser;
use App\Models\Role;
use App\Models\Fondo;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'verification_token', 'email_verified_at',
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

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function perfil()
    {
        return $this->belongsTo(Perfil::class);
    }

    public function hasRole($role)
    {
        return $this->roles()->where('name', $role)->exists();
    }

    public function perfilUser()
    {
        return $this->belongsTo(Perfil::class, 'perfil_id', 'id');
    }

    public function fondos()
    {
        return $this->hasMany(Fondo::class);
    }

    /**
     * @return Builder
     */
    public static function builder()
    {
        $rs = User::orderby('created_at', 'DESC');
        return $rs;
    }

    public static function obtenerUsuariosLimit($limit)
    {
        return self::builder()->limit($limit)->get() ?? [0];
    }
}
