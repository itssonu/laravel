<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class crud extends Model
{
    protected $fillable = [
        'fname',
        'lname',
        'number',
        'image'
    ];
}
