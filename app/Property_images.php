<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Property_images extends Authenticatable
{
    protected $table = 'property_image';

    protected $fillable = [
        'property_id', 'images'
    ];

}
