@extends('layout.app')

@section('content')
     
    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px; background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ env('APP_URL') }}img/page-header-02.jpg), no-repeat center center;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Convenios</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 "><a class="text-white" href="">Institucional</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0">Conoce mas sobre nosotros...</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

      <!-- Blog Start -->
      <div class="container-fluid ">
        <div class="container py-2">
            <h4 class="mb-5">Convenios de Practicas - Etapa Productiva</h4>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row pb-3">

                        <div class="col-lg-3 mb-4">
                            <div class="blog-item position-relative overflow-hidden rounded mb-2">
                                <img class="img-fluid" src="{{ env('APP_URL') }}img/c_ccb.jpg" alt="">
                                <a class="blog-overlay text-decoration-none" href="{{ route('pages.presencial.tecnico.auxadmin') }}">
                                    <h5 class="text-white mb-3">Camara de Comercio Barrancabermeja</h5>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 mb-4">
                            <div class="blog-item position-relative overflow-hidden rounded mb-2">
                                <img class="img-fluid" src="{{ env('APP_URL') }}img/c_tb.jpg" alt="">
                                <a class="blog-overlay text-decoration-none" href="{{ route('pages.presencial.tecnico.auxadmin') }}">
                                    <h5 class="text-white mb-3">Transito</h5>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 mb-4">
                            <div class="blog-item position-relative overflow-hidden rounded mb-2">
                                <img class="img-fluid" src="{{ env('APP_URL') }}img/c_ib.png" alt="">
                                <a class="blog-overlay text-decoration-none" href="{{ route('pages.presencial.tecnico.auxadmin') }}">
                                    <h5 class="text-white mb-3">Intenergy </h5>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 mb-4">
                            <div class="blog-item position-relative overflow-hidden rounded mb-2">
                                <img class="img-fluid" src="{{ env('APP_URL') }}img/c_ms.png" alt="">
                                <a class="blog-overlay text-decoration-none" href="{{ route('pages.presencial.tecnico.auxadmin') }}">
                                    <h5 class="text-white mb-3">Mega-seguros </h5>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 mb-4 d-none">
                            <div class="blog-item position-relative overflow-hidden rounded mb-2">
                                <img class="img-fluid" src="{{ env('APP_URL') }}img/c_d.jpg" alt="">
                                <a class="blog-overlay text-decoration-none" href="{{ route('pages.presencial.tecnico.auxadmin') }}">
                                    <h5 class="text-white mb-3">Las delicias </h5>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 mb-4">
                            <div class="blog-item position-relative overflow-hidden rounded mb-2">
                                <img class="img-fluid" src="{{ env('APP_URL') }}img/c_lm.jpg" alt="">
                                <a class="blog-overlay text-decoration-none" href="{{ route('pages.presencial.tecnico.auxadmin') }}">
                                    <h5 class="text-white mb-3">Clínica La Magdalena </h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <div class="blog-item position-relative overflow-hidden rounded mb-2">
                                <img class="img-fluid" src="{{ env('APP_URL') }}img/c_ct.jpg" alt="">
                                <a class="blog-overlay text-decoration-none" href="{{ route('pages.presencial.tecnico.auxadmin') }}">
                                    <h5 class="text-white mb-3">HSEQ Control Total</h5>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 mb-4">
                            <div class="blog-item position-relative overflow-hidden rounded mb-2">
                                <img class="img-fluid" src="{{ env('APP_URL') }}img/c_jt.jpg" alt="">
                                <a class="blog-overlay text-decoration-none" href="{{ route('pages.presencial.tecnico.auxadmin') }}">
                                    <h5 class="text-white mb-3">Jardin Tilatá</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <div class="blog-item position-relative overflow-hidden rounded mb-2">
                                <img class="img-fluid" src="{{ env('APP_URL') }}img/c_lj.jpg" alt="">
                                <a class="blog-overlay text-decoration-none" href="{{ route('pages.presencial.tecnico.auxinfancia') }}">
                                    <h5 class="text-white mb-3">Liceo Jesus de Nazaret</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <div class="blog-item position-relative overflow-hidden rounded mb-2">
                                <img class="img-fluid" src="{{ env('APP_URL') }}img/c_nm.png" alt="">
                                <a class="blog-overlay text-decoration-none" href="{{ route('pages.presencial.tecnico.seguridad') }}">
                                    <h5 class="text-white mb-3">Jardin el Niño y su Mundo</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <div class="blog-item position-relative overflow-hidden rounded mb-2">
                                <img class="img-fluid" src="{{ env('APP_URL') }}img/c_as.jpg" alt="">
                                <a class="blog-overlay text-decoration-none" href="{{ route('pages.presencial.tecnico.mecanica') }}">
                                    <h5 class="text-white mb-3">El Arca de los Niños</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <div class="blog-item position-relative overflow-hidden rounded mb-2">
                                <img class="img-fluid" src="{{ env('APP_URL') }}img/c_om.jpg" alt="">
                                <a class="blog-overlay text-decoration-none" href="{{ route('pages.presencial.tecnico.operador') }}">
                                    <h5 class="text-white mb-3">Liceo Infantil Oso Meloso</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <div class="blog-item position-relative overflow-hidden rounded mb-2">
                                <img class="img-fluid" src="{{ env('APP_URL') }}img/c_lp.jpg" alt="">
                                <a class="blog-overlay text-decoration-none" href="{{ route('pages.presencial.tecnico.operador') }}">
                                    <h5 class="text-white mb-3">Liceo Principe de Paz</h5>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 mb-4">
                            <div class="blog-item position-relative overflow-hidden rounded mb-2">
                                <img class="img-fluid" src="{{ env('APP_URL') }}img/c_rn.jpg" alt="">
                                <a class="blog-overlay text-decoration-none" href="{{ route('pages.presencial.tecnico.operador') }}">
                                    <h5 class="text-white mb-3">Liceo Rafael Nuñez </h5>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 mb-4">
                            <div class="blog-item position-relative overflow-hidden rounded mb-2">
                                <img class="img-fluid" src="{{ env('APP_URL') }}img/c_pg.png" alt="">
                                <a class="blog-overlay text-decoration-none" href="{{ route('pages.presencial.tecnico.operador') }}">
                                    <h5 class="text-white mb-3">UDS Pequeños Gigantes </h5>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 mb-4">
                            <div class="blog-item position-relative overflow-hidden rounded mb-2">
                                <img class="img-fluid" src="{{ env('APP_URL') }}img/delicias.jpg" alt="">
                                <a class="blog-overlay text-decoration-none" href="{{ route('pages.presencial.tecnico.auxadmin') }}">
                                    <h5 class="text-white mb-3">Delicias</h5>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 mb-4">
                            <div class="blog-item position-relative overflow-hidden rounded mb-2">
                                <img class="img-fluid" src="{{ env('APP_URL') }}img/multinsa.jpg" alt="">
                                <a class="blog-overlay text-decoration-none" href="{{ route('pages.presencial.tecnico.auxadmin') }}">
                                    <h5 class="text-white mb-3">Multinsa</h5>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 mb-4">
                            <div class="blog-item position-relative overflow-hidden rounded mb-2">
                                <img class="img-fluid" src="{{ env('APP_URL') }}img/argos.jpg" alt="">
                                <a class="blog-overlay text-decoration-none" href="{{ route('pages.presencial.tecnico.auxadmin') }}">
                                    <h5 class="text-white mb-3">Argos </h5>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 mb-4">
                            <div class="blog-item position-relative overflow-hidden rounded mb-2">
                                <img class="img-fluid" src="{{ env('APP_URL') }}img/templo.jpg" alt="">
                                <a class="blog-overlay text-decoration-none" href="{{ route('pages.presencial.tecnico.auxadmin') }}">
                                    <h5 class="text-white mb-3">Templo de la Moda </h5>
                                </a>
                            </div>
                        </div>


                        <div class="col-lg-6 mb-4">
                            
                        </div>
                        <div class="col-12 d-none">
                            <nav aria-label="Page navigation">
                                <ul class="pagination pagination-lg justify-content-center mb-0">
                                  <li class="page-item disabled">
                                    <a class="page-link" href="#" aria-label="Previous">
                                      <span aria-hidden="true">&laquo;</span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                  </li>
                                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                                  <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                      <span aria-hidden="true">&raquo;</span>
                                      <span class="sr-only">Next</span>
                                    </a>
                                  </li>
                                </ul>
                              </nav>
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-4 mt-5 mt-lg-0 d-none">
                    <!-- Author Bio -->
                    <div class="d-flex flex-column text-center bg-dark rounded mb-5 py-5 px-4">
                        <img src="img/user.jpg" class="img-fluid rounded-circle mx-auto mb-3" style="width: 100px;">
                        <h3 class="text-primary mb-3">John Doe</h3>
                        <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Tag Cloud</h3>
                        <p class="text-white m-0">Conset elitr erat vero dolor ipsum et diam, eos dolor lorem, ipsum sit no ut est  ipsum erat kasd amet elitr</p>
                    </div>
    
                    <!-- Search Form -->
                    <div class="mb-5">
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-lg" placeholder="Keyword">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-transparent text-primary"><i
                                            class="fa fa-search"></i></span>
                                </div>
                            </div>
                        </form>
                    </div>
    
                    <!-- Category List -->
                    <div class="mb-5">
                        <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Categories</h3>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="" class="text-decoration-none h6 m-0">Web Design</a>
                                <span class="badge badge-primary badge-pill">150</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="" class="text-decoration-none h6 m-0">Web Development</a>
                                <span class="badge badge-primary badge-pill">131</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="" class="text-decoration-none h6 m-0">Online Marketing</a>
                                <span class="badge badge-primary badge-pill">78</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="" class="text-decoration-none h6 m-0">Keyword Research</a>
                                <span class="badge badge-primary badge-pill">56</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="" class="text-decoration-none h6 m-0">Email Marketing</a>
                                <span class="badge badge-primary badge-pill">98</span>
                            </li>
                        </ul>
                    </div>
    
                    <!-- Recent Post -->
                    <div class="mb-5">
                        <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Recent Post</h3>
                        <a class="d-flex align-items-center text-decoration-none mb-3" href="">
                            <img class="img-fluid rounded" src="img/blog-80x80.jpg" alt="">
                            <div class="pl-3">
                                <h6 class="m-1">Diam lorem dolore justo eirmod lorem dolore</h6>
                                <small>Jan 01, 2050</small>
                            </div>
                        </a>
                        <a class="d-flex align-items-center text-decoration-none mb-3" href="">
                            <img class="img-fluid rounded" src="img/blog-80x80.jpg" alt="">
                            <div class="pl-3">
                                <h6 class="m-1">Diam lorem dolore justo eirmod lorem dolore</h6>
                                <small>Jan 01, 2050</small>
                            </div>
                        </a>
                        <a class="d-flex align-items-center text-decoration-none mb-3" href="">
                            <img class="img-fluid rounded" src="img/blog-80x80.jpg" alt="">
                            <div class="pl-3">
                                <h6 class="m-1">Diam lorem dolore justo eirmod lorem dolore</h6>
                                <small>Jan 01, 2050</small>
                            </div>
                        </a>
                    </div>
    
                    <!-- Tag Cloud -->
                    <div class="mb-5">
                        <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Tag Cloud</h3>
                        <div class="d-flex flex-wrap m-n1">
                            <a href="" class="btn btn-outline-primary m-1">Design</a>
                            <a href="" class="btn btn-outline-primary m-1">Development</a>
                            <a href="" class="btn btn-outline-primary m-1">Marketing</a>
                            <a href="" class="btn btn-outline-primary m-1">SEO</a>
                            <a href="" class="btn btn-outline-primary m-1">Writing</a>
                            <a href="" class="btn btn-outline-primary m-1">Consulting</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->
     
  

    @include('layout.footer.footer')
      
@endsection