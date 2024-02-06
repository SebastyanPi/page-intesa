@extends('layout.app')

@section('content')
    
    <div class="mb-5">
        <img class="w-100" src="{{ env('APP_URL') }}img/{{ $img }}" alt="">
    </div>

    {{ $slot }}


    <div class="container pb-5">

        <div class="row">
            <div class="col-md-6">
                <div class="mb-5">
                    <h5 class="text-dark"><b><i class="fas fa-user-graduate"></i> Perfil Ocupacional </b></h5>
                    <p class="text-justify">
                        {{ $ocupacional }}
                    </p>
                </div>
    
                <div class="mb-5">
                    <h5 class="text-dark"><b><i class="fas fa-clock"></i> Duración </b></h5>
                    <p class="text-justify">
                        {{ $duracion }}
                    </p>
                </div>
               
    
                <div class="mb-5">
                    <h5 class="text-dark"><b> <i class="fas fa-tasks"></i> Requisitos</b></h5>
                    <p class="text-justify">
                        {{ $requisitos }}
                    </p>
                </div>

                <div class="">
                    <h5 class="text-dark  "> <b><i class="fas fa-check-double"></i> Practicas 100% Garantizadas</b></h5>
                </div>
            </div>

            <div class="col-md-6">
                <video width="100%"  id="miVideo" muted autoplay controls>
                    <source  src="{{ $video }}" type="video/mp4">
                </video>
                <button id="unmuteButton" class="btn btn-secondary d-none"><i class="fas fa-volume-up"></i></button>

                <script>
                    var button = document.getElementById('unmuteButton');
                    var video = document.getElementById('miVideo');
                    button.addEventListener('click', function() {
                        miVideo.muted = false;
                    });
                </script>
                
                <div class="p-3 border-1" >
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{ env('APP_URL') }}img/sena.png" width="80%" alt="">

                        </div>
                        <div class="col-md-9">
                            <h4 class="text-dark">Contrato de Aprendizaje SENA</h4>
                            <p class="text-dark text-justify"> Este programa cuenta con resolución SENA para realizar practicas bajo Contrato de Aprendizaje.</p>
                        </div>
                    </div>
                </div>

                <div class="mt-5">
                    <h5 class="text-dark  "> <b><i class="fas fa-coins"></i> Financiación directa solo con la Cedula</b></h5>
                </div>

            </div>
 

        </div>

    </div>

    <div class="container pb-5">
        <div class="row">
            <div class="container col-lg-6 ">
                <div class="">
                    <h4 class="text-dark"><i class="fas fa-book-open"></i> Plan de Estudio</h4>
                    <div class="text-dark mt-4">
                        {{ $modulos }}
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                @include('layout.navbar.form')
            </div>

        </div>
    </div>



    
@endsection

