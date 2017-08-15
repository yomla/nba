@extends('layouts.master')

@section('content')

		<h2 class="blog-post-title">{{ $player->first_name }} {{ $player->last_name }}</h2>

		Email:<p class="blog-post-meta">{{ $player->email }} </p>
        Team:<p class="blog-post-meta"><a href="/teams/{{ $player->team->id }}">{{ $player->team->name }} </a></p>
        


@endsection