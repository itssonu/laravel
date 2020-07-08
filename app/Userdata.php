<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userdata extends Model
{
    // public $table = [
    //     'userdata'
    // ];
    protected $fillable = [
        'username', 'image', 'status',
    ];

}
