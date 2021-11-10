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
    <a class="carousel-control-prev" href="#carouselExampleControls" role="Ver Noticia" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="Ver Noticia" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="container-fluid mb-5">
    <div class="row">
        <div class="col-4">
            <div class="card shadow-lg p-1">
                <a href="#">
                    <img src="{{ asset('img/Presentacion.svg') }}" class="img-fluid" alt="Error Image">
                </a>
            </div>
        </div>
        <div class="col-4">
            <div class="card shadow-lg p-1">
                <a href="#">
                    <img src="{{ asset('img/Presentacion.svg') }}" class="img-fluid" alt="Error Image">
                </a>
            </div>
        </div>
        <div class="col-4">
            <div class="card shadow-lg p-1">
                <a href="#">
                    <img src="{{ asset('img/Presentacion.svg') }}" class="img-fluid" alt="Error Image">
                </a>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <a href="/beneficios" style="text-decoration: none;">
        <div class="beneficio mb-5">
            <div class="text-center center-block" style="color: white;">
                <h1>Beneficios de ser agremiado</h1>
            </div>
        </div>
    </a>
</div>
<div class="container-fluid">
    <p class="h3 text-center">Noticias</p>
    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-2">
                            <img class="card-img-top"
                                src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the
                                    card's content.</p>
                                <div class="text-center">
                                    <a class="btn btn-primary" href="#">Ver Noticia</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 clearfix d-none d-md-block">
                        <div class="card mb-2">
                            <img class="card-img-top"
                                src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the
                                    card's content.</p>
                                <div class="text-center">
                                    <a class="btn btn-primary" href="#">Ver Noticia</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 clearfix d-none d-md-block">
                        <div class="card mb-2">
                            <img class="card-img-top"
                                src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the
                                    card's content.</p>
                                <div class="text-center">
                                    <a class="btn btn-primary" href="#">Ver Noticia</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-2">
                            <img class="card-img-top"
                                src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the
                                    card's content.</p>
                                <div class="text-center">
                                    <a class="btn btn-primary" href="#">Ver Noticia</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 clearfix d-none d-md-block">
                        <div class="card mb-2">
                            <img class="card-img-top"
                                src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the
                                    card's content.</p>
                                <div class="text-center">
                                    <a class="btn btn-primary" href="#">Ver Noticia</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 clearfix d-none d-md-block">
                        <div class="card mb-2">
                            <img class="card-img-top"
                                src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the
                                    card's content.</p>
                                <div class="text-center">
                                    <a class="btn btn-primary" href="#">Ver Noticia</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-2">
                            <img class="card-img-top"
                                src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(53).jpg"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the
                                    card's content.</p>
                                <div class="text-center">
                                    <a class="btn btn-primary" href="#">Ver Noticia</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 clearfix d-none d-md-block">
                        <div class="card mb-2">
                            <img class="card-img-top"
                                src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(45).jpg"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the
                                    card's content.</p>
                                <div class="text-center">
                                    <a class="btn btn-primary" href="#">Ver Noticia</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 clearfix d-none d-md-block">
                        <div class="card mb-2">
                            <img class="card-img-top"
                                src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(51).jpg"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the
                                    card's content.</p>
                                <div class="text-center">
                                    <a class="btn btn-primary" href="#">Ver Noticia</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection