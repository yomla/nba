<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{    
    
    protected $fillable = ['name', 'email', 'adress', 'city'];

    public function players ()

    {
    	return $this->hasMany(Player::class);    	
    }

    public function comments ()

    {
    	return $this->hasMany(Comment::class);    	
    }

    public function addComment($content)
    {
        $this->comments()->create(['content' => $content, 'user_id' => Auth()->user()->id]);
    }
}
