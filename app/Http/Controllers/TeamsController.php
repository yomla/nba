<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\News;

class TeamsController extends Controller
{
    //
     public function __construct() 

    {
        $this->middleware('auth', ['except' => ['index', 'show'] ]);
    }

    

    public function getTeamNews (Team $team)

    {
        $news = $team->news()->with('teams')->latest()->paginate(10);

        return view('news.index', compact('news'));
    }

    public function index()
    {
        $teams = Team::all()->sortBy('name');

        return view('teams.index', ['teams' => $teams]);
    }

    public function show($id)
    {
        $team = Team::find($id);



        return view('teams.show', ['team' => $team]);
    }

    public function create()

    {
        return view('teams/create');
    }

    public function store ()

    {
        $this->validate(request(), [

            'name' => 'required',
            'email' => 'required|email',
            'adress' => 'required',
            'city' => 'required',

            ]);


        Team::create(request()->all());

        return redirect('/');
    }

    
}
