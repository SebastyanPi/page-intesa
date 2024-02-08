@extends('layout.app')

@section('content')
     
    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px; background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ env('APP_URL') }}img/page-header-02.jpg), no-repeat center center;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Misión & Visión</h3>
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
                    <img class="img-fluid rounded mb-4 mb-lg-0" width="70%" src="{{ env('APP_URL') }}img/intesa.png" alt="">
                </div>
                <div class="col-lg-7">
                    <div class="text-left mb-4">
                        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Conocenos</h5>
                        <h1>Misión</h1>
                    </div>
                    <p class="text-justify">Formar bajo un modelo pedagógico, por competencia laboral
                        “en el saber hacer”, fundamentados en la práctica por
                        competencias laborales especificas, ofertando programas
                        flexibles y coherentes con las necesidades y/o expectativas de
                        la persona, sociedad, el mercado laboral, sector productivo y las
                        características de la cultura y el entorno; con responsabilidad
                        social y mejoramiento continuo.</p>

                        <div class="text-left mb-4">
                            <h1>Visión</h1>
                        </div>
                        <p class="text-justify">Nos proyectamos para el año 2025 a ser reconocidos en la
                            región y en Colombia por la formación en competencia
                            laborales especificas y responsabilidad social de acuerdo a la
                            necesidad del mercado laboral cambiante por los avance
                            tecnológico; con estándares de calidad.</p>
       
                </div>
            </div>


        </div>
    </div>

  

      
@endsection