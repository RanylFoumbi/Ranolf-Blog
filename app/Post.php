<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'subtitle', 'image', 'description', 'cathegory_id', 'user_id', 'created_at','updated_at' 
    ];

        protected $primariKey = 'id';


        public function cathegory()
        {
            return $this->belongsTo('App\Cathegory');
        }

        public function user()
        {
            return $this->belongsTo('App\User');
        }

        public function comment()
        {
            return $this->hasMany('App\Comment');
        }
}
