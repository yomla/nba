    @extends('layouts.master')

    @section('content')

        
        <h2 class="blog-post-title">{{ $team->name }}</h2>
        Email:<p class="blog-post-meta">{{ $team->email }} </p>
        Adress:<p class="blog-post-meta">{{ $team->adress }} </p>
        City:<p class="blog-post-meta">{{ $team->city }} </p>

        <h2>Players</h2>

        @foreach($team->players as $player)
            
                <li class="list-group-item" style="list-style-type: none;"><a href="/players/{{ $player->id }}"> {{ $player->first_name }} {{ $player->last_name }}</a></li><br>
            
        @endforeach

        <a href="/players/create" class="btn btn-primary">Add a new player</a>
        <hr>

        <h4>Comments</h4>
        <hr>

        @foreach($team->comments as $comment)
        
        <li>
            <strong>{{ $comment->user->name }} {{ $comment->created_at->diffForHumans() }}<br>
               
            </strong>
            {{ $comment->content }}
        </li>
        <hr>
    @endforeach

            
    <form method="POST" action="/teams/{{ $team->id }}/comment">

        {{ csrf_field() }}

        <div class="form-group">
            <textarea class="form-control" id="content" name="content" placeholder="Write your comment here"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>


    @if (count($errors->all()) > 0)

        @foreach($errors->all() as $error)
            <div class="form-group">
                <div class="alert alert-danger">
                    <li>{{ $error }}</li>
                </div>
            </div>
        @endforeach

    @endif
        

    @endsection
