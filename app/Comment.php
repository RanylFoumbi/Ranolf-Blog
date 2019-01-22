<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fullname', 'email', 'message', 'user_id', 'post_id', 'created_at','updated_at' 
    ];

        protected $primariKey = 'id';

        public function post()
        {
            return $this->belongsTo('App\Post');
        }

        public function user()
        {
            return $this->belongsTo('App\User');
        }
}
