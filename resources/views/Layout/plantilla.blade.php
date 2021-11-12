<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confederación de Guías de Turismo de Colombia CONFEGUIAS</title>
    <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/jquery-jvectormap-2.0.5.css') }}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg justify-content-center navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="/">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto w-100 justify-content-end">
                <li class="nav-item mr-sm-2">
                    <a class="nav-link" href="/">{{__("texto.navbar.inicio")}}</a>
                </li>
                <li class="nav-item mr-sm-2">
                    <a class="nav-link" href="/guias-nacionales">{{__("texto.navbar.guias")}}</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">{{__("texto.navbar.institucion")}}</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/sobre-nosotros">{{__("texto.navbar.institucion.subUNO")}}</a>
                        <a class="dropdown-item" href="/directorio">{{__("texto.navbar.institucion.subDOS")}}</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/contacto">{{__("texto.navbar.institucion.subTRES")}}</a>
                        <a class="dropdown-item" href="/denuncia">{{__("texto.navbar.institucion.subCUATRO")}}</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button"
                        data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">{{__("texto.navbar.Normatividad")}}</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                        <a class="dropdown-item" href="#">Leyes</a>
                        <a class="dropdown-item" href="#">Decretos</a>
                        <a class="dropdown-item" href="#">Resoluciones</a>
                        <a class="dropdown-item" href="#">Normas Técnicas</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">{{__("texto.navbar.idioma")}}</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#" id="change_language" data-lang="es"><img
                                src="{{ asset('img/espana.png') }}" width="15">
                            {{__("texto.navbar.idioma.español")}}</a>
                        <a class="dropdown-item" href="#" id="change_language" data-lang="en"><img
                                src="{{ asset('img/estados-unidos.png') }}" width="15">
                            {{__("texto.navbar.idioma.ingles")}}</a>
                    </div>
                </li>
                <li class="nav-item mr-sm-2">
                    <a class="btn btn-primary" href="/Registro/Guia"
                        target="_blank">{{__("texto.navbar.externo.registro")}}</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary" href="/Sistema/login"
                        target="_blank">{{__("texto.navbar.externo.iniciar")}}</a>
                </li>
            </ul>
        </div>
    </nav>

    @yield('contenido')

    <!---- MODAL DENUNCIA ---->
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

    <a href="https://wa.me/573114360830?text=hola" class="whatsapp" target="_blank"><i
            class="fa fa-whatsapp whatsapp-icon"></i></a>

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
                    <p><a href="/terminos" class="text-white">{{__("texto.footer.terminos")}}</a></p>
                    <p><a href="/politicas" class="text-white">{{__("texto.footer.politica")}}
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
<script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery-jvectormap-2.0.5.min.js') }}"></script>
<script src="{{ asset('js/jquery-jvectormap-co-mill.js') }}"></script>
<script>
    $(document).ready(function () {
        $('#world-map').vectorMap({
            map: 'co_mill',
            animate: true,
            onRegionClick:function(event, code){    
                var map = $('#world-map').vectorMap('get', 'mapObject');      
                var name = map.getRegionName(code);
                alert(name);
            },
            });
        

        $('.carousel').carousel({
            interval: 2000
        }),
        $(document).on('click','#change_language',function(){
            var lang=$(this).attr('data-lang');
            $.ajax({
            url:'change-lang/'+lang,
            type:'get',
            success:function(data){
                location.reload()
            }
            })
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