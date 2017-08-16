<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Player;

use App\Team;

class PlayersController extends Controller
{
    public function show($id)
    
    {
        $player = Player::find($id);

        return view('players.show', ['player' => $player]);
    }

    public function create()

    {
        $teams = Team::all()->sortBy('name');

        return view('players.create', compact('teams'));
    }

    public function store()

    {
        $this->validate(request(), [

            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'team_id' => 'required'
            
            ]);

        Player::create(request()->all());

        return redirect('/');
    }



}
