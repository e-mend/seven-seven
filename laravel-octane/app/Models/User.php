<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use MongoDB\Laravel\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, Notifiable;

    protected $connection = 'mongodb';
    protected $collection = 'users';
    public $timestamps = true;
    protected $fillable = [
        '_id',
        'full_name',
        'cpf',
        'username',
        'password',
        'church_id',
        'phone',
        'email',
        'active',
        'deleted_at',
        'roles',
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
}
