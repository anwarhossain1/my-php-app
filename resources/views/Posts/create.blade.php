@extends('layouts.app')

@section('content')
<h1> created Post</h1>
{!! Form::open(['action' => 'App\Http\Controllers\PostsController@store','method'=>'POST']) !!}
<div class="form-group">
    {{Form::label('title','Title')}}
  {{Form::text('title', '',['class'=>'form-control','placeholder'=>'Input Title'])}}
  {{Form::label('body','Body')}}
  {{Form::textarea('body', '',['class'=>'form-control','placeholder'=>'Input Your Post'])}}
  {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
  
</div>
{!! Form::close() !!}
@endsection