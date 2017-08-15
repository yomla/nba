<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['content', 'user_id', 'team_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    

    
}
