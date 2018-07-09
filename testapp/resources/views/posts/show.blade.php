@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-dark">Go Back</a>
    <br>
    <h3>{{$post->title}}</h3>
   <div>
       {{$post->body}}
   </div>
   <hr>
   <small>Written on {{$post->created_at}}</small>
   <hr>
   <a href="/posts/{{$post->id}}/edit" class ="btn btn-dark">Edit</a>

   {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' =>  'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
   {!!Form::close()!!}
   @endsection


