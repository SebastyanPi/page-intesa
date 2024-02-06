@php
    $URL = env('APP_URL')
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <title>Intesa- Oficial</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta  name="keywords" content="Intesa, instituto tecnico del saber, carreras tecnicas, carreras tecnicas barrancabermeja.">
    <meta name="description" content="Institución tecnico laboral para el trabajo y el desarrollo humano." >

    <meta name=”description” content=”Aquí introduces la meta descripción de la página” />

    <!-- Favicon -->
    <link href="{{ $URL }}img/intesa.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="{{ $URL }}assets/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ $URL }}assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ $URL }}assets/css/style.css" rel="stylesheet">

    <link href="{{ $URL }}assets/css/app.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Topbar Start -->
    @include('layout.navbar.topbar')
    <!-- Navbar Start -->
    @include('layout.navbar.navbar')


    @yield('content')


    <div class="container-fluid bg-n-verde-09 text-dark border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
            <div class="col-lg-12 text-center text-md-left mb-3 mb-md-0">
                <div class="d-flex justify-content-center">
                    <div class="text-center font-weight-bold">
                        <small>Institución tecnica sujeta a inspección y vigilancia por el Ministerio de Educación Nacional – Licencia Funcionamiento 3021 del 14 de Diciembre 2015 Barrancabermeja, Santander</small>
                <p class="m-0 text-dark">&copy; <a href="#" class="text-dark">Copyright 2024
                    Instituto Tecnico Del Saber</a>
                </p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ $URL }}assets/lib/easing/easing.min.js"></script>
    <script src="{{ $URL }}assets/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="{{ $URL }}assets/mail/jqBootstrapValidation.min.js"></script>
    <script src="{{ $URL }}assets/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="{{ $URL }}assets/js/main.js"></script>
</body>

</html>