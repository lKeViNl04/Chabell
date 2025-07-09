@extends("layouts.main")

@section("title", "Home")

@section("content")

<div class="container-fluid 1">
    <div class="row p-0 ">
        <div class="col p-0">
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <?php $Active = true; foreach ($Carruseles as $Carrusel) { ?>
                    <div class="carousel-item <?php    if ($Active) { echo "active";$Active = false;}?>">
                        <img src="{{$Carrusel->getImage()}}" class="d-block w-100" height="650px" alt="...">
                        <div class="carousel-caption text-start">
                            <h1>{{ $Carrusel->nombre }}</h1>
                            <p class="fs-4">{{ $Carrusel->descripcion}}</p>
                            <a class="btn btn-lg btn-primary" href="Producto">Ver mas</a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>
        </div>
    </div>
    <div class="row bg-black p-5 d-flex flex-wrap justify-content-center text-light">
        <div class="col-lg-4 col-sm">
            <i class="bi bi-box-fill fs-2"></i>
            <p class="fs-5">Entregas 24hs en CABA y AMBA</p>
        </div>
        <div class="col-lg-4 col-sm">
            <i class="bi bi-credit-card-2-back-fill fs-2"></i>
            <p class="fs-5">Tres cuotas pagando con Tarjeta de credito</p>
        </div>
        <div class="col-lg-4 col-sm">
            <i class="bi bi-currency-dollar fs-2"></i>
            <p class="fs-5">Suma 10% mas por transferencia</p>
        </div>
    </div>
</div>

<div class="container 2">
    <div class="row pt-5 d-flex justify-content-center">
        <div class=" d-flex justify-content-center">
            <h1>Destacado de la Semana</h1>
        </div>
        <div class="row row-cols-1 row-cols-lg-3 d-flex justify-content-center g-4 pb-5">
            <?php foreach ($Articulos as $Articulo) { ?>
            <div class=" d-flex justify-content-center">
                <div class="card text-white rounded-5 shadow-lg w-100" style="place-items: initial; max-width: 20rem;">
                    <div>
                        <img class="w-100 rounded-5 card-cover" src="{{ $Articulo->getImage()}}" alt="IMG"
                            height="350" />
                        <div
                            class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-end p-3 text-shadow-1">
                            <h2 class="display-6 lh-1 fw-bold">{{ $Articulo->nombre }}</h2>
                            <ul class="d-flex list-unstyled mt-auto">
                                <li class="d-flex align-items-center">
                                    <i class="bi bi-calendar3"></i>
                                    <small>1d</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <div class="row featurette p-5 border-top">
        <div class="col-md-7">
            <h2 class="featurette-heading">Sobre Nosotros</h2>
            <p class="lead">Descubre quiénes estamos detrás de tus pijamas favoritos y lo que nos impulsa a crear
                productos únicos y especiales. Queremos compartir contigo nuestra pasión y compromiso, así que te
                invitamos a conocer más sobre nuestra historia y visión.</p>
            <a class="btn btn-lg btn-primary " href="aboutus">Saber mas</a>
        </div>
        <div class="col-md-5">
            <img class="rounded-circle w-100" src="{{asset("img/nosotros2.webp") }}" alt="img" height="400">
        </div>
    </div>
</div>

@endsection