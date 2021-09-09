<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina Web</title>
    <link rel="shortcut icon" href="{{ URL::asset('/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg justify-content-center navbar-light bg-light ">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto w-100 justify-content-end">
                <li class="nav-item mr-sm-2">
                    <a class="nav-link" href="/">inicio</a>
                </li>
                <li class="nav-item mr-sm-2">
                    <a class="nav-link" href="/sobre-nosotros">Sobre Nosotros</a>
                </li>
                <li class="nav-item mr-sm-2">
                    <a class="nav-link" href="/guias-nacionales">Guias Locales</a>
                </li>
                <li class="nav-item mr-sm-2">
                    <a class="nav-link" href="/contacto">Contacto</a>
                </li>
                <li class="nav-item mr-sm-2">
                    <a class="btn btn-primary" href="/Registro/Guia" target="_blank">AFILIATE</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary" href="/Sistema/login" target="_blank">Iniciar sesión</a>
                </li>
            </ul>
        </div>
    </nav>

    @yield('contenido')
    <footer class="bg-primary text-white text-center text-lg-start">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-lg-3 col-md-12 mb-4 mb-md-0">
                    <h6 class="text-uppercase mb-3"><strong>Dirección</strong></h6>
                    <p>### ### ####</p>
                    <h6 class="text-uppercase mb-2"><strong>Horario atención</strong></h6>
                    <span style="color: red">Lunes a jueves:</span>
                    <p>### ### ####</p>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
                    <h6 class="text-uppercase mb-3"><strong>Email</strong></h6>
                    <p>### ### ####</p>
                    <h6 class="text-uppercase mb-3"><strong>Notificaciones Judiciales</strong></h6>
                    <p>### ### ####</p>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h6 class="text-uppercase mb-3"><strong>Llámanos</strong></h6>
                    <p>(+57) ### ### ####</p>
                    <h6 class="text-uppercase mb-3"><strong>Linea Gratuita:</strong></h6>
                    <p>(+57) ### ### ####</p>
                </div>
                <!--Grid column-->
            </div>
            <hr>
            <div class="row">
                <!--Grid column-->
                <!----
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h6 class="text-uppercase mb-0">
                        <?php setlocale(LC_ALL, 'es_Co'); date_default_timezone_set('America/Bogota'); echo strftime("%A %d %B %Y %R"); echo"&nbsp;"; echo date('a');  ?>
                    </h6>
                </div>--->
                <!--Grid column-->
                <div class="col-lg-3 col-md-12 mb-0 mb-md-0">
                    <h6 class="text-uppercase mb-0">
                        <?php setlocale(LC_ALL, 'es_Co'); date_default_timezone_set('America/Bogota'); echo strftime("%A %d %B %Y %R"); echo"&nbsp;"; echo date('a');  ?>
                    </h6>
                    <a href="#" type="button" class="btn btn-primary"><i class="fab fa-facebook-square fa-2x"></i></a>
                    <a href="#" type="button" class="btn btn-primary"><i class="fab fa-instagram fa-2x"></i></a>
                    <a href="#" type="button" class="btn btn-primary"><i class="fab fa-linkedin fa-2x"></i></a>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-5 col-md-6 mb-0 mb-md-0">
                    <p>### ### ####</p>
                    <p>### ### ####</p>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-0 mb-md-0">
                    <p><a href="#" class="text-white">Términos y condiciones</a></p>
                    <p><a href="#" class="text-white">Políticas y procedimientos para el tratamiento de datos
                            personales</a></p>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2021 Copyright:
            <a class="text-white" href="#">### ###</a>
        </div>
        <!-- Copyright -->
    </footer>
</body>

</html>