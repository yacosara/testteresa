@extends('layout')
{{$titulo='La Casa de Teresa:Login'}}
{{$tituloPagina='Login'}}
{{$SubtituloPagina='Acceso al Sistema de Gestión.'}}
@section('Estilos')
 <link href="@asset('css/floating-labels.css')"  rel="stylesheet">
 <link href="@asset('css/bootstrap.min.css')" rel="stylesheet">
@endsection

@section('Contenido')
      

    <div class="centered text-center">            
      <img id="profile-img" class="profile-img-card block-center" src="{{@asset('images/login.png')}}" />

              <form method="POST" action="{{ url('usuarios/login') }}" >
               {!! csrf_field() !!} 
                <div class="form-group">
                <span id="reauth-email" class="reauth-email"></span>
                <input name ="email" type="email" id="inputEmail"  placeholder="Email address" required autofocus>
                </div>
                <div class="form-group">
                <input name = "password" width="12" type="password" id="inputPassword"  placeholder="Password" required>
                </div>
                <div id="remember" class="checkbox ">
                    <label>
                        <input type="checkbox" value="remember-me"> Recordar mi password
                    </label>
                </div>
                
                <button class="submit"> Ingresar</button>
            </form>
            <!-- /form -->
    </div>
    <div class="text-center">
     <a btn-primary btn-sm btn-info btn-signin  href="{{route('usuario.index')}}">Ingresar</a>      
    </div>
    
@endsection


