@extends('layouts.app')
@section('content')
<h3>Create Post</h3>
{!! Form::open(['action' => 'PostController@store','method'=>'POST']) !!}
<div class="form-group">
    {{Form::label('title','Title')}}
    {{Form::text('title','',['class'=>'form-control','placeholder'=>'Insert here'])}}
</div>
<div class="form-group">
        {{Form::label('body','Body')}}
        {{Form::textarea('body','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'text here'])}}
    </div>
    {{Form::submit('submit',['class'=>'btn btn-primary'])}}
    
{!! Form::close() !!}
@endsection