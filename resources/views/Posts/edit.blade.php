@extends('layouts.app')

@section('content')
<h1> created Post</h1>
{!! Form::open(['action' => ['App\Http\Controllers\PostsController@update',$post->id],'method'=>'POST']) !!}
<div class="form-group">
    {{Form::label('title','Title')}}
  {{Form::text('title', $post->title,['class'=>'form-control','placeholder'=>'Input Title'])}}
  {{Form::label('body','Body')}}
  {{Form::textarea('body', $post->body,['class'=>'form-control','placeholder'=>'Input Your Post'])}}
 
  
</div>
{{Form::hidden('_method','PUT')}}
{{Form::submit('Update',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection