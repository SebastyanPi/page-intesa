@extends('layout.app')

@section('content')
     
   <!-- Header Start -->
   <div class="mb-5">
    <img class="w-100" src="{{ env('APP_URL') }}img/cur_semi.png" alt="">
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

                            <i class="fas fa-bookmark"></i> Trabajo en Alturas <small><b class="text-primary"> (Click para ver mas <i class="fas fa-arrow-circle-down"></i> )</b></small>
                          </button>
                        </h2>
                      </div>
                  
                      <div id="collapse1" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <img src="{{ env('APP_URL') }}img/sta.png" width="100%" alt=""> <br>
                            <p class="text-justify mt-2">
                                <b>Perfil Profesional : </b>
                                <span >
                                    Es una formación que se imparte a los trabajadores que realizan trabajos a más de dos metros de altura, como en andamios, escaleras, postes, plataformas, excavaciones o pozos. El objetivo de este curso es garantizar la seguridad de los trabajadores y prevenir accidentes laborales.
                                </span>
                            </p>

                            <p>
                                <b>Duración : </b>
                                <span>20 horas</span>
                            </p>

                            <p>
                                <b>Sistema de Pago : </b>
                                <span>De Contado o por cuotas (Mensuales, Quincenales, Semanales)</span>
                            </p>

                            <p>
                                <b>Requisito : </b>
                                <span> <br>
                                    - Fotocopia de la Cedula <br>
                                    - Estar cursando secundaria
                                </span>
                            </p>

                            <p>
                                <a href="https://wa.link/fwrtb6" class="btn bg-n-verde-01 text-white"><i class="fas fa-paper-plane"></i> Mayor Información</a>
                            </p>

                           
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                          <button class="btn btn-link collapsed text-dark" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                            <i class="fas fa-bookmark"></i> Primeros Auxilios <small><b class="text-primary"> (Click para ver mas <i class="fas fa-arrow-circle-down"></i> )</b></small>
                          </button>
                        </h2>
                      </div>
                      <div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <img src="{{ env('APP_URL') }}img/spa.png" width="100%" alt=""> <br>
                            <p class="text-justify mt-2">
                                <b>Perfil Profesional : </b>
                                <span >
                                    Es una formación que se imparte a las personas para enseñarles cómo actuar en situaciones de emergencia, como accidentes, lesiones o enfermedades súbitas. El objetivo de este seminario es enseñar a los participantes cómo proporcionar atención inmediata y efectiva a las personas lesionadas o enfermas antes de que llegue la ayuda médica profesional
                                </span>
                            </p>

                            <p>
                                <b>Duración : </b>
                                <span>20 horas</span>
                            </p>

                            <p>
                                <b>Sistema de Pago : </b>
                                <span>De Contado o por cuotas (Mensuales, Quincenales, Semanales)</span>
                            </p>

                            <p>
                                <b>Requisito : </b>
                                <span> <br>
                                    - Fotocopia de la Cedula <br>
                                    - Estar cursando secundaria
                                </span>
                            </p>

                            <p>
                                <a href="https://wa.link/fwrtb6" class="btn bg-n-verde-01 text-white"><i class="fas fa-paper-plane"></i> Mayor Información</a>
                            </p>

                           
                        </div>
                      </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingTwo">
                          <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-dark" type="button" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                            <i class="fas fa-bookmark"></i> Plan de Emergencia <small><b class="text-primary"> (Click para ver mas <i class="fas fa-arrow-circle-down"></i> )</b></small>
                            </button>
                          </h2>
                        </div>
                        <div id="collapse10" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <img src="{{ env('APP_URL') }}img/spe.png" width="100%" alt=""> <br>

                                <p class="text-justify mt-2">
                                    <b>Perfil Profesional : </b>
                                    <span >
                                        Es un conjunto de medidas y procedimientos que se establecen para prevenir, controlar y minimizar los efectos de una emergencia en una empresa o institución. El objetivo de este plan es garantizar la seguridad de las personas y minimizar los daños materiales en caso de una emergencia.
                                    </span>
                                </p>
    
          
    
    
                                <p>
                                    <b>Duración : </b>
                                    <span>20 horas</span>
                                </p>
    
                                <p>
                                    <b>Sistema de Pago : </b>
                                    <span>De Contado o por cuotas (Mensuales, Quincenales, Semanales)</span>
                                </p>
    
                                <p>
                                    <b>Requisito : </b>
                                    <span> <br>
                                        - Fotocopia de la Cedula <br>
                                        - Estar cursando secundaria
                                    </span>
                                </p>
    
                                <p>
                                    <a href="https://wa.link/fwrtb6" class="btn bg-n-verde-01 text-white"><i class="fas fa-paper-plane"></i> Mayor Información</a>
                                </p>
    
                               
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
                                <i class="fas fa-bookmark"></i> Contratación de personal <small><b class="text-primary"> (Click para ver mas <i class="fas fa-arrow-circle-down"></i> )</b></small>

                            </button>
                          </h2>
                        </div>
                        <div id="collapse3" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <img src="{{ env('APP_URL') }}img/scp.png" width="100%" alt=""> <br>
                                <p class="text-justify mt-2">
                                    <b>Perfil Profesional : </b>
                                    <span >
                                        Es una formación que se imparte a los empleadores o encargados de recursos humanos para aprender a realizar un proceso de reclutamiento y selección que reduzca al mínimo las probabilidades de rotación, conociendo el marco teórico de cada paso y las distintas alternativas que pueden tomar para adecuar cada paso a sus necesidades.
                                    </span>
                                </p>    
    
                                <p>
                                    <b>Duración : </b>
                                    <span>20 horas</span>
                                </p>
    
                                <p>
                                    <b>Sistema de Pago : </b>
                                    <span>De Contado o por cuotas (Mensuales, Quincenales, Semanales)</span>
                                </p>
    
                                <p>
                                    <b>Requisito : </b>
                                    <span> <br>
                                        - Fotocopia de la Cedula <br>
                                        - Estar cursando secundaria
                                    </span>
                                </p>
    
                                <p>
                                    <a href="https://wa.link/fwrtb6" class="btn bg-n-verde-01 text-white"><i class="fas fa-paper-plane"></i> Mayor Información</a>
                                </p>
    
                               
                            </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header" id="headingOne">
                          <h2 class="mb-0">
                            <button class="btn btn-link text-dark" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                              <i class="fas fa-bookmark"></i> Pedagogía infantil <small><b class="text-primary"> (Click para ver mas <i class="fas fa-arrow-circle-down"></i> )</b></small>
                            </button>
                          </h2>
                        </div>
                    
                        <div id="collapseFour" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                          <div class="card-body">
                            <img src="{{ env('APP_URL') }}img/spi.png" width="100%" alt=""> <br>

                              <p class="text-justify mt-2">
                                  <b>Perfil Profesional : </b>
                                  <span >
                                    Diseñar, evaluar y dirigir procesos que promuevan el desarrollo infantil a partir de la creación de ambientes pedagógicos inclusivos. Plantear e implementar proyectos educativos de aula que resuelvan con criterios pedagógicos los problemas de la actividad educativa.
                                  </span>
                              </p>
  
                              <p>
                                  <b>Duración : </b>
                                  <span>20 horas</span>
                              </p>
  
                              <p>
                                  <b>Sistema de Pago : </b>
                                  <span>De Contado o por cuotas (Mensuales, Quincenales, Semanales)</span>
                              </p>
  
                              <p>
                                <b>Requisito : </b>
                                <span> <br>
                                    - Fotocopia de la Cedula <br>
                                    - Estar cursando secundaria
                                </span>
                            </p>
  
                              <p>
                                  <a href="https://wa.link/fwrtb6" class="btn bg-n-verde-01 text-white"><i class="fas fa-paper-plane"></i> Mayor Información</a>
                              </p>
  
                             
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" id="headingOne">
                          <h2 class="mb-0">
                            <button class="btn btn-link text-dark" type="button" data-toggle="collapse" data-target="#collapse0" aria-expanded="true" aria-controls="collapse0">
                              <i class="fas fa-bookmark"></i> Mecánica Básica <small><b class="text-primary"> (Click para ver mas <i class="fas fa-arrow-circle-down"></i> )</b></small>
                            </button>
                          </h2>
                        </div>
                    
                        <div id="collapse0" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                          <div class="card-body">
                            <img src="{{ env('APP_URL') }}img/smb.png" width="100%" alt=""> <br>

                              <p class="text-justify mt-2">
                                  <b>Perfil Profesional : </b>
                                  <span >
                                    Es una formación que se imparte a las personas interesadas en aprender los conceptos fundamentales de la mecánica de vehículos motorizados, como el funcionamiento de los motores, los sistemas de combustible, la lubricación y el sistema de escape.
                                  </span>
                              </p>
  
  
                              <p>
                                  <b>Duración : </b>
                                  <span>20 horas</span>
                              </p>
  
                              <p>
                                  <b>Sistema de Pago : </b>
                                  <span>De Contado o por cuotas (Mensuales, Quincenales, Semanales)</span>
                              </p>
  
                              <p>
                                <b>Requisito : </b>
                                <span> <br>
                                    - Fotocopia de la Cedula <br>
                                    - Estar cursando secundaria
                                </span>
                            </p>
  
                              <p>
                                  <a href="https://wa.link/fwrtb6" class="btn bg-n-verde-01 text-white"><i class="fas fa-paper-plane"></i> Mayor Información</a>
                              </p>
  
                             
                          </div>
                        </div>
                      </div>


                    
                    </div>
                    
                    
                    
                    
            </div>
        </div>
    </div>
    <!-- Blog End -->
     

      
@endsection