@extends('layout.app')

@section('content')
     
    <!-- Header Start -->
    <div class="mb-5">
      <img class="w-100" src="{{ env('APP_URL') }}img/cur_diplo.png" alt="">
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

                            <i class="fas fa-bookmark"></i> Sistema Seguridad y salud en en trabajo (SGSST) <small><b class="text-primary"> (Click para ver mas <i class="fas fa-arrow-circle-down"></i> )</b></small>
                          </button>
                        </h2>
                      </div>
                  
                      <div id="collapse1" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <img src="{{ env('APP_URL') }}img/dsst.png" width="100%" alt=""> <br>
                            <p class="text-justify mt-2">
                                <b>Perfil Profesional : </b>
                                <span >
                                    Sistema de Gestión de Seguridad y Salud en el Trabajo (SGSST) consiste en el desarrollo de un proceso lógico y por etapas, basado en la mejora continua, con el objetivo de anticipar, reconocer, evaluar, mejorar y controlar los riesgos que puedan afectar la seguridad y la salud en el trabajo.
                                </span>
                            </p>

                            <p>
                                <b>Duración : </b>
                                <span>120 horas</span>
                            </p>

                            <p>
                                <b>Sistema de Pago : </b>
                                <span>De Contado o por cuotas (Mensuales, Quincenales, Semanales)</span>
                            </p>

                            <p>
                                <b>Requisito : </b>
                                <span> <br>
                                    - Fotocopia de la Cedula <br>
                                    - Certificado de Tecnico, Tecnologo o Profesional
                                </span>
                            </p>

                            <p>
                                <a href="https://wa.link/906tf8" class="btn bg-n-verde-01 text-white"><i class="fas fa-paper-plane"></i> Mayor Información</a>
                            </p>

                           
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                          <button class="btn btn-link text-dark collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                            <i class="fas fa-bookmark"></i> Inyección electrónica <small><b class="text-primary"> (Click para ver mas <i class="fas fa-arrow-circle-down"></i> )</b></small>
                          </button>
                        </h2>
                      </div>
                      <div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <img src="{{ env('APP_URL') }}img/die.png" width="100%" alt=""> <br>
                            <p class="text-justify mt-2">
                                <b>Perfil Profesional : </b>
                                <span >
                                    Profesional capaz de comprender el funcionamiento de los sistemas de inyección electrónica y poder realizar diagnóstico de fallas sobre los mismos, basando el aprendizaje en la práctica.
                                </span>
                            </p>

                            <p>
                                <b>Duración : </b>
                                <span>120 horas</span>
                            </p>

                            <p>
                                <b>Sistema de Pago : </b>
                                <span>De Contado o por cuotas (Mensuales, Quincenales, Semanales)</span>
                            </p>

                            <p>
                                <b>Requisito : </b>
                                <span> <br>
                                    - Fotocopia de la Cedula <br>
                                    - Certificado de Tecnico, Tecnologo o Profesional
                                </span>
                            </p>

                            <p>
                                <a href="https://wa.link/906tf8" class="btn bg-n-verde-01 text-white"><i class="fas fa-paper-plane"></i> Mayor Información</a>
                            </p>

                           
                        </div>
                      </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingTwo">
                          <h2 class="mb-0">
                            <button class="btn btn-link text-dark collapsed" type="button" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                            <i class="fas fa-bookmark"></i> Pedagogia Infantil  <small><b class="text-primary"> (Click para ver mas <i class="fas fa-arrow-circle-down"></i> )</b></small>
                            </button>
                          </h2>
                        </div>
                        <div id="collapse10" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <img src="{{ env('APP_URL') }}img/dpi.png" width="100%" alt=""> <br>

                                <p class="text-justify mt-2">
                                    <b>Perfil Profesional : </b>
                                    <span >
                                        Diseñar, evaluar y dirigir procesos que promuevan el desarrollo infantil a partir de la creación de ambientes pedagógicos inclusivos. Plantear e implementar proyectos educativos de aula que resuelvan con criterios pedagógicos los problemas de la actividad educativa.
                                    </span>
                                </p>
    
          
    
    
                                <p>
                                    <b>Duración : </b>
                                    <span>120 horas</span>
                                </p>
    
                                <p>
                                    <b>Sistema de Pago : </b>
                                    <span>De Contado o por cuotas (Mensuales, Quincenales, Semanales)</span>
                                </p>
    
                                <p>
                                    <b>Requisito : </b>
                                    <span> <br>
                                        - Fotocopia de la Cedula <br>
                                        - Certificado de Tecnico, Tecnologo o Profesional
                                    </span>
                                </p>
    
                                <p>
                                    <a href="https://wa.link/906tf8" class="btn bg-n-verde-01 text-white"><i class="fas fa-paper-plane"></i> Mayor Información</a>
                                </p>
    
                               
                            </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header" id="headingTwo">
                          <h2 class="mb-0">
                            <button class="btn btn-link text-dark collapsed" type="button" data-toggle="collapse" data-target="#collapse03" aria-expanded="false" aria-controls="collapse10">
                            <i class="fas fa-bookmark"></i> Talento Humano  <small><b class="text-primary"> (Click para ver mas <i class="fas fa-arrow-circle-down"></i> )</b></small>
                            </button>
                          </h2>
                        </div>
                        <div id="collapse03" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <img src="{{ env('APP_URL') }}img/di_ta.png" width="100%" alt=""> <br>

                                <p class="text-justify mt-2">
                                    <b>Perfil Profesional : </b>
                                    <span >
                                      El egresado posee una combinación única de habilidades y competencias que le permitan gestionar eficazmente el recurso más valioso de una organización: su capital humano. La capacidad para reclutar y seleccionar talento excepcional, así como para desarrollar estrategias de retención y promoción del personal, son fundamentales. Además, la empatía y habilidades de comunicación efectiva son esenciales para fomentar un ambiente laboral positivo y resolver conflictos. La comprensión profunda de las leyes laborales y la ética en la gestión de recursos humanos también son críticas para asegurar el cumplimiento normativo y promover un entorno de trabajo justo y equitativo. Un profesional en talento humano exitoso debe ser proactivo, adaptarse a los cambios rápidos del entorno laboral, y tener una visión estratégica que contribuya al éxito a largo plazo de la organización.
                                    </span>
                                </p>
    
                                <p>
                                    <b>Intensidad : </b>
                                    <span>120 horas</span>
                                </p>

                                <p>
                                  <b>Duración : </b>
                                  <span>5 Semanas</span>
                              </p>

                              <p>
                                <b>Horario : </b>
                                <span>Lunes a viernes 2:00pm a 6:00pm</span>
                              </p>
    
                                <p>
                                    <b>Sistema de Pago : </b>
                                    <span>De Contado o por cuotas (Mensuales, Quincenales, Semanales)</span>
                                </p>
    
                                <p>
                                    <b>Requisito : </b>
                                    <span> <br>
                                        - Fotocopia de la Cedula <br>
                                        - Certificado de Tecnico, Tecnologo o Profesional
                                    </span>
                                </p>
    
                                <p>
                                    <a href="https://wa.link/906tf8" class="btn bg-n-verde-01 text-white"><i class="fas fa-paper-plane"></i> Mayor Información</a>
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
                            <button class="btn btn-link text-dark collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                <i class="fas fa-bookmark"></i> Necesidades educativa especiales en el aula regular <small><b class="text-primary"> (Click para ver mas <i class="fas fa-arrow-circle-down"></i> )</b></small>

                            </button>
                          </h2>
                        </div>
                        <div id="collapse3" class="collapse " aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <img src="{{ env('APP_URL') }}img/dne.png" width="100%" alt=""> <br>
                                <p class="text-justify mt-2">
                                    <b>Perfil Profesional : </b>
                                    <span >
                                        El objetivo es capacitar a los docentes y profesionales de apoyo para atender a los estudiantes que presentan dificultades de aprendizaje o discapacidades que requieren de adaptaciones curriculares o metodológicas
                                    </span>
                                </p>    
    
                                <p>
                                    <b>Duración : </b>
                                    <span>120 horas</span>
                                </p>
    
                                <p>
                                    <b>Sistema de Pago : </b>
                                    <span>De Contado o por cuotas (Mensuales, Quincenales, Semanales)</span>
                                </p>
    
                                <p>
                                    <b>Requisito : </b>
                                    <span> <br>
                                        - Fotocopia de la Cedula <br>
                                        - Certificado de Tecnico, Tecnologo o Profesional
                                    </span>
                                </p>
    
                                <p>
                                    <a href="https://wa.link/906tf8" class="btn bg-n-verde-01 text-white"><i class="fas fa-paper-plane"></i> Mayor Información</a>
                                </p>
    
                               
                            </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header" id="headingOne">
                          <h2 class="mb-0">
                            <button class="btn btn-link text-dark" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                              <i class="fas fa-bookmark"></i> Supervisor de patios <small><b class="text-primary"> (Click para ver mas <i class="fas fa-arrow-circle-down"></i> )</b></small>
                            </button>
                          </h2>
                        </div>
                    
                        <div id="collapseFour" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                          <div class="card-body">
                            <img src="{{ env('APP_URL') }}img/dsp.png" width="100%" alt=""> <br>

                              <p class="text-justify mt-2">
                                  <b>Perfil Profesional : </b>
                                  <span >
                                    Profesional capaz de gestionar y supervisar las operaciones de movimiento y almacenamiento de productos en el área de patio de una industria.  Organizar, controlar y evaluar las actividades de clasificación, ordenamiento, carga y descarga de los diferentes productos, utilizando maquinaria y equipos adecuados, y cumpliendo con las normas de seguridad, calidad y medio ambiente.
                                  </span>
                              </p>
  
                              <p>
                                  <b>Duración : </b>
                                  <span>120 horas</span>
                              </p>
  
                              <p>
                                  <b>Sistema de Pago : </b>
                                  <span>De Contado o por cuotas (Mensuales, Quincenales, Semanales)</span>
                              </p>
  
                              <p>
                                <b>Requisito : </b>
                                <span> <br>
                                    - Fotocopia de la Cedula <br>
                                    - Certificado de Tecnico, Tecnologo o Profesional
                                </span>
                            </p>
  
                              <p>
                                  <a href="https://wa.link/906tf8" class="btn bg-n-verde-01 text-white"><i class="fas fa-paper-plane"></i> Mayor Información</a>
                              </p>
  
                             
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" id="headingOne">
                          <h2 class="mb-0">
                            <button class="btn btn-link text-dark" type="button" data-toggle="collapse" data-target="#collapse0" aria-expanded="true" aria-controls="collapse0">
                              <i class="fas fa-bookmark"></i> Topografía <small><b class="text-primary"> (Click para ver mas <i class="fas fa-arrow-circle-down"></i> )</b></small>
                            </button>
                          </h2>
                        </div>
                    
                        <div id="collapse0" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                          <div class="card-body">
                            <img src="{{ env('APP_URL') }}img/dt.png" width="100%" alt=""> <br>

                              <p class="text-justify mt-2">
                                  <b>Perfil Profesional : </b>
                                  <span >
                                    Es un profesional capaz de medir y representar las formas y detalles de las superficies terrestres, utilizando herramientas y técnicas específicas. La topografía es una disciplina que tiene aplicaciones en diversas áreas, como la construcción, la ingeniería, la geología, la navegación, el senderismo, entre otras.
                                  </span>
                              </p>
  
  
                              <p>
                                  <b>Duración : </b>
                                  <span>120 horas</span>
                              </p>
  
                              <p>
                                  <b>Sistema de Pago : </b>
                                  <span>De Contado o por cuotas (Mensuales, Quincenales, Semanales)</span>
                              </p>
  
                              <p>
                                <b>Requisito : </b>
                                <span> <br>
                                    - Fotocopia de la Cedula <br>
                                    - Certificado de Tecnico, Tecnologo o Profesional
                                </span>
                            </p>
  
                              <p>
                                  <a href="https://wa.link/906tf8" class="btn bg-n-verde-01 text-white"><i class="fas fa-paper-plane"></i> Mayor Información</a>
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