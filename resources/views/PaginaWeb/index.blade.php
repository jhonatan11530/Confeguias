@extends('Layout.plantilla')
@section('contenido')

<div id="carouselExampleControls" class="carousel slide mb-5" data-ride="carousel">
    <div class="carousel-inner" style="height: 40rem;">
        <div class="carousel-item active">
            <img src="{{ asset('img/Presentacion.svg') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/Presentacion.svg') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/Presentacion.svg') }}" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="container-fluid">
    <div class="row mb-5">
        <div class="col-6"><img src="{{ asset('img/Presentacion.svg') }}" width="100%" alt=""></div>
        <div class="col-6"><img src="{{ asset('img/Presentacion.svg') }}" width="100%" alt=""></div>
    </div>
</div>
<a href="https://wa.me/573114360830?text=hola" class="whatsapp" target="_blank"><i class="fa fa-whatsapp whatsapp-icon"></i></a>
<style>
    .whatsapp {
  position:fixed;
  width:60px;
  height:60px;
  bottom:40px;
  right:40px;
  background-color:#25d366;
  color:#FFF;
  border-radius:50px;
  text-align:center;
  font-size:30px;
  z-index:100;
}

.whatsapp-icon {
  margin-top:13px;
}
</style>
<div class="container">
    <a href="/beneficios" style="text-decoration: none;">
        <div class="beneficio mb-5">
            <div class="text-center center-block" style="color: white;">
                <h1>Beneficios de ser agremiado</h1>
            </div>
        </div>
    </a>
</div>

@endsection