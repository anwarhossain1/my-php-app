@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-default">Go Back</a>
<h1>Post</h1>
<h3>{{$post->title}}</h3>

<div>
    <body>
        {{$post->body}}
    </body>
</div>
<hr>
<small>Written at {{$post->created_at}} By {{$post->user->name}}</small>
<hr>
<a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>


{{-- @if (count($post)>0)
@foreach ($post as $post)
<div class="well">
    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
    <small>Written on {{$post->created_at}}</small>

</div>
       
@endforeach
    
@endif --}}
@endsection