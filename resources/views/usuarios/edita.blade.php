{{$titulo='La Casa de Teresa:Usuario'}}
{{$tituloPagina='Editar Usuario'}}
{{$SubtituloPagina=''}}
@extends('sistema.layoutsistema')
@section('Contenido')

@if ($errors->any())
    <div class="alert alert-danger"> 
    <h6 class="">Corrige los siguientes errores</h6>   
    <ul>
    @foreach($errors->all() as  $rr) 
          <li> {{ $rr }} </li>
    @endforeach    
    </ul>

    </div>
@endif


<div class="text-center ">
<form method="POST" action="{{ url("usuarios/{$user->id}/update") }}" >
    {!! method_field('PUT') !!} 
    {!! csrf_field() !!} 
    <div class="form-group">
    <input type="hidden" name="id" id="id" placeholder="Juan Perez" value={{old('id',$user->id)}}>

    <label for="name" class="txt-info">Nombre</label>
	<input type="text" name="name" id="name" placeholder="Juan Perez" value={{old('name',$user->name)}}><br>
	
	</div>
	<div class="form-group">
	<label for="email" class="txt-info">Email</label>
	<input type="email" name="email"  id="email" placeholder="sitio@empresa.com" 
	value={{old('email',$user->email)}}><br>
	
	</div>
	<div class="form-group">
	<label for="password" class="txt-info"	>Password</label>	
	<input type="password" name="password" id="password" placeholder="mayor a 6 caracteres" >	
	
	</div>
	<button class="submit">Actualizar Usuario</button>
</form>
</div>

@endsection