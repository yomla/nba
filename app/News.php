<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public function user() 
    {
    	return $this->belongsTo(User::class);
    }

    public function comments () 

    {
    	return $this->hasMany(Comment::class);
    }

    public function teams ()

    {
    	return $this->belongsToMany(Team::class, 'news_teams');
    }
}
