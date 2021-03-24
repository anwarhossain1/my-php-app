@extends('layouts.app')

@section('content')
@if (count($posts)>0)
@foreach ($posts as $post)
<div class="well">
    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>

</div>

       
@endforeach
{{-- {{$posts->links()}} --}}
@else
<h3>No post found</h3>
    
@endif

@endsection