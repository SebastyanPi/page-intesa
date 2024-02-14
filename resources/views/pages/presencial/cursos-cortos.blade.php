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
                                        <td class="d-flex justify-content-between" ><span><b>Curso.</b> Requisitos para la creación de un empresa o negocio</span> <button class="btn btn-sm btn-outline-primary text-left"> Información <i class="fas fa-arrow-right"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Obligaciones y derechos laborales</span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Obligaciones e impuestos empresariales</span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Ortografía, redacción y compresión de texto</span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Organización de eventos</span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Lenguaje profesional</span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Administración de documento y archivo</span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Generalidades administración de empresa</span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Mercadeo y ventas </span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Atención al cliente </span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Matematica Financiera </span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b>  Análisis e indicadores financieros </span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b>  Costo de producción </span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b>  Asientos y registro contables </span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                    </tr>
         
                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b>  Libros de contabilidad </span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b>  Estados financieros </span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b>  Ofimatica </span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
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
                                        <td class="d-flex justify-content-between" ><span><b>Curso.</b> Seguridad laboral </span> <button class="btn btn-sm btn-outline-primary text-left"> Información <i class="fas fa-arrow-right"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Normatividad en el Medio Ambiente </span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Seguridad e higiene industrial</span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Analisis de riesgo y matriz RAM</span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Gestión en seguridad y salud en el trabajo</span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Plan de emergencia y ruta de evacuación</span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Primeros Auxilios</span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Indicadores e insvestigación de accidentes </span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Enfermedades laborales </span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Manipulación y transporte quimico </span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Requisitos del decreto 1072 y resolución 0312 </span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Trabajo en Altura </span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Espacio Confinado </span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
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
                                            <td class="d-flex justify-content-between" ><span><b>Curso.</b> Sistema de alimentación del motor </span> <button class="btn btn-sm btn-outline-primary text-left"> Información <i class="fas fa-arrow-right"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Sistema de encendido del motor </span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                        </tr>
    
                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Sistema de refrigeracion del motor</span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                        </tr>
    
                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Sistema de lubricación del motor</span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                        </tr>
    
                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Sistema de transmisión del vehiculo</span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                        </tr>
    
                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Sistema de frenos del vehiculo</span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                        </tr>
    
                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Sistema de electricidad del vehiculo</span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                        </tr>
    
                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Sistema de dirección del vehiculo </span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                        </tr>
    
                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Sistema de suspensión del vehiculo </span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                        </tr>
    
                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Sistema Hidraulico del Vehiculo </span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                        </tr>
    
                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Sistema de Inyección Electronica </span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
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
                                        <td class="d-flex justify-content-between" ><span><b>Curso.</b> Conocimiento Tecnicos en Logistica</span> <button class="btn btn-sm btn-outline-primary text-left"> Información <i class="fas fa-arrow-right"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Operaciones comerciales (pedido, compra, cotización, venta, facturación) </span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Sistema de Inventario</span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Empaque y Embalaje</span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Distribución y trasnporte</span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Gestión integral del almacenamiento </span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
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
                                            <td class="d-flex justify-content-between" ><span><b>Curso.</b> Educación física para la infancia</span> <button class="btn btn-sm btn-outline-primary text-left"> Información <i class="fas fa-arrow-right"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Expresión corporal infancia </span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                        </tr>
    
                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Teatro Infantil</span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                        </tr>
    
                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Musica en la Infancia</span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                        </tr>
    
                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Lectoescritura</span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                        </tr>
    
                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Primeros auxilios en la infancia</span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                        </tr>
    
                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Nutrición</span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                        </tr>
    
                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Matematicas en la Infancia</span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                        </tr>
    
                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Ciencia en la Infancia </span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                        </tr>
    
                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Planeación Pedagogica </span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                        </tr>
    
                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Investigación en el Aula </span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                        </tr>
    
                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Psicologia General </span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                        </tr>
    
                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Psicologia Evolutiva </span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                        </tr>
    
                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Psicologia del Aprendizaje </span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                        </tr>
             
                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b>  Juego y Ludica  </span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                        </tr>
    
                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b>  Material didactico </span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                        </tr>
    
                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b>  Actividades Rectoras </span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                        </tr>

                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b>  Estimulación Oportuna </span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                        </tr>

                                        <tr>
                                            <td class="d-flex justify-content-between"> <span> <b>Curso.</b>  Lengua Materna </span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
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
                                        <td class="d-flex justify-content-between" ><span><b>Curso.</b> Topografia</span> <button class="btn btn-sm btn-outline-primary text-left"> Información <i class="fas fa-arrow-right"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Manejo Defensivo </span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Teoria de la maquina retroexcavadora</span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Teoria de la maquina retrocargador</span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Mantenimiento de Equipo Pesado</span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Hidraulica </span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
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
                                        <td class="d-flex justify-content-between" ><span><b>Curso.</b> Administración de Personal</span> <button class="btn btn-sm btn-outline-primary text-left"> Información <i class="fas fa-arrow-right"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Seleccion de Personal en Recursos Humanos </span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Contratación de Personal de recursos humanos</span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Inducción de Personal en recursos humanos </span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Liquidación de nomina</span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Elaboración de hojas de vida </span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="d-flex justify-content-between"> <span> <b>Curso.</b> Sistema de seguridad social </span><button class="btn btn-sm btn-outline-primary"> Información <i class="fas fa-arrow-right"></i></button></td>
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