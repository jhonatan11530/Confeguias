@extends('Layout.plantilla')
@section('contenido')
<div class="asociaciones mb-5">
    <div class="text-center center-block" style="color: white;">
        <h1>ASOCIACIONES REGIONALES DE GUÍAS</h1>
    </div>
</div>
<div id="world-map" style="width: 100%; height: 500px;" class="mb-5"></div>
<div class="container-fluid">
    <div class="text-center mb-5">
        <h2>Junta Directiva Nacional</h2>
    </div>
    <div class="row">
        <div class="col-6">
            <div id="InformacionGuias"></div>
        </div>
    </div>
</div>
@endsection