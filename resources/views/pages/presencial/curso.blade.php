@extends('layout.app')

@section('content')
     
    <!-- Header Start -->
    <div class="mb-5">
        <img class="w-100" src="{{ env('APP_URL') }}img/certificaciones.png" alt="">
    </div>
    <!-- Header End -->

      <!-- Blog Start -->
      <div class="container-fluid ">
        <div class="row">
            <div class="col-md-12 mb-5">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne2">
                          <h2 class="mb-0">
                            <button class="btn btn-link text-dark text-left" type="button" data-toggle="collapse" data-target="#collapse17" aria-expanded="true" aria-controls="collapse1">
  
                              <i class="fas fa-bookmark"></i> <b>Certificación en </b> Inteligencia de Negocios & Análisis de datos con POWER BI 
                            </button>
                          </h2>
                        </div>
                    
                        <div id="collapse17" class="collapse" aria-labelledby="headingOne2" data-parent="#accordionExample">
                          <div class="card-body">
                            
                              <p class="text-justify mt-2">
                                  <b>Perfil Profesional : </b>
                                  <span >
                                       Es un estudiante que adquiere los conocimientos fundamentales y desarrolla las competencias necesarias en Power BI para que, a partir de diferentes fuentes de datos, genere un modelo de negocios acorde a las necesidades organizacionales, presentando informes profesionales y dinámicos, de una manera fácil y atractiva para facilitar la toma de decisiones.
                                  </span>
                              </p>
  
                              <p>
                                  <b>Duración : </b>
                                  <span>3 Meses</span>
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
                                  <button class="btn bg-n-verde-01 text-white"><i class="fas fa-paper-plane"></i> Mayor Información</button>
                              </p>
  
                             
                          </div>
                        </div>
                      </div>

                    <div class="card">
                      <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                          <button class="btn btn-link text-dark text-left" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">

                            <i class="fas fa-bookmark"></i> <b>Certificación en </b> Trazado y Desarrollo para Aislamiento Termicos
                          </button>
                        </h2>
                      </div>
                  
                      <div id="collapse1" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                          
                            <p class="text-justify mt-2">
                                <b>Perfil Profesional : </b>
                                <span >
                                     Es un profesional que se encarga de diseñar y crear patrones o plantillas que serán utilizados para cortar materiales aislantes térmicos de manera eficiente. Estos materiales se utilizan comúnmente para reducir la transferencia de calor entre dos superficies, mejorando así la eficiencia energética de edificios, equipos y sistemas.
                                </span>
                            </p>

                            <p>
                                <b>Duración : </b>
                                <span>3 Meses</span>
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
                                <button class="btn bg-n-verde-01 text-white"><i class="fas fa-paper-plane"></i> Mayor Información</button>
                            </p>

                           
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                          <button class="btn btn-link collapsed text-dark text-left" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                            <i class="fas fa-bookmark"></i> <b>Certificación en</b>  Instalación de Aislamiento Termicos
                          </button>
                        </h2>
                      </div>
                      <div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                  
                            <p class="text-justify mt-2">
                                <b>Perfil Profesional : </b>
                                <span >
                                    Este certificado está dirigido a profesionales del mundo de la instalación y mantenimiento, más concretamente a aquellos vinculados con la instalación y mantenimiento de sistemas de aislamiento térmico, dentro del área profesional de montaje y mantenimiento de instalaciones, y a todas aquellas personas interesadas en adquirir conocimientos relacionados con las técnicas de montaje de sistemas de aislamiento, así como con la realización de las mismas con las debidas garantías para la salud.
                                </span>
                            </p>

                            <p>
                                <b>Duración : </b>
                                <span>3 Meses</span>
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
                                <button class="btn bg-n-verde-01 text-white"><i class="fas fa-paper-plane"></i> Mayor Información</button>
                            </p>

                           
                        </div>
                      </div>
                    </div>

                      <div class="card">
                        <div class="card-header" id="headingTwo">
                          <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-dark text-left" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                <i class="fas fa-bookmark"></i> <b>Certificación en</b>  Recubrimientos Industriales
                            </button>
                          </h2>
                        </div>
                        <div id="collapse4" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                     
                                <p class="text-justify mt-2">
                                    <b>Perfil Profesional : </b>
                                    <span >
                                        Es un profesional que se encarga del proceso de aplicar capas protectoras o recubrimientos a sustratos metálicos o no metálicos para proporcionar resistencia a la corrosión, protección contra agentes químicos, mejora estética, resistencia a la abrasión, entre otros beneficios. Estos recubrimientos se utilizan en una variedad de industrias, como la manufactura, la construcción, el petróleo y gas, la automotriz, entre otras.
                                    </span>
                                </p>

                                <p>
                                    <b>Vehiculos : </b>
                                    <span> <br>
                                        - Motores Diesel <br>
                                        - Motores a Gasolina <br>

                                    </span>
                                </p>
    
    
                                <p>
                                    <b>Duración : </b>
                                    <span>3 Meses</span>
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
                                    <button class="btn bg-n-verde-01 text-white"><i class="fas fa-paper-plane"></i> Mayor Información</button>
                                </p>
    
                               
                            </div>
                        </div>
                      </div>

                    <div class="card">
                      <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                          <button class="btn btn-link collapsed text-dark text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <i class="fas fa-bookmark"></i> <b>Certificación en</b>  Talento Humano
                          </button>
                        </h2>
                      </div>
                      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                     
                            <p class="text-justify mt-2">
                                <b>Perfil Profesional : </b>
                                <span >
                                    El profesional en talento humano, desempeña un papel crucial en las organizaciones al gestionar diversas funciones relacionadas con el personal. Esto incluye la contratación y selección de empleados, el desarrollo y la capacitación continua, la evaluación del desempeño, la gestión del rendimiento y la administración de aspectos como la compensación y los beneficios. El talento humano trabaja para cultivar un entorno laboral positivo, asegurar el crecimiento y desarrollo de los empleados, y contribuir al éxito general de la empresa a través de la gestión efectiva de su capital humano.
                                </span>
                            </p>

                            <p>
                                <b>Niveles : </b>
                                <span> <br>
                                    - Basico <br>
                                    - Intermedio<br>
                                    - Avanzado<br>
                                </span>
                            </p>


                            <p>
                                <b>Duración : </b>
                                <span>3 Meses</span>
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
                                <button class="btn bg-n-verde-01 text-white"><i class="fas fa-paper-plane"></i> Mayor Información</button>
                            </p>

                           
                        </div>
                      </div>
                    </div>


                    <div class="card">
                        <div class="card-header" id="headingThree">
                          <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-dark text-left" type="button" data-toggle="collapse" data-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree">
                              <i class="fas fa-bookmark"></i> <b>Certificación en</b>  Ofimatica
                            </button>
                          </h2>
                        </div>
                        <div id="collapseThree1" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                          <div class="card-body">
          
                              <p class="text-justify mt-2">
                                  <b>Perfil Profesional : </b>
                                  <span >
                                    Un profesional en ofimática se dedica a utilizar y gestionar eficientemente herramientas informáticas y software de oficina para mejorar los procesos y la productividad en un entorno empresarial o de trabajo. 
                                  </span>
                              </p>

  
                              <p>
                                  <b>Duración : </b>
                                  <span>10 horas</span>
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
                                  <button class="btn bg-n-verde-01 text-white"><i class="fas fa-paper-plane"></i> Mayor Información</button>
                              </p>
  
                             
                          </div>
                        </div>
                      </div>




                  </div>

                  
            </div>

            <div class="col-md-6 d-none">
                <div class="accordion" id="accordionExample">

                    <div class="card">
                        <div class="card-header" id="headingTwo">
                          <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                <i class="fas fa-bookmark"></i> Curso Operador de Maquinaria Pesada
                            </button>
                          </h2>
                        </div>
                        <div id="collapse3" class="collapse " aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                
                                <p class="text-justify mt-2">
                                    <b>Perfil Profesional : </b>
                                    <span >
                                        Profesionales encargados de la operación de máquinas y equipos que se utilizan en procesos industriales, construcción y mineria.
                                    </span>
                                </p>

                                <p>
                                    <b>Maquinas : </b>
                                    <span> <br>
                                        - Operador de Retro Excavadora <br>
                                        - Operador de Retro Cargadora <br>
                                        - Operador de MontaCarga <br>
                                        - Operador de MiniCargador <br>
                                        - Operador de Cargador Frontal <br>
                                        - Operador de Camión Grua <br>

                                    </span>
                                </p>
    
    
                                <p>
                                    <b>Duración : </b>
                                    <span>3 Meses</span>
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
                                    <button class="btn bg-n-verde-01 text-white"><i class="fas fa-paper-plane"></i> Mayor Información</button>
                                </p>
    
                               
                            </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header" id="headingOne">
                          <h2 class="mb-0">
                            <button class="btn btn-link text-left" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                              <i class="fas fa-bookmark"></i> Curso de Ingles
                            </button>
                          </h2>
                        </div>
                    
                        <div id="collapseFour" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                          <div class="card-body">
             

                              <p class="text-justify mt-2">
                                  <b>Perfil Profesional : </b>
                                  <span >
                                      Es un profesional capaz de mantener una conversación sobre temas básicos, utiliza los tiempos verbales de pasado, presente y futuro en frases sencillas. No tiene fluidez y comete muchos errores, tanto en la pronunciación como en la escritura.
                                  </span>
                              </p>
  
                              <p>
                                  <b>Nivel Basico: </b>
                                  <span> <br>
                                      - A1 <br>
                                      - A2 <br>
                                  </span>
                              </p>
  
  
                              <p>
                                  <b>Duración : </b>
                                  <span>4 Meses cada Nivel</span>
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
                                  <button class="btn bg-n-verde-01 text-white"><i class="fas fa-paper-plane"></i> Mayor Información</button>
                              </p>
  
                             
                          </div>
                        </div>
                      </div>


                    <div class="card">
                        <div class="card-header" id="headingTwo">
                          <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                            <i class="fas fa-bookmark"></i> Curso de Pedagogia Infantil (Necesidades Especiales)
                            </button>
                          </h2>
                        </div>
                        <div id="collapse10" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <img src="{{ env('APP_URL') }}img/cp.png" width="100%" alt=""> <br>

                                <p class="text-justify mt-2">
                                    <b>Perfil Profesional : </b>
                                    <span >
                                        Diseñar, evaluar y dirigir procesos que promuevan el desarrollo infantil a partir de la creación de ambientes pedagógicos inclusivos. Plantear e implementar proyectos educativos de aula que resuelvan con criterios pedagógicos los problemas de la actividad educativa.
                                    </span>
                                </p>
    
          
    
    
                                <p>
                                    <b>Duración : </b>
                                    <span>4 Meses</span>
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
                                    <button class="btn bg-n-verde-01 text-white"><i class="fas fa-paper-plane"></i> Mayor Información</button>
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