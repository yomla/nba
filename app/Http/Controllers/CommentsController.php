<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Mail\CommentReceived;

class CommentsController extends Controller
{
    public function store($id)
    {
        $this->validate(request(), [
            'content' => 'required|min:10'
        ]);

        $team = Team::find($id);

        $team->addComment(request('content'));

        \Mail::to($team->email)->send(new CommentReceived($team));


        return back();
    }


}
