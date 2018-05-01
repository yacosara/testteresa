@extends('sistema.layoutsistema')
{{$titulo='Usuarios'}}
{{$tituloPagina='	Usuarios'}}
{{$SubtituloPagina='Usuarios del Sistema de Gestión'}}
@section('Contenido')
@if(! empty($users)) 


<table class="table table-striped">
  <thead class ='bg-primary text-white'>
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
           <a href="/usuarios/create" >
              <span class="oi oi-plus"></span>
           </a>      
           <a href="/usuarios/{{$user->id}}/edit" >
              <span class="oi oi-pencil"></span>
           </a>
           <a href="/usuarios/{{$user->id}}" >
              <span class="oi oi-eye"></span>
           </a>
           <button type='submit' class='btn btn-link' > 
              <span class="oi oi-trash"></span>
           </button> 
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
</div> 

@endsection



