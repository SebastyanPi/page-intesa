<x-program name="" img="tl_seguri.png">

    @slot('name')
    Técnico laboral En Seguridad En El Trabajo
    @endslot


    @slot('resolucion')
        Resolución 1173 del 23 de Noviembre del 2021 - Secretaria de Educación de Barrancabermeja, Santander
        
    @endslot

    @slot('ocupacional')

    El egresado del <b> Técnico laboral En Seguridad En El 
    Trabajo </b>, apoyará las actividades de promoción y 
    prevención, teniendo en cuenta los factores de 
    riesgo y el trabajo seguro, apoyará actividades de 
    control y prevención de riesgos en alturas, 
    observará y valorará la complejidad de los factores 
    de riesgo profesional en el ámbito laboral, 
    propondrá y aplicará las medidas de control 
    requeridas para atenuar o eliminar los factores de 
    riesgo existentes en los ambientes de trabajo, de 
    acuerdo a sus funciones, apoyará en la solucion de 
    problemas de seguridad en cualquier sector 
    económico.

    @endslot

    @slot('video')
    {{ env('APP_URL') }}video/seguridad.mp4
    @endslot


    @slot('duracion')
        2 Semestres
    @endslot

    @slot('requisitos')
    - Fotocopia del documento de identidad. <br>
    - Acta de grado o diploma de bachiller o certificado de noveno grado aprobado. <br>

    @endslot

    @slot('sena')
    <div class="p-3 border-1" >
        <div class="row">
            <div class="col-md-3 text-center py-2">
                <img src="{{ env('APP_URL') }}img/sena.png" width="100px" alt="">

            </div>
            <div class="col-md-9">
                <h4 class="text-dark">Contrato de Aprendizaje SENA</h4>
                <p class="text-dark text-justify"> Este programa cuenta con resolución SENA para realizar practicas bajo Contrato de Aprendizaje.</p>
            </div>
        </div>
    </div>
    @endslot

    @slot('modulos')
        <ul>
            <li><b>Modulo.</b> Req. Nacional Dec 1072 Y Res 0312</li>
            <li><b>Modulo.</b> Inglés Técnico</li>
            <li><b>Modulo.</b> Espacios Confinados</li>
            <li><b>Modulo.</b> Medicina Preventiva</li>

            <li><b>Modulo.</b> Nor. En Seguridad E Higiene Industrial</li>
            <li><b>Modulo.</b> Analisis De Riesgo Y Matriz Ram</li>
            <li><b>Modulo.</b> Sistema De Gestion En Seguridad Y Salud En El Trabajo </li>
            <li><b>Modulo.</b> Trabajo En Alturas</li>

            <li><b>Modulo.</b> Normatividad En Medio Ambiente </li>
            <li><b>Modulo.</b> Plan De Emergencia, Ruta De Evacuacion Y Primeros Auxilios</li>
            <li><b>Modulo.</b> Indicadores E Investigacion De Accidentes Y Enfermedades Laborales</li>
            <li><b>Modulo.</b> Manipulacion Y Transporte De Quimicos</li>
        </ul>

    @endslot
</x-program>