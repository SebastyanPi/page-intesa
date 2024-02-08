<!-- Carousel Start -->
<div class="container-fluid p-0  mb-5">
    <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#header-carousel" data-slide-to="1"></li>
            <li data-target="#header-carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" style="min-height: 300px;">
                <img class="position-relative w-100" src="{{ env('APP_URL') }}img/CI-6.jpg" style="min-height: 300px; object-fit: cover;">
                <div class="carousel-caption d-flex align-items-center justify-content-center">
                    <div class="p-5" style="width: 100%; max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-md-3">Instituto Tecnico Del Saber</h5>
                        <h2 class="display-3 text-white mb-md-4">INTESA es tu mejor decisión!</h2>
                        <a href="{{ route('pages.quienes_somos') }}" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2"><i class="fas fa-book-reader"></i> Mas información!</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="min-height: 300px;">
                <img class="position-relative w-100" src="{{ env('APP_URL') }}img/CI-2.png" style="min-height: 300px; object-fit: cover;">
                <div class="carousel-caption d-flex align-items-center justify-content-center">
                    <div class="p-5" style="width: 100%; max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-md-3">Instituto Tecnico Del Saber</h5>
                        <h1 class="display-3 text-white mb-md-4">INTESA es tu mejor decisión!</h1>
                        <a href="{{ route('pages.legalidad') }}" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2"><i class="fas fa-book-reader"></i> Mas información!</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item " style="min-height: 300px;">
                <img class="position-relative w-100" src="{{ env('APP_URL') }}img/CI-5.jpg" style="min-height: 300px; object-fit: cover;">
                <div class="carousel-caption d-flex align-items-center justify-content-center">
                    <div class="p-5" style="width: 100%; max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-md-3">Instituto Tecnico Del Saber</h5>
                        <h1 class="display-3 text-white mb-md-4">INTESA es tu mejor decisión!</h1>
                        <a href="{{ route('pages.historia') }}" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2"><i class="fas fa-book-reader"></i> Mas información!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->