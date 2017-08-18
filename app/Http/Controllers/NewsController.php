<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Team;

class NewsController extends Controller
{
    public function index ()

    {
    	
    	$news = News::with('user')->paginate(10);

    	return view('news.index', compact('news'));
    }


    public function show ($id)

    {
        
    	$new = News::find($id);

    	return view('news.show', compact('new'));
    }
}
