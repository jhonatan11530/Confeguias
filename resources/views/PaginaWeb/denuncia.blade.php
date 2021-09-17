@extends('Layout.plantilla')
@section('contenido')
@section('script')@show
<div class="contactenos mb-5">
    <div class="text-center center-block" style="color: white;">
        <h1>Denuncia</h1>
    </div>
</div>
<div class="container-fluid">
    <p>Una de las funciones primordiales del Consejo Superior de Agremiaciones de Guías de Turismo de Colombia es la de
        ser vocero oficial de los intereses de los Guías de Turismo a nivel nacional, llevando las problemáticas de
        nuestro gremio ante las autoridades y entidades competentes para lograr su solución.</p>
    <p>En esta sección usted podrá presentar quejas y denunciar todo tipo de irregularidades que perciba con relación a
        los siguientes aspectos:</p>
    <ul>
        <li>Ejercicio ilícito de la profesión e Irrespeto a la profesión del Guionaje turístico por parte de personas
            naturales, entidades publicas o privadas, autoridades, administradores de atractivos turísticos, prestadores
            de servicios turísticos o Guías de Turismo.</li>
        <li>Desacato a lo contenido en la Ley 300 de 1996, sus normas reglamentarias y demás normas concordantes.</li>
        <li>Casos referentes a deficiencias en la formación académica o programas de formación de Guías de Turismo
            ofrecidos en el País.</li>
        <li>Contravenciones a lo estipulado en el Código de Etica Profesional del Guía de Turismo</li>
        <li>Deficiencias en la prestación del servicio turístico por parte de Guías de Turismo.</li>
    </ul>
    <p>y en general todo lo que usted considere que afecte negativamente a la profesión del Guionaje Turístico y su
        ejercicio legal o que vulnere los derechos del Guía de Turismo.</p>
    <div class="text-center">
        <h3>PROCEDIMIENTO</h3>
    </div>
    <p>Ante todo identifique plenamente el hecho que desea denunciar, anotando lugares, fechas, hora, nombres, entidades
        y todos los datos que sirvan para el adecuado conocimiento del caso.</p>
    <p>Reúna las pruebas documentales, fotográficas, físicas o testimoniales (testigos) que considere pertinentes y
        suficientes para sustentar sólidamente su denuncia.</p>
    <p>Escriba en el siguiente formulario su denuncia, junto con sus datos personales, relatando los hechos de forma
        clara y OBJETIVA. En cuanto hayamos leído su denuncia nos comunicaremos con usted.</p>

    <p>Para garantizar su seguridad y tranquilidad, el Consejo Superior de Agremiaciones de Guías de Turismo de
        Colombia, guardara en secreto su identidad y NO REVELARA sus datos personales ni la procedencia o autoria de su
        denuncia; y si la misma es válida y se halla correctamente sustentada, será asumida por nuestro gremio de manera
        institucional.</p>
    <p><strong class="text-danger">ATENCIÓN:</strong> para que su mensaje nos llegue correctamente es necesario que en
        la casilla <strong class="text-danger">CORREO ELECTRÓNICO</strong> señalada con letras rojas se incluya un
        correo electrónico válido y bien escrito. En caso contrario su mensaje será rechazado.</p>
    <div class="text-center text-danger">
        <h4>COLEGA:<br>
            NO TEMA DENUNCIAR LO QUE AFECTA A NUESTRA PROFESIÓN Y A USTED MISMO. ESTE CONSEJO DE AGREMIACIONES ESTA PARA
            SERVIRLE Y PROTEGERLO.</h4>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <form id="Denuncia" enctype="multipart/form-data" action="">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-sm-12 mb-2">
                        <label>Nombre de Denunciante</label>
                        <input type="text" name="" placeholder="Nombre Completo" class="form-control">
                    </div>
                    <div class="col-sm-4 mb-2">
                        <label>Tipo Documento</label>
                        <select name="" class="form-control">
                            <option value="" selected disabled>Seleccione</option>
                            <option value="Registro civil">Registro civil(RC)</option>
                            <option value="Targeta de identidad">Tarjeta de identidad(TI)</option>
                            <option value="Cédula de ciudadania">Cédula de ciudadanía(CC)</option>
                            <option value="Targeta de extrangeria">Tarjeta de extranjería(TE)</option>
                            <option value="Cédula de extrangeria">Cédula de extranjería(CE)</option>
                            <option value="Número de identificación tributaria">Número de identificación
                                tributaria(NIT)</option>
                            <option value="Pasaporte">Pasaporte(PP)</option>
                            <option value="Documento de identificación de extrangero">Documento de
                                identificación extranjero(DIE)</option>
                        </select>
                    </div>
                    <div class="col-sm-4 mb-2">
                        <label>Numero Documento</label>
                        <input type="number" name="" min="0" class="form-control">
                    </div>
                    <div class="col-sm-4 mb-2">
                        <label>N° Tarjeta Profesional</label>
                        <input type="number" name="" min="0" placeholder="solo numero sin digito de verificacion"
                            class="form-control">
                    </div>
                    <div class="col-sm-6 mb-2">
                        <label>Correo Eléctronico</label>
                        <input type="email" name="" class="form-control">
                    </div>
                    <div class="col-sm-6 mb-2">
                        <label>Teléfono o Celular</label>
                        <input type="number" name="" min="0" class="form-control">
                    </div>
                    <div class="col-sm-6 mb-2">
                        <label>Titulo de su Queja o Denuncia</label>
                        <input type="text" name="" class="form-control">
                    </div>
                    <div class="col-sm-12 mb-2">
                        <label>Descripcion Queja o Denuncia</label>
                        <textarea name="" class="form-control" rows="5"></textarea>
                    </div>
                    <div class="col-sm-4 mb-5">
                        <label>¿Posee pruebas de los hechos que acaba de Escribir?</label>
                        <select id="Prueba" name="Prueba" class="form-control">
                            <option value="" selected disabled>Seleccione</option>
                            <option value="SI">SI</option>
                            <option value="NO">NO</option>
                        </select>
                    </div>
                    <div id="Mostrar" class="col-sm-8"></div>
                </div>
                <div class="col-sm-6 mb-3">
                    <button type="button" class="btn btn-primary" id="submit">Enviar Queja o Denuncia</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection