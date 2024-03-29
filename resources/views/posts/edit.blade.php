@extends('layouts.app')
@section('content')
<h3>Edit Post</h3>
{!! Form::open(['action' => ['PostController@update',$post->id],'method'=>'POST']) !!}
<div class="form-group">
    {{Form::label('title','Title')}}
    {{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Insert here'])}}
</div>
<div class="form-group">
        {{Form::label('body','Body')}}
        {{Form::textarea('body',$post->body,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'text here'])}}
    </div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('submit',['class'=>'btn btn-primary'])}}
    
{!! Form::close() !!}
@endsection