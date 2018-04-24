@extends('sistema.layoutsistema')
{{$titulo='Usuarios'}}
{{$tituloPagina='	Usuarios'}}
{{$SubtituloPagina='Usuarios del Sistema de Gestión'}}
@section('Contenido')

@if(! empty($users)) 	
<ul>
@foreach ($users as $user ) 
  <li> 
  		{{$user->name}} , ({{$user->email}})  
  		{{-- <a href="{{url('usuarios/'.$value->id)}}">Ver Detalles</a>  --}}
  		{{-- <a href="{{url("usuarios/{$user->id}")}}">Ver Detalles</a>   --}}
  		{{-- <a href="{{action('UserController@vista',['id'=>$user->id])}}">Ver Detalles</a>   --}}
  		 <a href="{{route('usuario.show',['id'=>$user->id])}}">Ver Detalles</a>  

  </li>	
  
@endforeach; 
</ul>	
@else
<p> No hay usuarios Registrados.</p>
@endif

	

@endsection



