@extends('layouts.master')

@section('content')

    <h2 class="blog-post-title">{{ $new->title }}</h2>
    <p class="blog-post-meta">{{ $new->created_at->toFormattedDateString() }} by <a href="/users/{{ $new->user_id }}"> {{ $new->user->name }} </a></p>

    @if (count($new->teams))
         <ul>
             @foreach ($new->teams as $team)
                 <li>
                     <a href="/news/teams/{{ $team->name }}">
                         {{ $team->name }}
                     </a>
                 </li>
             @endforeach
         </ul>
    @endif
    

    <p>{{ $new->content }}</p>

    <hr>

       {{--  @foreach($new->comments as $comment)
        
        <li>
            <strong>{{ $comment->user->name }} {{ $comment->created_at->diffForHumans() }}<br>
               
            </strong>
            {{ $comment->content }}
        </li>
        <hr>
    @endforeach

    

        <h4>Comments</h4>

    <form method="POST" action="/news/{{ $team->id }}/comment">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="content">Body</label>
            <textarea class="form-control" id="content" name="content"></textarea>
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

    @endif --}}

@endsection