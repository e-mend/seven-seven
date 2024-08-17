<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use MongoDB\Laravel\Auth\User as AuthenticatableMongoDB;

class User extends AuthenticatableMongoDB
{
    use HasApiTokens, Notifiable;

    protected $connection = 'mongodb';
    protected $collection = 'users';
    public $timestamps = true;
    protected $fillable = [
        'id',
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
}
