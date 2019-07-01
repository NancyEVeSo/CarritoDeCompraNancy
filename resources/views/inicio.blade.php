<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Maquillaje Kylie</title>
	
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
         <link href="{{ asset('css/carusel.css') }}" rel="stylesheet">
         <link rel="stylesheet" href="../css/bootstrap.min.css" />
        <link rel="stylesheet" href="../css/style.css" />
      <script src="{{ asset('js/app.js') }}" defer></script>
      <script
      src="https://code.jquery.com/jquery-1.10.2.js"
      integrity="sha256-it5nQKHTz+34HijZJQkpNBIHsjpV8b6QzMJs9tmOBSo="
      crossorigin="anonymous"
    ></script>
</head>
        <body>
           

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#" style="font-size: 50px">NANCY KOLLECTION</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              
               <div class="flex-center position-ref full-height" >
            @if (Route::has('login'))
                <div class="top-right links" class="float-right">
                    @auth
                        <a class="navbar-brand" href="{{ url('/home') }}"  style="color: white "><p></p>COMPRAR</a>
                        <p></p>
                    @else
                        <a class="navbar-brand" href="{{ route('login') }}" style="color: white">INICIAR SESIÓN</a>

                        @if (Route::has('register'))
                            <a class="navbar-brand"  href="{{ route('register') }}" style="color: white" >REGITRARTE</a>
                        @endif
                    @endauth
                </div>
            @endif

            </li>
            
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            
          </form>
        </div>
      </nav>
    </header>
    <br>
     <br>
      <br>

    <main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="container">
            <div class="row">
                
                <div class="col-12" style=" align="center"" >
                    <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="imag/carucel.png" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1  ></h1>
                <p></p>
                <p><a class="" href="#" role=""></a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="imag/carucel1.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1></h1>
                <p></p>
                <p><a class="" href="#" role=""></a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="imag/carucel3.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1></h1>
                <p></p>
                <p><a class="" href="#" role="button"></a></p>
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

        <div class="container">
            <div class="row">
                <div class="col-4">
                    <img src="imag/eyes.png"  style="height: 300px " >
                     </div>

                <div class="col-8" style="color:black">
                    <p style="font-family: Arial, Helvetica, sans-serif;"><b>Si quieres lucir unos hermosos ojos, impactadores, que atraigan a cualquier galan a tus pies, Nancy Kollection es quien te puede ayudar.</b> </p>
                    <center><img src="imag/Sombra.jpg"  style="height: 230px " ></center>
            </div>
          </div>
        </div>


         <div class="container">
            <div class="row">
                <div class="col-8" style="color:black">
                    <p style="font-family: Arial, Helvetica, sans-serif;"><b> Nancy Kollection te ofrece una cantidad de labiales mates hermosos para que deslumbres y tengas las miradas de todos los chicos.</b> </p>
                    <center><img src="imag/labial.jpg"  style="height: 230px " ></center>
            </div>
                <div class="col-4">
                    <img src="imag/lips.png"  style="height: 300px " >
                </div>
            </div>
        </div>

             
            </div>
            <div class="container">
                <div class="row">
                
                <div class="col-12">
                    <img src="imag/face.jpg " style="height: 500px; width: 1060px " >

                </div>
                 
             </div>
             
            
         </div>
         <div class="container">
             <div class="row">
                <div class="col-12"><p style="color:black; size: 100px" > <center>NANCY KOLLECTION lo mejor para tu estilo.</center></p></div>
             </div>
         </div>
         </main>
        <br>
        <br>
      <!-- FOOTER -->
      <footer class="container" style="color: black">
        <p class="float-right"></p>
        <p>&copy; 2019-NANCY VERA, ESPAM MFL.  &middot;</p>
      </footer>
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../assets/js/vendor/jquery-slim.min.js" ></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
  </body>



	

</html>