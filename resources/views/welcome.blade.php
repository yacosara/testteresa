    
    {{$titulo='La Casa de Teresa'}}
    {{$tituloPagina=''}}
    {{$SubtituloPagina=''}}
    @include('header',compact('titulo','tituloPagina'));
    
    <div  class="container">  
    <div  class="row"> 
    <div class ="col-sm-12">  
      <div id="myCarousel" class="carousel slide" data-ride="carousel"    >
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="images/adumay1.jpg" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <p><a class="btn btn-lg btn-info" href="{{@asset('contacto')}}"  role="button">Contacto</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="images/adumay2.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <p><a class="btn btn-lg btn-info" href="{{asset('nosotros')}}" role="button">Nuestra Historia</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="images/galeria/galeria3.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <p><a class="btn btn-lg btn-info" href="servicios" role="button">Nuestros Servicios</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

</div>
</div>
</div>


    
      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="images/doctor_tablet.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Servicios</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            <p><a class="btn btn-info" href="#" role="button">Ver Detalles&raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="images/google_bas_project.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Quienes Somos</h2>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            <p><a class="btn btn-info" href="#" role="button">Ver Detalles&raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="images/HCinformatics_dr_tablet.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Recursos</h2>            
            <p><a class="btn btn-info" href="#" role="button">Ver Detalles&raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->

       @include('footer');