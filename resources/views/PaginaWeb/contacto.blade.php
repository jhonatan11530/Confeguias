@extends('Layout.plantilla')
@section('contenido')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 text-center">
            <div class="card">
                <img src="" alt="Error Image">
                <h6>Telefono</h6>
                <span>### ### ####</span>
            </div>
        </div>
        <div class="col-sm-3 text-center">
            <div class="card">
                <img src="" alt="Error Image">
                <h6>Telefono</h6>
                <span>### ### ####</span>
            </div>
        </div>
        <div class="col-sm-3 text-center">
            <div class="card">
                <img src="" alt="Error Image">
                <h6>Telefono</h6>
                <span>### ### ####</span>
            </div>
        </div>
        <div class="col-sm-3 mb-5 text-center">
            <div class="card">
                <img src="" alt="Error Image">
                <h6>Telefono</h6>
                <span>### ### ####</span>
            </div>
        </div>
        <div class="col-sm-12">
            <h2 class="text-center mb-4" style="color: blue;"><strong>¿QUIERES ENVIARNOS UN MENSAJE?</strong></h2>
            <form action="" action="">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-sm-12 mb-2">
                        <label>Nombre</label>
                        <input type="text" name="" placeholder="Nombre Completo" class="form-control">
                    </div>
                    <div class="col-sm-6 mb-2">
                        <label>Correo</label>
                        <input type="email" name="" placeholder="Correo Electrónico" class="form-control">
                    </div>
                    <div class="col-sm-6 mb-2">
                        <label>Teléfono</label>
                        <input type="number" name="" min="0" placeholder="Teléfono" class="form-control">
                    </div>
                    <div class="col-sm-12 mb-2">
                        <label>Asunto</label>
                        <input type="text" name="" placeholder="Asunto" class="form-control">
                    </div>
                    <div class="col-sm-12 mb-2">
                        <label>Mensaje</label>
                        <textarea name="" class="form-control" placeholder="Escriba su Mensaje" cols="30"
                            rows="5"></textarea>
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