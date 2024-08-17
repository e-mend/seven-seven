<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use MongoDB\Laravel\Eloquent\Model as AuthenticatableMongoDB;

class Order extends AuthenticatableMongoDB
{
    use Notifiable;

    protected $connection = 'mongodb';
    protected $collection = 'orders';
    public $timestamps = true;
    protected $fillable = [
        'id',
        'user_id',
        'product_id',
        'status',
        'quantity',
    ];
}
