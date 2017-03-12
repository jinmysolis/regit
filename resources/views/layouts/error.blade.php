@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
  
   <p>Por favor corrija los siguientes errores:</p>
     <ul>
       @foreach($errors->all() as $error)
       <li>{{$error}}</li>
       @endforeach
       
     </ul>
   </div>
   @endif