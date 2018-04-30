<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
  <title>@yield('Titulo')</title>
  </head>
  <body>  

<!-- Bootstrap core CSS -->
    <link href="{{@asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{@asset('css/carousel.css')}}" rel="stylesheet">
   @yield('Estilos')
  <header>
    <nav class="container-fluid navbar navbar-expand-md navbar-dark fixed-top bg-info">
    <div class="navbar navbar-dark bg-info box-shadow">
    <div class="container d-flex justify-content-between">
    <a href="#" class="navbar-brand d-flex align-items-center">
    @include('svgimage')    
    </a>
    </div>
    </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
              <a class="nav-link btn btn-info" href="/">Home<span class="sr-only">(current)</span></a>
          </li>                                  
          <li class="nav-item">
              <a class="nav-link btn btn-info bg-info" href="/usuarios">Usuarios</a>
          </li>     
          
          <li class="nav-item">
              <a class="nav-link btn btn-info bg-info" href="/residentes">Residentes</a>
          </li>            

          <li class="nav-item">
              <a class="nav-link btn btn-info bg-info" href="/residentes">Cerrar Sesion</a>
          </li>            
          </ul>

        </div>        
        </nav>
    </header>
    <section class="p-0.5 mb-0.5 alert alert-primary" role="alert">        
          <h4 class="text-info">{{$tituloPagina}}</h4>
          <p class="text-info">{{$SubtituloPagina}}.</p>
        
    </section>
     

<main role="main">