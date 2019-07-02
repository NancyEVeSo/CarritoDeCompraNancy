@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <img src="imag/kylie2.jpg" alt="">  
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header" style="color: black"><b>COMESTICS</b></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @include('productos')
                    @include('carrito')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script type="text/javascript"> 
    // window.onload=function () {
    //     $('#carrito').hide();
    // }
    window.onload = function() {
        window.onload=
        $('#carrito').hide(),
         $('#btnInicio').hide()
    };

    function ver_carrito() {
        $('#productos').hide()
        $('#carrito').show();
         $('#btnCarrito').hide();
          $('#btnInicio').show();
    }    
    function ver_productos() {
        $('#productos').show()
        $('#carrito').hide();
         $('#btnInicio').hide();
         $('#btnCarrito').show();
      

    } 

    // $('#btnCarrito').click(function (e) {
    //     // $('#productos').hide()
    //     // $('#carrito').show();
    // });
</script>



 