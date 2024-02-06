@extends('layout.app')

@section('content')

    @include('layout.navbar.navbarvirtual')


    <div class=" mb-5">
        <img class="w-100" src="{{ env('APP_URL') }}img/{{ $img }}" alt="">
    </div>

    {{ $slot }}


    <div class="container pb-5">

        <div class="row">
            <div class="col-md-6">

                <div class="mb-5">
                    <h5 class="text-dark"><b> <i class="fas fa-graduation-cap"></i> Homologaciones </b></h5>
                    <p class="text-justify mt-3">
                        {{ $titulo }}
                    </p>
                </div>

                <div class="mb-5">
                    <h5 class="text-dark"><b><i class="fas fa-user-graduate"></i> Perfil Ocupacional </b></h5>
                    <p class="text-justify mt-3">
                        {{ $ocupacional }}
                    </p>
                </div>

                <div class="mb-5">
                    <h5 class="text-dark"><b><i class="fas fa-calendar"></i> Horario</b></h5>
                    <p class="text-justify mt-3">
                        {{ $horario }}
                    </p>
                </div>
    
                <div class="mb-5">
                    <h5 class="text-dark"><b><i class="fas fa-clock"></i> Duración </b></h5>
                    <p class="text-justify mt-3">
                        {{ $duracion }}
                    </p>
                </div>
               
    
                <div class="mb-5">
                    <h5 class="text-dark"><b><i class="fas fa-tasks"></i> Requisitos</b></h5>
                    <p class="text-justify mt-3">
                        {{ $requisitos }}
                    </p>
                </div>

                <div class="mb-5">
                    <h5 class="text-dark"><b><i class="fas fa-video"></i> Google Meet</b></h5>
                    <p class="text-justify mt-3">
                     Clase asistida por Docente atraves de la plataforma de Google Meet.
                    </p>
                </div>

            </div>

            <div class="col-md-6">
               
                <div class="border-2 ">
                    @include('layout.navbar.form')
                </div>

                <div class="pt-5">
                    <h4 class="text-dark "><i class="fas fa-book-open"></i> Plan de Estudio</h4>
                    <div class="text-dark mt-4">
                        {{ $modulos }}
                    </div>
                </div>

                
                
            </div>

            


 

        </div>

    </div>


@endsection

