@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
<div class="panel-heading">Dashboard</div>

<div class="panel-body">
<a href="/lsapp/public/posts/create" class="btn btn-primary">Create Post</a>
<p>Your Blog  posts</p>
<table class="table table-striped">
<tr>
    <th>Title</th>
    <th></th>
    <th></th>
</tr>
@if(count($posts)>0))
@foreach($posts as $post)
<tr>
<th>{{$post->title}}</th>
<th><a href="/lsapp/public/posts/{{$post->id}}edit" class="btn btn-default">Edit</a></th>
        <th>{!!Form::open(['action'=>['PostController@destroy',$post->id],'method'=>'POST','class'=>'pull-right'])!!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                {!!Form::close()!!}</th>
    </tr>
@endforeach
</table>
@else 
<h1>No blog posts</h1>
@endif


</div>


</div>
</div>
</div>
</div>
</div>
@endsection
