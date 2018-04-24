{{$titulo='La Casa de Teresa:Usuario'}}
{{$tituloPagina='Usuarios'}}
{{$SubtituloPagina=''}}
@extends('sistema.layoutsistema')
@section('Contenido')
<div class="text-center ">
<p class=""> 	Id . ' ' . {{$user->id}} </p>
<p class=""> 	Nombre . ' ' . {{$user->name}} </p>
<p class=""> 	Email . ' ' . {{$user->email}} </p>
	{{-- $datauser=User::find($id);
	$datauser->name; --}}
<a href="{{url("/usuarios")}}" class="">Regresar Listado usuarios</a><br>
{{-- <a href="{{url()->previous()}}" class="">Regresar</a> --}}
<a href="{{action('UserController@index')}}" class="">Regresar</a>
</div>
@endsection