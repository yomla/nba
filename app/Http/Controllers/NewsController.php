<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Team;

class NewsController extends Controller
{

    public function create ()

    {
        $teams = Team::all()->sortBy('name');
        
        return view('news.create', compact('teams'));
    }

    public function store ()

    {
            $this->validate(request(), [
            'title' => 'required',
            'content' => 'required',
            'teams' => 'required|array'
            
            ]);

        $news = new News;

        $news->title = request('title');
        $news->content = request('content');
        $news->user_id = auth()->user()->id;

        $news->save();

        $news->teams()->attach(request('teams')); // Zakaci team_id za news tabelu

        session()->flash('message', 'Thank you for publishing article on www.nba.com');

        return redirect('/news');
    }

    public function index ()

    {
    	
    	$news = News::with('user')->latest()->paginate(10);

    	return view('news.index', compact('news'));
    }


    public function show ($newsId)

    {
        
    	$new = News::find($newsId);

    	return view('news.show', compact('new'));
    }


}
