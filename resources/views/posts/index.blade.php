@extends('layout.myapp')


@section('content')
@foreach($posts as $post)
<div class="row">
    <div class="col-md-12">
        <h2><a href="{{route('post_path',['post'=>$post->id])}}">{{$post->title}}</a></h2>
    <p>{{$post->created_at->diffForHumans()}}</p>
    
    <a href="{{route('edit_post_path',$post->id)}}" class="btn btn-danger glyphicon glyphicon-refresh"></a> 
    <a href="{{route('delete_post_path',$post->id)}}" onclick="return confirm('Seguro desea eliminar')"class="btn btn-warning glyphicon glyphicon-trash"></a>
    </div>
 <hr>
 </div>
@endforeach
{{ $posts->render()}}

@endsection