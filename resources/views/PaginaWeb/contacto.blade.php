@extends('Layout.plantilla')
@section('contenido')
<div class="contactenos mb-5">
    <div class="text-center center-block" style="color: white;">
        <h1>CONTÁCTENOS</h1>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <h2 class="text-center mb-4" style="color: blue;"><strong>¿QUIERES ENVIARNOS UN MENSAJE?</strong></h2>
            <form method="POST" action="/Enviar/Contacto">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-sm-12 mb-2">
                        <label>Nombre <span style="color:red">*</span></label>
                        <input type="text" name="Nombre" placeholder="Nombre Completo" class="form-control" required>
                    </div>
                    <div class="col-sm-6 mb-2">
                        <label>Correo <span style="color:red">*</span></label>
                        <input type="email" name="Correo" placeholder="Correo Electrónico" class="form-control"
                            required>
                    </div>
                    <div class="col-sm-6 mb-2">
                        <label>Teléfono <span style="color:red">*</span></label>
                        <input type="number" name="Telefono" min="0" placeholder="Teléfono" class="form-control"
                            required>
                    </div>
                    <div class="col-sm-12 mb-2">
                        <label>Asunto <span style="color:red">*</span></label>
                        <input type="text" name="Asunto" placeholder="Asunto" class="form-control" required>
                    </div>
                    <div class="col-sm-12 mb-2">
                        <label>Mensaje <span style="color:red">*</span></label>
                        <textarea name="Mensaje" class="form-control" placeholder="Escriba su Mensaje" cols="30"
                            rows="5" required></textarea>
                    </div>
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-primary mb-5">Enviar Mensaje</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection