<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    //variables para uso de BD existente
    protected $table = 'user';
    protected $primaryKey = 'userID';
    const CREATED_AT = 'usCreateAt';
    const UPDATED_AT = 'usUpdateAt';

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

    //Se sobreescribe el metodo para poder usar campos personalizados para el Auth
    public function getAuthPassword()
    {
        return $this->uspassword;
    }

    public function getRememberToken()
    {
        return $this->usRememberToken;
    }

    public function setRememberToken($value)
    {
        $this->usRememberToken = $value;
    }

    public function getRememberTokenName()
    {
        return 'usRememberToken';
    }
}
