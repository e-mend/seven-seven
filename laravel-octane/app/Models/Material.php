<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use MongoDB\Laravel\Eloquent\Model as AuthenticatableMongoDB;

class Material extends AuthenticatableMongoDB
{
    use Notifiable;

    protected $connection = 'mongodb';
    protected $collection = 'materials';
    public $timestamps = true;
    protected $fillable = [
        'id',
        'title',
        'description',
    ];
}
