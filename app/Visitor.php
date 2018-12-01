<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    //
    protected $fillable = [
        'name', 'email', 'message','created_at','updated_at' 
    ];
}
