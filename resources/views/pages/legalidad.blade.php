@extends('layout.app')

@section('content')
     
    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 40px; background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ env('APP_URL') }}img/page-header-02.jpg), no-repeat center center;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Legalidad</h3>
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
                <div class="col-lg-12">
                    <div class="text-left mb-4">
                        <h4 class="mt-5">Licencia de Funcionamiento</h4>
                        <p class="text-justify mb-4">Licencia de Funcionamiento <b> N° 3021 del 14 de Diciembre del 2015.</b> <br> Secretaría de Educación de Barrancabermeja</p>

                        <h4 class="mt-2">SIET</h4>
                        <p class="text-justify">Código de la Institución: <b> 8052 </b> <br>
                            Consultar : <a href="https://siet.mineducacion.gov.co/consultasiet/institucion/index.jsp#"><b>CLICK AQUI</b></a> 
                        </p>
                        <img class="mb-3" src="{{ env('APP_URL') }}img/siet.png" width="50%" alt="">

                        <h4 class="mt-4">Resolución</h4>
                        <p class="mt-4"><b>- Tecnico Laboral</b> Operador de Maquinaria Pesada <br> <span class="text-primary">Resolución 0259 del 16 de marzo del 2021</span> </p>
                        <p><b>- Tecnico Laboral</b> Mecanica Diesel Automotriz <br> <span class="text-primary"> Resolución 1173 del 23 de noviembre del 2021 </span> </p>
                        <p><b>- Tecnico Laboral</b> Seguridad en el Trabajo <br>  <span class="text-primary">Resolución 0259 del 16 de marzo del 2021 </span>  </p>
                        <p><b>- Tecnico Laboral</b> Auxiliar de Primera Infancia <br> <span class="text-primary">Resolución 1173 del 23 de noviembre del 2021 </span></p>
                        <p><b>- Tecnico Laboral</b> Auxiliar Administrativo <br> <span class="text-primary">Resolución 1173 del 23 de noviembre del 2021</span> </p>

                    </div>
                    
                </div>
            </div>


        </div>
    </div>

  


      
@endsection