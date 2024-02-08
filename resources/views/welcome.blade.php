@extends('layout.app')

@section('content')
        <!-- Carousel Start -->
        @include('layout.navbar.carousel')

        <div class="container-fluid py-5">
                <div class="container-fluid pt-2 p-lg-0 pb-3">
                    <div class="text-center mb-5">
                        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Noticias Importantes</h5>
                        <h1>#Enterate</h1>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-3 text-center team mb-4">
                            <div class="team-item rounded overflow-hidden mb-2">
                                <div class="team-img position-relative">
                                    <img class="img-fluid" src="{{ env('APP_URL') }}img/enterate/1.jpg" alt="">
                                    <div class="team-social">
                                        <a class="btn btn-outline-light btn-square mx-1" href="https://wa.me/573104962668"><i class="fa fa-whatsapp"></i></a>
                                        <a class="btn btn-outline-light btn-square mx-1" href="https://www.facebook.com/INTESABARRANCABERMEJA2018"><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-outline-light btn-square mx-1 d-none" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                                <div class="bg-secondary p-4">
                                    <h5>Descuento especial!</h5>
                                    <p class="m-0"><a href="https://wa.me/573104962668" class="btn btn-primary btn-sm">Mas información!</button></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 text-center team mb-4">
                            <div class="team-item rounded overflow-hidden mb-2">
                                <div class="team-img position-relative">
                                    <img class="img-fluid" src="{{ env('APP_URL') }}img/enterate/2.jpg" alt="">
                                    <div class="team-social">
                                        <a class="btn btn-outline-light btn-square mx-1" href="https://wa.me/573104962668"><i class="fa fa-whatsapp"></i></a>
                                        <a class="btn btn-outline-light btn-square mx-1" href="https://www.facebook.com/INTESABARRANCABERMEJA2018"><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-outline-light btn-square mx-1 d-none" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                                <div class="bg-secondary p-4">
                                    <h5>Garantizamos tus practicas!</h5>
                                    <p class="m-0"><a href="https://wa.me/573104962668" class="btn btn-primary btn-sm">Mas información!</button></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 text-center team mb-4">
                            <div class="team-item rounded overflow-hidden mb-2">
                                <div class="team-img position-relative">
                                    <img class="img-fluid" src="{{ env('APP_URL') }}img/enterate/3.jpg" alt="">
                                    <div class="team-social">
                                        <a class="btn btn-outline-light btn-square mx-1" href="https://wa.me/573104962668"><i class="fa fa-whatsapp"></i></a>
                                        <a class="btn btn-outline-light btn-square mx-1" href="https://www.facebook.com/INTESABARRANCABERMEJA2018"><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-outline-light btn-square mx-1 d-none" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                                <div class="bg-secondary p-4">
                                    <h5>Matriculas Abiertas!</h5>
                                    <p class="m-0"><a href="https://wa.me/573104962668" class="btn btn-primary btn-sm">Mas información!</button></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 text-center team mb-4">
                            <div class="team-item rounded overflow-hidden mb-2">
                                <div class="team-img position-relative">
                                    <img class="img-fluid" src="{{ env('APP_URL') }}img/enterate/4.jpg" alt="">
                                    <div class="team-social">
                                        <a class="btn btn-outline-light btn-square mx-1" href="https://wa.me/573104962668"><i class="fa fa-whatsapp"></i></a>
                                        <a class="btn btn-outline-light btn-square mx-1" href="https://www.facebook.com/INTESABARRANCABERMEJA2018"><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-outline-light btn-square mx-1 d-none" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                                <div class="bg-secondary p-4">
                                    <h5>Descuento por Referidos!</h5>
                                    <p class="m-0"><a href="https://wa.me/573104962668" class="btn btn-primary btn-sm">Mas información!</button></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        @include('layout.footer.footer')

@endsection