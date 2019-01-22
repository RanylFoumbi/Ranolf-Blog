<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cathegory extends Model
{
    protected $fillable = [
        'name', 'image', 'detail', 'user_id', 'created_at','updated_at' 
    ];

        protected $primariKey = 'id';
        

	public function user()
	{
	    return $this->belongsTo('App\User');
    }
    
    public function post()
    {
        return $this->hasMany('App\Post');
    }

}
