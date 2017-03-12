@extends('layout.myapp')


@section('content')



<h1>crear post</h1>
{!!Form::model($post,['route'=>['update_post_path',$post->id],'method'=>'PUT'])!!}

<div class="col-md-12">
<div class="form-group">
  {!!Form::label('title', 'Titulo')!!}
  {!!Form::text('title', null,['class'=>'form-control',' placeholder'=>'Por favor introduzca el titulo'])!!}

</div>
    
<div class="form-group">
  {!!Form::label('description', 'Descripcion')!!}
  {!!Form::textArea('description', null,['class'=>'form-control',' placeholder'=>'Por favor introduzca la Descripcion'])!!}

</div>    

<div class="form-group">
  {!!Form::label('url', 'Url')!!}
  {!!Form::text('url', null,['class'=>'form-control',' placeholder'=>'Por favor introduzca la Descripcion'])!!}

</div> 
    
    
</div>
 
 
  <p>
 <center><button type="submit" class="btn btn-info btn-lg">Editar Post</button></center>
 </p>

{!!Form::close()!!}





@endsection