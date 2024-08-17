<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use MongoDB\Laravel\Eloquent\Model as AuthenticatableMongoDB;

class Event extends AuthenticatableMongoDB
{
    use Notifiable;

    protected $connection = 'mongodb';
    protected $collection = 'events';
    public $timestamps = true;
    protected $fillable = [
        'id',
        'name',
        'description',
        'status',
        'location',
        'image',
        'start_date',
        'end_date',
    ];
}
