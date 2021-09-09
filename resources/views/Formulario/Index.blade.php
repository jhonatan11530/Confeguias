<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro De Guias Nacional</title>

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
            <form action="/Registro" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
            <p class="text-center">DATOS PERSONALES</p>
            <div class="row">
                <div class="col-sm-6">
                    <label>Nombre</label>
                    <input type="text" name="Nombre" placeholder="Nombre" class="form-control mb-2">
                </div>
                <div class="col-sm-6">
                    <label>Apellidos</label>
                    <input type="text" name="Apellido" placeholder="Apellido" class="form-control mb-2">
                </div>
                <div class="col-sm-12">
                    <label>Adjuntar Foto PDF (personal)</label>
                    <input type="file" name="AdjuntarFoto" accept="application/pdf" class="form-control mb-2">
                </div>
                <div class="col-sm-6">
                    <label>Tipo de identificacion</label>
                    <select name="TipoIdentificacion" class="form-control mb-2">
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
                    <label>Numero de identificacion</label>
                    <input class="form-control mb-2" type="number" min="0" name="NumeroIdentificacion" placeholder="Numero de identificacion">
                </div>
                <div class="col-sm-6">
                    <label>Fecha de expedición</label>
                    <input type="date" name="FechaExpedicion" class="form-control mb-2">
                </div>
                <div class="col-sm-6">
                    <label>Adjunta documento PDF (Documento Personal)</label>
                    <input type="file" name="AdjuntaDocumento" accept="application/pdf" class="form-control mb-2">
                </div>

                <div class="col-sm-6">
                    <label>Dirreccion de residencia</label>
                    <input type="text" name="DirreccionResidencia" class="form-control mb-2">
                </div>
                <div class="col-sm-6">
                    <label>Nomenclatura</label>
                    <input type="text" name="Nomenclatura" class="form-control mb-2">
                </div>
                <div class="col-sm-6">
                    <label>Celular</label>
                    <input type="number" name="Celular" min="0" class="form-control mb-2">
                </div>
                <div class="col-sm-6">
                    <label>Telefono Fijo</label>
                    <input type="number" name="TelefonoFijo" min="0" class="form-control mb-2">
                </div> 
                <div class="col-sm-6">
                    <label>Correo electronico</label>
                    <input type="email" name="Correo" class="form-control mb-2">
                </div>
                <div class="col-sm-6">
                    <label>Contraseña</label>
                    <input type="password" name="Contraseña" placeholder="cree una contraseña ingresar al sistema" class="form-control mb-2">
                </div>
            </div>
            <hr>
            <p class="text-center">DATOS PORFESIONALES</p>
            <div class="row">
                <div class="col-sm-6">
                    <label>N° Tarjeta Profesional</label>
                    <input type="number" min="0" name="TarjetaProfesional" class="form-control mb-3">
                </div>
                <div class="col-sm-6">
                    <label>Adjunto Documento PDF (Tarjeta Profesional)</label>
                    <input type="file" name="AdjuntoTarjetaProfesional" accept="application/pdf" class="form-control mb-3">
                </div>
                <div class="col-sm-6">
                    <label>N° Guia Registro Nacional de Turismo</label>
                    <input type="number" min="0" name="NGuiaRegistro" class="form-control mb-3">
                </div>
                <div class="col-sm-6">
                    <label>Adjunto Documento PDF (Registro Nacional de Turismo)</label>
                    <input type="file" name="DocumentoGuiaRegistro" accept="application/pdf" class="form-control mb-3">
                </div>
                <div class="col-sm-12">
                    <label>GUIA AGREMIADO</label>
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
                    <label>Descripcion Del Perfil</label>
                    <textarea name="DescripcionPerfil" class="form-control" placeholder="Descripcion del perfil"
                        rows="5"></textarea>
                </div>
            </div>
            <hr>
            <p class="text-center">DATOS DE ESTUDIOS</p>
            <div class="row">
                <div class="col-sm-12 mb-5">
                    <label>Certificados de Idiomas</label><a class="btn btn-primary float-right" id="clickIdioma">+</a>
                    <input type="text" name="TituloCertificadosIdiomas" class="form-control mb-2">
                    <input type="file" name="CertificadosPDFIdiomas" accept="application/pdf" class="form-control mb-3">
                    <div id="Idiomas"></div>
                </div>
                <div class="col-sm-12 mb-5">
                    <label>Certificados Academicos</label><a class="btn btn-primary float-right" id="clickAcademicos">+</a>
                    <input type="text" name="TituloCertificadosAcademicos" class="form-control mb-2">
                    <input type="file" name="CertificadosPDFAcademicos" accept="application/pdf" class="form-control mb-3">
                    <div id="Academicos"></div>
                </div>
                <div class="col-sm-12 mb-5">
                    <label>Certificados De otros Estudios</label><a class="btn btn-primary float-right" id="clickEstudios">+</a>
                    <input type="text" name="TituloCertificadosEstudios" class="form-control mb-2">
                    <input type="file" name="CertificadosPDFEstudios" accept="application/pdf" class="form-control mb-3">
                    <div id="Estudios"></div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#clickIdioma").on('click',function() {
                var html =`
                <label>Certificados de Idiomas</label>
                    <input type="text" name="TituloCertificadosIdiomas" class="form-control mb-2">
                    <input type="file" name="CertificadosPDFIdiomas" accept="application/pdf" class="form-control mb-3">`;
                $("#Idiomas").append(html);
            })
            $("#clickAcademicos").on('click',function() {
                var html =`
                <label>Certificados Academicos</label>
                    <input type="text" name="TituloCertificadosAcademicos" class="form-control mb-2">
                    <input type="file" name="CertificadosPDFAcademicos" accept="application/pdf" class="form-control mb-3">`;
                $("#Academicos").append(html);;
            })
            $("#clickEstudios").on('click',function() {
                var html =`
                <label>Certificados De otros Estudios</label>
                    <input type="text" name="TituloCertificadosEstudios" class="form-control mb-2">
                    <input type="file" name="CertificadosPDFEstudios" accept="application/pdf" class="form-control mb-3">`;
                $("#Estudios").append(html);
            })
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
        })
    </script>
</body>

</html>