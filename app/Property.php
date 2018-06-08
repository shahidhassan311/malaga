<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Property extends Authenticatable
{
    protected $table = 'property';

    protected $fillable = [
        'property_id','name', 'location', 'feature','equipment','area','price_to','price_from','status','type'
    ];

}
