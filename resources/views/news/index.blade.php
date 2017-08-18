@extends('layouts.master')

@section('content')
    
    @if ($flash = session('message'))

        <div class="alert alert-success" role="alert">
        
            {{ $flash }}
        
        </div>

    @endif

    <h1>News</h1><br>

    @foreach($news as $new)

        <div class="blog-post">
            <h2 class="blog-post-title"><a href="/news/{{ $new->id }}"> {{ $new->title }} </a></h2>
            <p class="blog-post-meta">{{ $new->created_at->toFormattedDateString() }} by <a href="#">{{ $new->user->name }}</a></p>

            {{-- <p>{{ $post->body }}</p> --}}
        </div><!-- /.blog-post -->

    @endforeach

    <nav class="blog-pagination">
        <a class="btn btn-outline-{{ $news->currentPage() == 1 ? 'secondary disabled' : 'primary' }}" href="{{ $news->previousPageUrl() }}"> Previoius </a>
        <a class="btn btn-outline-{{ $news->hasMorePages() ? 'primary' : 'secondary disabled' }}" 
        href="{{ $news->nextPageUrl() }}"> Next </a>

        Page {{ $news->currentPage() }} of {{ $news->lastPage() }}

    </nav>

@endsection