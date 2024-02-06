@extends('layout.app')

@section('content')


    @include('layout.navbar.navbarvirtual')

 
    <!-- Header Start -->

    <div class="">
        <img src="{{ env('APP_URL') }}img/virtual2.png" alt="" width="100%">
    </div>

    <div class="container-fluid d-none page-header" style="margin-bottom: 90px; background: url({{ env('APP_URL') }}img/CampusV2.png), no-repeat center center;">    
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 100vh">
                <h3 class="display-4 text-white text-uppercase d-none">Historia</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 d-none"><a class="text-white" href="">Institucional</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 d-none ">Conoce mas sobre nosotros...</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


       <!-- Blog Start -->
       <div class="container-fluid pb-5">
        <div class="container pt-5 py-2">
            <div class="row">
                <div class="col-lg-12 pt-5">
                    <div class="row pb-3">
                        <div class="col-lg-12 text-center py-3">
                            <h3> Certificaciones 100% Homologables con los Programas Tecnicos Laborales</h3>
                            <p>Estudia desde la comodidad de tu casa con nuestra Escuela Nacional Virtual</p>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="blog-item position-relative overflow-hidden rounded mb-2">
                                <img class="img-fluid" src="{{ env('APP_URL') }}img/v_ad.jfif" alt="">
                                <a class="blog-overlay text-decoration-none" href="{{ route('pages.virtual.auxadmin') }}">
                                    <h5 class="text-white mb-3">Certifícate en Auxiliar Administrativo</h5>
                                    <p class="text-white m-0"><span class="badge bg-n-verde-01 p-2">Mas información!</span></p>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="blog-item position-relative overflow-hidden rounded mb-2">
                                <img class="img-fluid" src="{{ env('APP_URL') }}img/v_ap.jfif" alt="">
                                <a class="blog-overlay text-decoration-none" href="{{ route('pages.virtual.auxinfancia') }}">
                                    <h5 class="text-white mb-3">Certifícate en Auxiliar de Primera Infancia</h5>
                                    <p class="text-white m-0"><span class="badge bg-n-verde-01 p-2">Mas información!</span></p>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="blog-item position-relative overflow-hidden rounded mb-2">
                                <img class="img-fluid" src="{{ env('APP_URL') }}img/v_st.jfif" alt="">
                                <a class="blog-overlay text-decoration-none" href="{{ route('pages.virtual.seguridad') }}">
                                    <h5 class="text-white mb-3">Certifícate en Seguridad En El Trabajo</h5>
                                    <p class="text-white m-0"><span class="badge bg-n-verde-01 p-2">Mas información!</span></p>
                                </a>
                            </div>
                        </div>

                     
                    </div>
                </div>

                <div class="col-lg-12">
                   
                </div>

            
    
            </div>
        </div>
    </div>

    <div class="container-fluid  d-none">
        <div class="row ">
            <div class="col-md-4 bg-n-verde-01 py-5">
                <div class="p-2 text-center">
                    <h4 class="text-white"><i class="fas fa-headset fa-2x mb-4"></i> <br>Asistida con Docente en <br> <b>Linea</b></h4>
                </div>
            </div>
            <div class="col-md-4 bg-n-verde-02 py-5">
                <div class="p-2 text-center">
                    <h4 class="text-white"><i class="fas fa-check-circle fa-2x mb-4"></i> <br>Campus <br> <b>Virtual</b></h4>
                </div>
            </div>
            <div class="col-md-4 bg-n-verde-01 py-5">
                <div class="p-2 text-center">
                    <h4 class="text-white"><i class="fas fa-mobile-alt fa-2x mb-4"></i> <br>Necesitas un Celular con <br> <b>Datos</b></h4>
                </div>
            </div>
        </div>
    </div>
      
@endsection