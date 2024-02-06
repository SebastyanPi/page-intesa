@extends('layout.app')

@section('content')
     
    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px; background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ env('APP_URL') }}img/page-header-02.jpg), no-repeat center center;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">¿Quiénes Somos?</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 "><a class="text-white" href="">Institucional</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0">Conoce mas sobre nosotros...</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

 
     <!-- About Start -->
     <div class="container-fluid pb-4 ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid rounded mb-4 mb-lg-0" src="{{ env('APP_URL') }}img/quienes-portada.jpg" alt="">
                </div>
                <div class="col-lg-7">
                    <div class="text-left mb-4">
                        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Conocenos</h5>
                        <h1>Somos INTESA</h1>
                    </div>
                    <p class="text-justify">Somos una institución para el trabajo y desarrollo humano, con licencia de funcionamiento según resolución 3121 del 14 de diciembre 2015.
                        Ofrecemos capacitación de nivel técnico, diplomados, cursos y seminarios. Nos identificamos con la política de calidad y mejoramiento continuo; brindando así, una formación acorde a las necesidades laborales, conforme a los avances tecnológicos del mercado</p>
                    <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Mas información!</a>
                </div>
            </div>
        </div>
    </div>

  

    @include('layout.footer.footer')
      
@endsection