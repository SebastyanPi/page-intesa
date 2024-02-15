@extends('layout.app')

@section('content')
     
     <!-- Header Start -->
   <div class="mb-5">
    <img class="w-100" src="{{ env('APP_URL') }}img/cur_corto.png" alt="">
</div>
    <!-- Header End -->

      <!-- Blog Start -->
      <div class="container-fluid ">
        <div class="row">
            <div class="col-md-6 mb-5">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                      <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                          <button class="btn btn-link text-dark" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">

                            <i class="fas fa-bookmark"></i> Cursos Administrativos <small><b class="text-primary"> (Click para ver mas <i class="fas fa-arrow-circle-down"></i> )</b></small> 
                          </button>
                        </h2>
                      </div>
                  
                      <div id="collapse1" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <img src="{{ env('APP_URL') }}img/ccad.png" width="100%" alt=""> <br>
                            
                            <table class="table table-bordered mt-4">
                                <tbody>

                                    <tr >
                                        <td class="d-flex justify-content-between" ><span><b>Curso.</b> Requisitos para la creación de un empresa o negocio</span> <a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary text-left"> Información <i class="fas fa-arrow-right"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Obligaciones y derechos laborales</span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Obligaciones e impuestos empresariales</span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Ortografía, redacción y compresión de texto</span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Organización de eventos</span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Lenguaje profesional</span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Administración de documento y archivo</span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Generalidades administración de empresa</span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Mercadeo y ventas </span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Atención al cliente </span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Matematica Financiera </span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b>  Análisis e indicadores financieros </span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b>  Costo de producción </span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b>  Asientos y registro contables </span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                    </tr>
         
                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b>  Libros de contabilidad </span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b>  Estados financieros </span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b>  Ofimatica </span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                    </tr>

                                </tbody>
                            </table>

                           
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                          <button class="btn btn-link collapsed text-dark" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                            <i class="fas fa-bookmark"></i> Cursos de Seguridad Laboral <small> <b class="text-primary"> (Click para ver mas <i class="fas fa-arrow-circle-down"></i> )</b> </small> 
                          </button>
                        </h2>
                      </div>
                      <div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <img src="{{ env('APP_URL') }}img/ccsle.png" width="100%" alt=""> <br>
                            <table class="table table-bordered mt-4">
                                <tbody>

                                    <tr >
                                        <td class="d-flex justify-content-between" ><span><b>Curso.</b> Seguridad laboral </span> <a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary text-left"> Información <i class="fas fa-arrow-right"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Normatividad en el Medio Ambiente </span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Seguridad e higiene industrial</span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Analisis de riesgo y matriz RAM</span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Gestión en seguridad y salud en el trabajo</span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Plan de emergencia y ruta de evacuación</span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Primeros Auxilios</span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Indicadores e insvestigación de accidentes </span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Enfermedades laborales </span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Manipulación y transporte quimico </span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Requisitos del decreto 1072 y resolución 0312 </span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Trabajo en Altura </span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Espacio Confinado </span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                    </tr>

                                  

                                </tbody>
                            </table>
                        </div>
                      </div>
                    </div>

                      <div class="card">
                        <div class="card-header" id="headingTwo">
                          <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-dark" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                <i class="fas fa-bookmark"></i> Cursos de Mecanica Automotriz <small><b class="text-primary"> (Click para ver mas <i class="fas fa-arrow-circle-down"></i> )</b></small>
                            </button>
                          </h2>
                        </div>
                        <div id="collapse4" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <img src="{{ env('APP_URL') }}img/ccma.png" width="100%" alt=""> <br>
                                <table class="table table-bordered mt-4">
                                    <tbody>
    
                                        <tr >
                                            <td class="d-flex justify-content-between" ><span><b>Curso.</b> Sistema de alimentación del motor </span> <a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary text-left"> Información <i class="fas fa-arrow-right"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Sistema de encendido del motor </span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                        </tr>
    
                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Sistema de refrigeracion del motor</span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                        </tr>
    
                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Sistema de lubricación del motor</span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                        </tr>
    
                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Sistema de transmisión del vehiculo</span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                        </tr>
    
                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Sistema de frenos del vehiculo</span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                        </tr>
    
                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Sistema de electricidad del vehiculo</span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                        </tr>
    
                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Sistema de dirección del vehiculo </span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                        </tr>
    
                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Sistema de suspensión del vehiculo </span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                        </tr>
    
                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Sistema Hidraulico del Vehiculo </span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                        </tr>
    
                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Sistema de Inyección Electronica </span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                        </tr>
    
                                   
                                    </tbody>
                                </table>

                             
                               
                            </div>
                        </div>
                      </div>

                    <div class="card">
                      <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                          <button class="btn btn-link collapsed text-dark" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <i class="fas fa-bookmark"></i> Cursos de Logistica <small><b class="text-primary"> (Click para ver mas <i class="fas fa-arrow-circle-down"></i> )</b></small>
                          </button>
                        </h2>
                      </div>
                      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <img src="{{ env('APP_URL') }}img/ccl.png" width="100%" alt=""> <br>
                            <table class="table table-bordered mt-4">
                                <tbody>

                                    <tr >
                                        <td class="d-flex justify-content-between" ><span><b>Curso.</b> Conocimiento Tecnicos en Logistica</span> <a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary text-left"> Información <i class="fas fa-arrow-right"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Operaciones comerciales (pedido, compra, cotización, venta, facturación) </span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Sistema de Inventario</span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Empaque y Embalaje</span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Distribución y trasnporte</span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Gestión integral del almacenamiento </span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                    </tr>

                    
                                </tbody>
                            </table>
                           
                        </div>
                      </div>
                    </div>
                  </div>

                  
            </div>

            <div class="col-md-6">
                <div class="accordion" id="accordionExample">

                    <div class="card">
                        <div class="card-header" id="headingTwo">
                          <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-dark" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                <i class="fas fa-bookmark"></i> Cursos de Pedagogia Infantil <small><b class="text-primary"> (Click para ver mas <i class="fas fa-arrow-circle-down"></i> )</b></small>
                            </button>
                          </h2>
                        </div>
                        <div id="collapse3" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <img src="{{ env('APP_URL') }}img/ccapi.png" width="100%" alt=""> <br>
                                
                                <table class="table table-bordered mt-4">
                                    <tbody>
    
                                        <tr >
                                            <td class="d-flex justify-content-between" ><span><b>Curso.</b> Educación física para la infancia</span> <a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary text-left"> Información <i class="fas fa-arrow-right"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Expresión corporal infancia </span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                        </tr>
    
                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Teatro Infantil</span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                        </tr>
    
                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Musica en la Infancia</span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                        </tr>
    
                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Lectoescritura</span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                        </tr> 
    
                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Primeros auxilios en la infancia</span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                        </tr>
    
                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Nutrición</span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                        </tr>
    
                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Matematicas en la Infancia</span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                        </tr>
    
                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Ciencia en la Infancia </span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                        </tr>
    
                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Planeación Pedagogica </span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                        </tr>
    
                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Investigación en el Aula </span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                        </tr>
    
                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Psicologia General </span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                        </tr>
    
                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Psicologia Evolutiva </span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                        </tr>
    
                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Psicologia del Aprendizaje </span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                        </tr>
             
                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b>  Juego y Ludica  </span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                        </tr>
    
                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b>  Material didactico </span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                        </tr>
    
                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b>  Actividades Rectoras </span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                        </tr>

                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b>  Estimulación Oportuna </span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                        </tr>

                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b>  Lengua Materna </span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                        </tr>
    
                                    </tbody>
                                </table>
                               
                            </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header" id="headingOne">
                          <h2 class="mb-0">
                            <button class="btn btn-link text-dark" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                              <i class="fas fa-bookmark"></i> Cursos de Maquinaria Pesada <small><b class="text-primary"> (Click para ver mas <i class="fas fa-arrow-circle-down"></i> )</b></small>
                            </button>
                          </h2>
                        </div>
                    
                        <div id="collapseFour" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                          <div class="card-body">
                            <img src="{{ env('APP_URL') }}img/ccmp.png" width="100%" alt=""> <br>

                            <table class="table table-bordered mt-4">
                                <tbody>

                                    <tr >
                                        <td class="d-flex justify-content-between" ><span><b>Curso.</b> Topografia</span> <a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary text-left"> Información <i class="fas fa-arrow-right"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Manejo Defensivo </span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Teoria de la maquina retroexcavadora</span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Teoria de la maquina retrocargador</span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Mantenimiento de Equipo Pesado</span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Hidraulica </span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                    </tr>

                    
                                </tbody>
                            </table>
                           
                             
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" id="headingOne">
                          <h2 class="mb-0">
                            <button class="btn btn-link text-dark" type="button" data-toggle="collapse" data-target="#collapse30" aria-expanded="true" aria-controls="collapse30">
                              <i class="fas fa-bookmark"></i> Cursos de Recursos Humanos <small><b class="text-primary"> (Click para ver mas <i class="fas fa-arrow-circle-down"></i> )</b></small>
                            </button>
                          </h2>
                        </div>
                    
                        <div id="collapse30" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                          <div class="card-body">
                            <img src="{{ env('APP_URL') }}img/ccrh.png" width="100%" alt=""> <br>

                            <table class="table table-bordered mt-4">
                                <tbody>

                                    <tr >
                                        <td class="d-flex justify-content-between" ><span><b>Curso.</b> Administración de Personal</span> <a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary text-left"> Información <i class="fas fa-arrow-right"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Seleccion de Personal en Recursos Humanos </span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Contratación de Personal de recursos humanos</span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Inducción de Personal en recursos humanos </span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Liquidación de nomina</span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Elaboración de hojas de vida </span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Sistema de seguridad social </span><a href="https://wa.link/3tnkbi" class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></a></td>
                                    </tr>

                    
                                </tbody>
                            </table>
                           
                             
                          </div>
                        </div>
                      </div>
             
                    
            </div>
        </div>

       
    </div>
    <!-- Blog End -->
     

@endsection