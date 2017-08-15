    @extends('layouts.master')

    @section('content')

        <h2 class="blog-post-title">{{ $team->name }}</h2>
        Email:<p class="blog-post-meta">{{ $team->email }} </p>
        Adress:<p class="blog-post-meta">{{ $team->adress }} </p>
        City:<p class="blog-post-meta">{{ $team->city }} </p>

        <h2>Players</h2>

        @foreach($team->players as $player)

            <ol>
                <li style="list-style-type: none;"><a href="/players/{{ $player->id }}"> {{ $player->first_name }} {{ $player->last_name }}</a></li>

            </ol>

        @endforeach
        

    @endsection
