<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confederación de Guías de Turismo de Colombia CONFEGUIAS</title>
    <link rel="shortcut icon" href="{{ URL::asset('/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    @yield('style')
</head>

<body>
    <nav class="navbar navbar-expand-lg justify-content-center navbar-light bg-light ">
        <a class="navbar-brand" href="/">Navbar</a>
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
                    <a class="nav-link" href="/guias-nacionales">Directorio de guías nacionales</a>
                </li>
                <li class="nav-item mr-sm-2">
                    <div class="btn-group" role="group">
                        <a class="nav-link" href="#" id="btnGroupDrop1" data-toggle="dropdown">Institucional</a>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <a class="dropdown-item" href="/sobre-nosotros">Sobre Nosotros</a>
                            <a class="dropdown-item" href="/directorio">Directorio</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item mr-sm-2">
                    <a class="nav-link" href="/contacto">Contacto</a>
                </li>
                <li class="nav-item mr-sm-2">
                    <a class="nav-link" href="/denuncia">Denuncie</a>
                </li>
                <li class="nav-item mr-sm-2">
                    <a class="btn btn-primary" href="/Registro/Guia" target="_blank">Regístrate</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary" href="/Sistema/login" target="_blank">Iniciar sesión</a>
                </li>
            </ul>
        </div>
    </nav>

    @yield('contenido')

    <!---- MODAL REGISTRO ---->
    <div class="modal fade" id="ErrorDenuncia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Error Los Datos Estas Vacios !!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Para Enviar la denuncia verifique si los campos estan vacios.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-primary text-white text-center text-lg-start">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-lg-3 col-md-4 mb-1 mb-md-0">
                    <h6 class="text-uppercase"><strong>Dirección</strong></h6>
                    <p>### ### ####</p>
                    <h6 class="text-uppercase"><strong>Horario atención</strong></h6>
                    <strong style="color: red">Lunes a Jueves:</strong>
                    <p>### ### ####</p>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-5 col-md-4 mb-1 mb-md-0">
                    <h6 class="text-uppercase"><strong>Email</strong></h6>
                    <p>### ### ####</p>
                    <h6 class="text-uppercase"><strong>Notificaciones Judiciales</strong></h6>
                    <p>### ### ####</p>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-4 mb-1 mb-md-0">
                    <h6 class="text-uppercase"><strong>Llámanos</strong></h6>
                    <p>(+57) ### ### ####</p>
                    <h6 class="text-uppercase"><strong>Linea Gratuita:</strong></h6>
                    <p>(+57) ### ### ####</p>
                </div>
                <!--Grid column-->

            </div>
            <hr>
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-3 col-md-12 mb-0 mb-md-0">
                    <h6 class="text-uppercase mb-0">
                        <?php setlocale(LC_ALL, 'es_Co.UTF-8'); date_default_timezone_set('America/Bogota'); echo strftime("%A %d %B %Y %R"); echo"&nbsp;"; echo date('a');  ?>
                    </h6>
                    <a href="#" type="button" class="btn btn-primary"><i class="fab fa-facebook-square fa-2x"></i></a>
                    <a href="#" type="button" class="btn btn-primary"><i class="fab fa-instagram fa-2x"></i></a>
                    <a href="#" type="button" class="btn btn-primary"><i class="fab fa-linkedin fa-2x"></i></a>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-5 col-md-6 mb-0 mb-md-0">
                    <p><a href="" class="text-white">## #### ####</a></p>
                    <p><a href="" class="text-white">## #### ####</a></p>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-0 mb-md-0">
                    <p><a href="/terminos" class="text-white">Términos y condiciones</a></p>
                    <p><a href="/politicas" class="text-white">Políticas y procedimientos para el tratamiento de datos
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
            <a class="text-white" href="#">###########</a>
        </div>
        <!-- Copyright -->
    </footer>
</body>
@yield('script')
<script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script>
    $(document).ready(function () {
        $('.carousel').carousel({
  interval: 2000
})
        $("#submit").click(function (e) { 
            $.ajax({
                type: "POST",
                url: "/Enviar/Denuncia",
                data: new FormData($("form#Denuncia")[0]),
                cache: false,
                contentType: false,
                processData: false,
                success: function (response) {
                    alert("Su Denuncia se Envio Correctamente !!");
                    location.reload();
                },
                error:function(){
                    $("#ErrorDenuncia").modal("show")
                }
            });
        });
        $('select#Pruebas').on('change', function() {
            if (this.value =="SI") {
                var asignar = `<div class="col-sm-12">
                            <label>Descripcion de los Hechos <span style="color:red">*</span></label>
                            <textarea name="DescripcionHechos" class="form-control" rows="5" required></textarea>
                            </div>
                            <div class="col-sm-12">
                            <label>Adjuntar Pruebas <span style="color:red">*</span></label>
                            <input type="file" name="AdjuntarPruebas[]" multiple='multiple' class="form-control" required>
                            </div>`;
                    $("#Mostrar").html(asignar);
            }else{
                $("#Mostrar").empty();
            }
        });
});
</script>


</html>