{{$titulo='La Casa de Teresa:Usuario'}}
{{$tituloPagina='Crear Usuario'}}
{{$SubtituloPagina=''}}
@extends('sistema.layoutsistema')
@section('Contenido')
{{-- @if ($errors->any())
    <div class="alert alert-danger"> 
    <h6 class="">Corrige los siguientes errores</h6>   
    <ul>
    @foreach($errors->all() as  $rr) 
          <li> {{ $rr }} </li>
    @endforeach    
    </ul>

    </div>
@endif
 --}}

<div class="text-center ">
<form method="POST" action="{{ url('usuarios/save') }}" >
    {!! csrf_field() !!} 
    <div class="form-group">
    <label for="name" class="txt-info">Nombre</label>
	<input type="text" name="name" id="name" placeholder="Juan Perez" value={{old('name')}}><br>
		
	@if ($errors->has('name'))	        	 
		 <div class="alert alert-danger" role="alert">
    	 <strong>Error !</strong>{{$errors->first('name') }}		
    	 </div>
	@endif
	
	</div>
	<div class="form-group">
	<label for="email" class="txt-info">Email</label>
	<input type="email" name="email"  id="email" placeholder="sitio@empresa.com" value={{old('email')}}><br>
	
	@if ($errors->has('email'))	        	 
		<div class="alert alert-danger" role="alert">
    	 <strong>Error !</strong>{{$errors->first('email') }}		
		</div>
	@endif
	
	</div>
	<div class="form-group">
	<label for="password" class="txt-info"	>Password</label>	
	<input type="password" name="password" id="password" placeholder="mayor a 6 caracteres" >
	
	@if ($errors->has('password'))	        	 
		<div class="alert alert-danger" role="alert">
    	<strong>Error !</strong>{{$errors->first('password') }}		
		</div>
	@endif
	
	</div>
	<button class="submit"> Grabar Usuario</button>
</form>
</div>

<a href="{{url("/usuarios")}}" class="">Regresar Listado usuarios</a><br>

@endsection