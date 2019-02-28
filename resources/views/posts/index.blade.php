@extends('layouts.app')
@section('content')
<h3>Posts</h3>
@if(count($posts)>0)
@foreach($posts as $post)
<div class="well">
<h3><a href="/lsapp/public/posts/{{$post->id}}">{{$post->title}}</h3>
<small>Written at  {{$post->created_at }} </small>

</div>
{{$posts->links()}}
@endforeach
@else
<p>no posts found</p>
@endif
@endsection