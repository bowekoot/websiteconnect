@extends('layouts.app')

@section('content')
    <h3>News and Events</h3>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="card">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Written on {{$post->created_at}}</small>
                @if($post->updated_at)
                <small>Last edited on {{$post->updated_at}}</small>
                @else
                
                @endif
            </div>

        @endforeach
    @else
            <p> no posts here</p>
    @endif

    <a class="btn btn-dark" href="/posts/create">Create new</a>
@endsection

