@extends('layouts.master')

@section('content')

    <h1>Players</h1>
    @foreach($players as $player)



        <div class="blog-post">
            <h2 class="blog-post-title"> {{ $player->first_name }} </h2>
            {{-- <p class="blog-post-meta">{{ $team->created_at->toFormattedDateString() }} by <a href="#">{{ $team->name }}</a></p> --}}

            {{-- <p>{{ $post->body }}</p> --}}
        </div><!-- /.blog-post -->

    @endforeach

    <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav>

@endsection