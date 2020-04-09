<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'role_id', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function authorizeRoles($roles)
    {
       return $this->hasRole($roles) || abort(401, 'Prohibited.');
    }

    public function hasRoles($roles)
    {
        if(is_array($roles))
            return null !== $this->roles()->whereIn('name', $roles)->first();

        return null !== $this->roles()->where('name', $roles)->first();
    }
}
