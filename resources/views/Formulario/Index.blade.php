<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro De Guias Nacional</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</head>

<body>
    <div class="row" style="width: 100%">
        <div class="col-sm-7">
            <img class="img-fluid"
                src="https://imagekit.androidphoria.com/wp-content/uploads/como-buscar-una-imagen-en-facebook-con-una-foto.jpg"
                style="height: 100%;width: 100%;" alt="Error Image">
        </div>
        <div class="col-sm-5">
            <img class="img-fluid mb-3"
                src="https://imagekit.androidphoria.com/wp-content/uploads/como-buscar-una-imagen-en-facebook-con-una-foto.jpg"
                alt="Error Image" style="width: 100%;height: 150px;">
            <hr>
            <form class="container" id="formulario" enctype="multipart/form-data" action="">
                {{ csrf_field() }}
                <p class="text-center">DATOS PERSONALES</p>
                <div class="row">
                    <div class="col-sm-6">
                        <label>Nombres <span style="color: red">*</span></label>
                        <input type="text" name="Nombre" placeholder="Nombre" class="form-control mb-2" required>
                    </div>
                    <div class="col-sm-6">
                        <label>Apellidos <span style="color: red">*</span></label>
                        <input type="text" name="Apellido" placeholder="Apellido" class="form-control mb-2" required>
                    </div>
                    <div class="col-sm-12">
                        <label>Adjuntar Foto personal PDF<span style="color: red">*</span></label>
                        <input type="file" name="AdjuntarFoto" accept="application/pdf" class="form-control mb-2"
                            required>
                    </div>
                    <div class="col-sm-6">
                        <label>Tipo de identificacion <span style="color: red">*</span></label>
                        <select name="TipoIdentificacion" class="form-control mb-2" required>
                            <option value="" selected disabled>Seleccione</option>
                            <option value="Registro civil">Registro civil(RC)</option>
                            <option value="Targeta de identidad">Tarjeta de identidad(TI)</option>
                            <option value="Cédula de ciudadania">Cédula de ciudadanía(CC)</option>
                            <option value="Targeta de extrangeria">Tarjeta de extranjería(TE)</option>
                            <option value="Cédula de extrangeria">Cédula de extranjería(CE)</option>
                            <option value="Número de identificacion tributaria">Número de identificación
                                tributaria(NIT)</option>
                            <option value="Pasaporte">Pasaporte(PP)</option>
                            <option value="Documento de identificación de extrangero">Documento de
                                identificación extranjero(DIE)</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label>Numero de identificacion <span style="color: red">*</span></label>
                        <input class="form-control mb-2" type="number" min="0" name="NumeroIdentificacion"
                            placeholder="Numero de identificacion" required>
                    </div>
                    <div class="col-sm-6">
                        <label>Fecha de expedición <span style="color: red">*</span></label>
                        <input type="date" name="FechaExpedicion" value="<?php echo date("Y-m-d"); ?>"
                            class="form-control mb-2" required>
                    </div>
                    <div class="col-sm-6">
                        <label>Dirreccion de residencia <span style="color: red">*</span></label>
                        <input type="text" name="DirreccionResidencia" class="form-control mb-2" required>
                    </div>
                    <div class="col-sm-6">
                        <label>Nomenclatura <span style="color: red">*</span></label>
                        <input type="text" name="Nomenclatura" class="form-control mb-2" required>
                    </div>
                    <div class="col-sm-6">
                        <label>Celular <span style="color: red">*</span></label>
                        <input type="number" name="Celular" min="0" class="form-control mb-2" required>
                    </div>
                    <div class="col-sm-6">
                        <label>Telefono Fijo <span style="color: red">*</span></label>
                        <input type="number" name="TelefonoFijo" min="0" class="form-control mb-2" required>
                    </div>
                </div>
                <p class="text-center">DATOS INICIO DE SESSION</p>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <label>Correo electronico <span style="color: red">*</span></label>
                        <input type="email" name="Correo" class="form-control mb-2" required>
                    </div>
                    <div class="col-sm-6">
                        <label>Contraseña <span style="color: red">*</span></label>
                        <input type="password" name="Contraseña" placeholder="cree una contraseña ingresar al sistema"
                            class="form-control mb-2" required>
                    </div>
                </div>
                <hr>
                <p class="text-center">DATOS PROFESIONALES</p>
                <div class="row">
                    <div class="col-sm-6">
                        <label>N° Tarjeta Profesional <span style="color: red">*</span></label>
                        <input type="number" min="0" name="TarjetaProfesional" class="form-control mb-3" required>
                    </div>
                    <div class="col-sm-6">
                        <label>Adjunto Tarjeta Profesional PDF</label>
                        <input type="file" name="AdjuntoTarjetaProfesional" accept="application/pdf"
                            class="form-control mb-3" required>
                    </div>
                    <div class="col-sm-6">
                        <label>N° Guia Registro Nacional de Turismo <span style="color: red">*</span></label>
                        <input type="number" min="0" name="NGuiaRegistro" class="form-control mb-3" required>
                    </div>
                    <div class="col-sm-6">
                        <label>Adjunto Registro Nacional de Turismo PDF <span style="color: red">*</span></label>
                        <input type="file" name="DocumentoGuiaRegistro" accept="application/pdf"
                            class="form-control mb-3" required>
                    </div>
                    <div class="col-sm-12">
                        <label>GUIA AGREMIADO <span style="color: red">*</span></label>
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="Guia" value="SI">
                                <label class="form-check-label">SI</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="Guia" value="NO">
                                <label class="form-check-label">NO</label>
                            </div>
                        </div>
                    </div>
                    <div id="GUIA"></div>
                    <div class="col-sm-12">
                        <label>Descripcion Del Perfil <span style="color: red">*</span></label>
                        <textarea name="DescripcionPerfil" class="form-control" placeholder="Descripcion del perfil"
                            rows="5" required></textarea>
                    </div>
                </div>
                <hr>
                <p class="text-center">DATOS DE ESTUDIOS</p>
                <div class="row">
                    <div class="col-sm-12 mb-2">
                        <label>Certificados de Idiomas <span style="color: red">*</span></label><a
                            class="btn btn-primary float-right" id="clickIdioma">+</a>
                        <input type="text" name="TituloCertificadosIdiomas[]" class="form-control mb-2" placeholder="Titulo del Certificado">
                        <input type="file" name="CertificadosPDFIdiomas[]" accept="application/pdf"
                            class="form-control mb-3" required>
                        <div id="Idiomas"></div>
                    </div>
                    <div class="col-sm-12 mb-2">
                        <label>Certificados Academicos <span style="color: red">*</span></label><a
                            class="btn btn-primary float-right" id="clickAcademicos">+</a>
                        <input type="text" name="TituloCertificadosAcademicos[]" class="form-control mb-2" placeholder="Titulo del Certificado">
                        <input type="file" name="CertificadosPDFAcademicos[]" accept="application/pdf"
                            class="form-control mb-3" required>
                        <div id="Academicos"></div>
                    </div>
                    <div class="col-sm-12 mb-2">
                        <label>Certificados De otros Estudios <span style="color: red">*</span></label><a
                            class="btn btn-primary float-right" id="clickEstudios">+</a>
                        <input type="text" name="TituloCertificadosEstudios[]" class="form-control mb-2" placeholder="Titulo del Certificado">
                        <input type="file" name="CertificadosPDFEstudios[]" accept="application/pdf"
                            class="form-control mb-3" required>
                        <div id="Estudios"></div>
                    </div>
                </div>
                <button type="button" class="btn btn-primary" id="submit">Enviar Datos</button>
            </form>
        </div>
    </div>

    <!---- MODAL BIENVENIDO ---->
    <div class="modal fade" id="PresentacionModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bienvenidos a Confederación de Guías de Turismo de
                        Colombia
                        CONFEGUIAS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apreciados colegas:</p>
                    <p>Desde la Confederación de Guías de Turismo de Colombia – CONFEGUIAS, estamos trabajando para
                        lograr
                        construir un gremio unido y propositivo que trabaje en favor del bienestar colectivo de todos
                        los Guías de Turismo del país, la defensa de sus derechos profesionales, el impulso al
                        desarrollo y la excelencia de la Profesión del Guía de Turismo y, por consiguiente, en pro del
                        engrandecimiento de Colombia a través de la industria turística nacional. </p>
                    <p>Para ello, la Confederación ha desarrollado este formulario con el fin de conseguir por primera
                        vez una base de datos de los Guías Profesionales de Colombia, que servirá para desarrollar los
                        programas de competitividad, capacitación y bienestar que se han venido trabajando en
                        CONFEGUIAS.</p>
                    <p>Invitamos a todos nuestros colegas agremiados y no agremiados a diligenciar de manera muy
                        aplicada y diligente este formulario, que tiene como objetivo además de reconocernos, poder
                        entregar una información exacta y confiable a las agencias de viajes y a los turistas de los
                        Guías Profesionales con su tarjeta profesional y registro nacional de turismo activo, sus
                        especializaciones, ubicación, contacto, experiencia y cualificaciones.
                        Plazo máximo para envío: <strong>30 septiembre de 2021</strong>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="modal-check" name='modal-check'
                        data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!---- MODAL REGISTRO ---->
    <div class="modal fade" id="RegistroModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Gracias por Registrarse Confederación de Guías de
                        Turismo
                        de Colombia CONFEGUIAS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apreciados colegas:</p>
                    <p>Gracias por dar respuesta oportuna y apoyar esta iniciativa gremial que nos permitirá obtener por
                        primera vez una base de datos completa, confiable y accesible de los Guías Profesionales de
                        Colombia.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                        onclick="reload()">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!---- MODAL REGISTRO ---->
    <div class="modal fade" id="ErrorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Error Los Datos Estas Vacios !!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Porfavor llene todos los campos vacios.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function reload() {
            location.reload();
        }
        $(document).ready(function() {
                $(document).on('click','#submit',function() {
                    $.ajax({
                        type: "POST",
                        url: "/Registro",
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: new FormData($("form")[0]),
                        success: function (response) {
                            $("#RegistroModal").modal("show");
                            
                        },
                        error:function(){
                            $("#ErrorModal").modal("show")
                        }
                    });
                });

           $('input:radio[name="Guia"]').change(function() {
                if ($(this).val() == 'NO') {
                    $("#GUIA").empty();
                }
                if($(this).val() == 'SI'){
                var asignar = `<div class='row'>
                <div class='col-sm-6'>
                    <label>Nombre de la Asociación</label>
                    <input type="text" name="NombreAsociacion" class="form-control mb-2">
                </div>
                <div class='col-sm-6'>
                    <label>Adjunto Certificado Asociación PDF</label>
                    <input type="file" name="CertificadoAsociacion" accept="application/pdf" class="form-control">
                </div>
                </div>`;
                $("#GUIA").html(asignar);
                }
            })
            $("#clickIdioma").on('click',function() {
                var html =`
                <label>Certificados de Idiomas</label>
                    <input type="text" name="TituloCertificadosIdiomas[]" class="form-control mb-2" placeholder="Titulo del Certificado">
                    <input type="file" name="CertificadosPDFIdiomas[]" accept="application/pdf" class="form-control mb-3">`;
                $("#Idiomas").append(html);
            })
            $("#clickAcademicos").on('click',function() {
                var html =`
                <label>Certificados Academicos</label>
                    <input type="text" name="TituloCertificadosAcademicos[]" class="form-control mb-2" placeholder="Titulo del Certificado">
                    <input type="file" name="CertificadosPDFAcademicos[]" accept="application/pdf" class="form-control mb-3">`;
                $("#Academicos").append(html);
            })
            $("#clickEstudios").on('click',function() {
                var html =`
                <label>Certificados De otros Estudios</label>
                    <input type="text" name="TituloCertificadosEstudios[]" class="form-control mb-2" placeholder="Titulo del Certificado">
                    <input type="file" name="CertificadosPDFEstudios[]" accept="application/pdf" class="form-control mb-3">`;
                $("#Estudios").append(html);
            })
        })
    </script>
</body>

</html>