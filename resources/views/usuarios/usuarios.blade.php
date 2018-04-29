@extends('sistema.layoutsistema')
{{$titulo='Usuarios'}}
{{$tituloPagina='	Usuarios'}}
{{$SubtituloPagina='Usuarios del Sistema de Gestión'}}
@section('Contenido')
@if(! empty($users)) 	
<ul>

</ul>	


<table class="table table-striped">
  <thead >
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">Estado</th>
      <th scope="col">Accion</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($users as $user ) 
 
  		{{-- {{$user->name}} , ({{$user->email}})  
  		 <a href="{{route('usuario.show',['id'=>$user->id])}}">Ver Detalles</a>   --}}
  		{{-- <a href="{{url('usuarios/'.$value->id)}}">Ver Detalles</a>  --}}
  		{{-- <a href="{{url("usuarios/{$user->id}")}}">Ver Detalles</a>   --}}
  		{{-- <a href="{{action('UserController@vista',['id'=>$user->id])}}">Ver Detalles</a>   --}}
  		
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td >{{$user->name}}</td>
      <td >{{$user->email}}</td>      
      <td >{{$user->email}}</td>      
      <td >      
     {{--  <a href="/usuarios/{{$user->id}}/delete" class="btn btn-outline-info btn-sm">Eliminar</a> --}}
      <form action="{{ route('usuario.delete',$user) }}" method="POST">
           {{ csrf_field() }}
           {{ method_field('delete') }}
           <a href="/usuarios/create" class ="btn btn-success"></a>      
           <a href="/usuarios/{{$user->id}}/edit" class="btn btn-warning"></a>
      <a href="/usuarios/{{$user->id}}" class="btn btn-dark "></a>
           <button type='submit' class="btn btn-danger " >  </button>  
       </form>    
      
      </td>
      
    </tr>
  
@endforeach; 
 
  </tbody>
</table>
{!! $users->render() !!}

@else
<p> No hay usuarios Registrados.</p>
@endif

	

@endsection



