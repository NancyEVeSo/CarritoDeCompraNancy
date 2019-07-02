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
    <body style="background-color: #FFCEF3">
        <main id="productos" class="container">
            
        


        



    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-6" >
            <img class="rounded-circle" src="imag/labRosa.jpg" alt="Generic placeholder image" width="300" height="200">
            <h2 style="color: black"> <b>Labial Mate </b> </h2>
            <h3 style="color: black"> <b> KYLIE</b> </h3>
            <p style="color: black"> <b>COLOR:</b> Rojo intenso <br> <b>PRECIO:</b> $10,00</p>
            <form action="{{url('\mostrarP')}}" method="post" accept-charset="utf-8">
            <p style="color: black"><b>Cantidad:</b><input type="text" style="width: 50px" class="form-control form-control-sm" id="colFormLabelSm" placeholder="..." name="cantidad1" value=""></p>
            <br>
            <p><a class="btn btn-dark" href="#" role="button">COMPRAR &raquo;</a></p>
            </form>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-6">
            <img class="rounded-circle" src="imag/polvo.jpg" width="300" height="200">
            <h2 style="color: black"> <b>Polvo Compacto </b> </h2>
            <h3 style="color: black"> <b> KYLIE</b> </h3>
            <p style="color: black"> <b>COLOR:</b> Medium <br> <b>PRECIO:</b> $20,00</p>
            <form action="{{url('\mostrarP')}}" method="post" accept-charset="utf-8">
            <p style="color: black"><b>Cantidad:</b><input type="text" style="width: 50px" class="form-control form-control-sm" id="colFormLabelSm" placeholder="..." name="cantidad1" value=""></p>
            <br>
            <p><a class="btn btn-dark" href="#" role="button">COMPRAR &raquo;</a></p>
            </form>
          </div><!-- /.col-lg-4 -->
          
        </div><!-- /.row -->


        <div class="row">
            <div class="col-lg-6">
            <img class="rounded-circle" src="imag/Spray.jpg" width="310" height="200">
            <h2 style="color: black"> <b>Spray de Rostro </b> </h2>
            <h3 style="color: black"> <b> KYLIE</b> </h3>
            <p style="color: black"> <b>COLOR:</b> Medium <br> <b>PRECIO:</b> $24,00</p>
            <form action="{{url('\mostrarP')}}" method="post" accept-charset="utf-8">
            <p style="color: black"><b>Cantidad:</b><input type="text" style="width: 50px" class="form-control form-control-sm" id="colFormLabelSm" placeholder="..." name="cantidad1" value=""></p>
            <br>
            <p><a class="btn btn-dark" href="#" role="button">COMPRAR &raquo;</a></p>
            </form>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-6">
            <img class="rounded-circle" src="imag/Somb.jpg" width="300" height="200">
            <h2 style="color: black"> <b>Brillo de Ojos </b> </h2>
            <h3 style="color: black"> <b> KYLIE</b> </h3>
            <p style="color: black"> <b>COLOR:</b> Vino  <br> <b>PRECIO:</b> $20,00</p>
            <form action="{{url('\mostrarP')}}" method="post" accept-charset="utf-8">
            <p style="color: black"><b>Cantidad:</b><input type="text" style="width: 50px" class="form-control form-control-sm" id="colFormLabelSm" placeholder="..." name="cantidad1" value=""></p>
            <br>
            <p><a class="btn btn-dark" href="#" role="button">COMPRAR &raquo;</a></p>
          </form>
          </div><!-- /.col-lg-4 -->
          
        </div><!-- /.row -->



        <div class="row">
          <div class="col-lg-6" >
            <img class="rounded-circle" src="imag/Sombras.jpg" alt="Generic placeholder image" width="300" height="200">
            <h2 style="color: black"> <b>Paleta de Sombras </b> </h2>
            <h3 style="color: black"> <b> KYLIE</b> </h3>
            <p style="color: black"> <b>COLOR:</b> Diversos<br> <b>PRECIO:</b> $42,00</p>
            <p style="color: black"><b>Cantidad:</b><input type="text" style="width: 50px" class="form-control form-control-sm" id="colFormLabelSm" placeholder="..." name="cantidad1" value=""></p>
            <br>
            <p><a class="btn btn-dark" href="#" role="button">COMPRAR &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-6">
            <img class="rounded-circle" src="imag/Deliniador.jpg" width="300" height="200">
            <h2 style="color: black"> <b>Deliniador </b> </h2>
            <h3 style="color: black"> <b> KYLIE</b> </h3>
            <p style="color: black"> <b>COLOR:</b> Negro <br> <b>PRECIO:</b> $10,00</p>
            <p style="color: black"><b>Cantidad:</b><input type="text" style="width: 50px" class="form-control form-control-sm" id="colFormLabelSm" placeholder="..." name="cantidad1" value=""></p>
            <br>
            <p><a class="btn btn-dark" href="#" role="button">COMPRAR &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          
        </div><!-- /.row -->


        




    <footer class="container" style="color: black">
        <p class="float-right"></p>
        <p>&copy; 2019-NANCY VERA, ESPAM MFL.  &middot;</p>
      </footer>
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src="../../assets/js/vendor/jquery-slim.min.js" ></script> -->
    <!-- <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script> -->


    
    <!-- <script src="../../assets/js/vendor/popper.min.js"></script> -->
    <!-- <script src="../../dist/js/bootstrap.min.js"></script> -->
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <!-- <script src="../../assets/js/vendor/holder.min.js"></script> -->
    </main>
  </body>



    

</html>
