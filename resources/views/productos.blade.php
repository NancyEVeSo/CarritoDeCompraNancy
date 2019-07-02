
 <main id="productos" class="container">
            
    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-6" >
            <img class="rounded-circle" src="imag/labRosa.jpg" alt="Generic placeholder image" width="300" height="300">
            <h2 style="color: black"> <b>Labial Mate </b> </h2>
            <h3 style="color: black"> <b> KYLIE</b> </h3>
            <p style="color: black"> <b>COLOR:</b> pink lujoso <br> <b>PRECIO:</b> $10,00</p>
            <br>
            <p><a href="#" class="btn btn-dark producto" precio="10" titulo="Labial Mate Kylie"  role="button">Add </a></p>
            
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-6">
            <img class="rounded-circle" src="imag/polvo.jpg" width="300" height="300">
            <h2 style="color: black"> <b>Polvo Compacto </b> </h2>
            <h3 style="color: black"> <b> KYLIE</b> </h3>
            <p style="color: black"> <b>COLOR:</b> Medium <br> <b>PRECIO:</b> $20,00</p>
             <br>
            <p><a href="#" class="btn btn-dark producto" precio="20" titulo="Polvo Compacto kylie"  role="button">Añadir</a></p>
          </div><!-- /.col-lg-4 -->
          
        </div><!-- /.row -->


        <div class="row">
            <div class="col-lg-6">
            <img class="rounded-circle" src="imag/Spray.jpg" width="310" height="300">
            <h2 style="color: black"> <b>Spray de Rostro </b> </h2>
            <h3 style="color: black"> <b> KYLIE</b> </h3>
            <p style="color: black"> <b>COLOR:</b> Medium <br> <b>PRECIO:</b> $24,00</p>
            <form action="{{url('\mostrarP')}}" method="post" accept-charset="utf-8">
             <br>
            <p><a href="#" class="btn btn-dark producto" precio="24" titulo="Spray de Rostro Kylie"  role="button">Añadir</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-6">
            <img class="rounded-circle" src="imag/Somb.jpg" width="300" height="300">
            <h2 style="color: black"> <b>Brillo de Ojos </b> </h2>
            <h3 style="color: black"> <b> KYLIE</b> </h3>
            <p style="color: black"> <b>COLOR:</b> Vino  <br> <b>PRECIO:</b> $20,00</p>
             <br>
            <p><a href="#" class="btn btn-dark producto" precio="20" titulo="Brillo de Ojos Kylie"  role="button">Añadir</a></p>
          </div><!-- /.col-lg-4 -->
          
        </div><!-- /.row -->



        <div class="row">
          <div class="col-lg-6" >
            <img class="rounded-circle" src="imag/Sombras.jpg" alt="Generic placeholder image" width="300" height="300">
            <h2 style="color: black"> <b>Paleta de Sombras </b> </h2>
            <h3 style="color: black"> <b> KYLIE</b> </h3>
            <p style="color: black"> <b>COLOR:</b> Diversos<br> <b>PRECIO:</b> $42,00</p>
             <br>
            <p><a href="#" class="btn btn-dark producto" precio="42" titulo="Paletas de Sombras Kylie"  role="button">Añadir</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-6">
            <img class="rounded-circle" src="imag/Deliniador.jpg" width="300" height="300">
            <h2 style="color: black"> <b>Deliniador de Ojos</b> </h2>
            <h3 style="color: black"> <b> KYLIE</b> </h3>
            <p style="color: black"> <b>COLOR:</b> Negro <br> <b>PRECIO:</b> $10,00</p>
            <br>
            <p><a href="#" class="btn btn-dark producto" precio="10" titulo="Deliniador de Ojos Kylie"  role="button">Añadir</a></p>
          </div><!-- /.col-lg-4 -->
          
        </div><!-- /.row -->


        




   
    

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
    <script src="{{ asset('https://code.jquery.com/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('js/minicart.js')}}"></script>
    <script>
        $('.producto').on('click',function(e){
            e.stopPropagation();
            paypal.minicart.cart.add({
            business: 'uhperezoscar@gmail.com', // Cuenta paypal para recibir el dinero
            item_name: $(this).attr("titulo"),
            amount: $(this).attr("precio"),
            currency_code: 'USD',
          
          });
        })
    // configuración inicial del carrito 
        paypal.minicart.render({
      strings:{
          button:'Pagar'
         ,buttonAlt: "Total"
         ,subtotal: 'Total:'
         ,empty: 'No hay productos en el carrito'
        }
        });
        // Eventos para agregar productos al carrito
        // 
        
    </script>