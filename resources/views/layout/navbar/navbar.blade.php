
    <!-- Navbar Start -->
    <div class="container-fluid ">
        <div class="row border-top px-xl-5 bg-n-verde-09">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="d-flex align-items-center justify-content-between bg-n-verde-01 w-100 text-decoration-none" data-toggle="collapse" href="#navbar-vertical" style="height: 67px; padding: 0 30px;">
                    <h5 class=" m-0 text-white"><i class="fa fa-book-open mr-2"></i>Nuestros Valores</h5>
                    <i class="fa fa-angle-down text-white"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 9;">
                    <div class="navbar-nav w-100">
                        <div class="nav-item dropdown d-none">
                            <a href="#" class="nav-link" data-toggle="dropdown">Liderazgo <i class="fa fa-angle-down float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                <a href="" class="dropdown-item">Habilidad para inspirar y para influir positivamente en los demás hacia el logro de objetivos.</a>
                            </div>
                        </div>
                        <a href="#" class="nav-item nav-link">Liderazgo</a>
                        <a href="#" class="nav-item nav-link">Trabajo en Equipo</a>
                        <a href="#" class="nav-item nav-link">Orientación al Servicio</a>
                        <a href="#" class="nav-item nav-link">Excelencia</a>
                        <a href="#" class="nav-item nav-link">Innovación</a>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light bg-n-verde-09 py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0"><img src="{{ $URL }}img/intesa.png" alt="" width="60px"> INTESA</h1>
                        <a class="btn bg-gradient-verde-suave text-white mr-3 btn-sm py-2 px-4 ml-auto  d-lg-none" href="https://campus.institutointesa.edu.co/"><i class="fas fa-door-open"></i></a>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav py-0">

                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Institucional</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="{{ route('pages.historia') }}" class="dropdown-item">Historia</a>
                                    <a href="{{ route('pages.legalidad') }}" class="dropdown-item">Legalidad</a>
                                    <a href="{{ route('pages.quienes_somos') }}" class="dropdown-item">¿Quienes Somos?</a>
                                    <a href="{{ route('pages.mision_vision') }}" class="dropdown-item">Misión & Visión</a>
                                    <a href="{{ route('pages.convenios') }}" class="dropdown-item">Convenios</a>
                                    <a href="single.html" class="dropdown-item d-none">Portafolio</a>
                                </div>
                            </div>

                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Tecnico Laborales</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="{{ route('pages.presencial.tecnico.auxadmin') }}" class="dropdown-item">Auxiliar Administrativo</a>
                                    <a href="{{ route('pages.presencial.tecnico.auxinfancia') }}" class="dropdown-item">Auxiliar de Primera Infancia</a>
                                    <a href="{{ route('pages.presencial.tecnico.seguridad') }}" class="dropdown-item">Seguridad En El Trabajo</a>
                                    <a href="{{ route('pages.presencial.tecnico.mecanica') }}" class="dropdown-item">Mecanica Diesel Automotriz</a>
                                    <a href="{{ route('pages.presencial.tecnico.operador') }}" class="dropdown-item">Operador de Maquinaria Pesada</a>
                                </div>
                            </div>

                            <a href="{{ route('pages.virtual') }}" class="nav-item nav-link">Modalidad Virtual</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Otros</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="{{ route('pages.presencial.curso') }}" class="dropdown-item">Certificaciones</a>
                                    <a href="{{ route('pages.presencial.diplomados') }}" class="dropdown-item">Diplomados</a>
                                    <a href="{{ route('pages.presencial.seminarios') }}" class="dropdown-item">Seminarios</a>
                                    <a href="{{ route('pages.presencial.cortos') }}" class="dropdown-item">Cursos Cortos</a>
                                </div>
                            </div>

                            
                            <a href="{{ route('pages.contactos') }}" class="nav-item nav-link">Contactos</a>

                        </div>
                        <a class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block" href="https://campus.institutointesa.edu.co/"><i class="fas fa-door-open"></i> Campus</a>
                    </div>
                </nav>

               
            </div>
        </div>
    </div>
    <!-- Navbar End -->