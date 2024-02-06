@extends('layout.app')

@section('content')
     
    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px; background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ env('APP_URL') }}img/page-header-02.jpg), no-repeat center center;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Contactos</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 "><a class="text-white" href="">Institucional</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0">Conoce mas sobre nosotros...</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

     <div class="container-fluid">
        <div class="row pb-4">
            <div class="col-md-4">
                @include('layout.navbar.form')
            </div>
            <div class="col-md-4">
                <h4 class="text-center mt-3">Datos de Contactos</h4>

               <div class="mt-4">
                <h6 class="bg-n-verde-02 p-3 text-white" style="border-radius: 15px"><i class="fas fa-map-marker-alt"></i> Calle 51 # 16-66, Barrancabermeja, Colombia </h6>
                <h6 class="bg-n-verde-01 p-3 text-white" style="border-radius: 15px"><i class="fas fa-phone-alt"></i> +57 317 4100817 (Estudiantil) </h6>
                <h6 class="bg-n-verde-02 p-3 text-white" style="border-radius: 15px"><i class="fab fa-whatsapp"></i> +57 310 4962668 (Comercial) </h6>
                <h6 class="bg-n-verde-01 p-3 text-white" style="border-radius: 15px"><i class="fab fa-facebook"></i> INTESA </h6>
                <h6 class="bg-n-verde-02 p-3 text-white" style="border-radius: 15px"><i class="fab fa-instagram"></i> instituto.intesa </h6>
               </div>
              
             
            </div>
            <div cl class="col-md-4">
                <h4 class="text-center mt-3">Correos Institucionales</h4>

                <div class="mt-5 ">

                    <p class=" text-center" >
                        <i class="fas fa-2x fa-university text-dark"></i>
                        <h6 class="text-center" style="border-radius: 15px">academia@institutointesa.edu.co </h6>
                    </p>

                    <p class="text-center">
                        <i class="fas fa-2x fa-user-cog text-dark"></i>
                        <h6 class="text-center" style="border-radius: 15px"> coordinacion@institutointesa.edu.co </h6>
                    </p>

                    <p class="text-center">
                        <i class="fas fa-2x fa-user-check text-dark"></i>
                        <h6 class="text-center" style="border-radius: 15px"> etapaproductiva@institutointesa.edu.co </h6>
                    </p>

                    <p class="text-center">
                        <i class="fab fa-2x fa-hive text-dark"></i>
                        <h6 class="text-center" style="border-radius: 15px">hojasdevida@institutointesa.edu.co </h6>
                    </p>


                </div>

  
            </div>
        </div>
     </div>
     
      
@endsection