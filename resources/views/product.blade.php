@extends("layouts.main")

@section("title", "Product")

@section("content")

<!--Carrusel -->
<div class="carrusel d-flex">
    <?php foreach ($Carruseles as $Carrusel) { ?>
    <div class="imagenes-transformables" style="background-image: url('{{$Carrusel->getImage()}} ')">
        <div class="fade opacity-100">
            <a href="{{$Carrusel->link}}" target="_blank" class="border-text">
                <div class="d-grid">
                    <h1 class="ps-5">{{$Carrusel->nombre}}</h1>
                    <p class="p-5 d-none d-md-block d-lg-none">{{$Carrusel->descripcion}}</p>
                </div>
            </a>
        </div>
    </div>
    <?php } ?>
</div>
<!--Filtro en tamaño pequeño-->
<section class=" p-2 js-category-controls category-controls visible-when-content-ready d-md-none">
    <div class=" border-top border-bottom border-dark p-2 container category-controls-container">
        <div class=" category-controls-row row">
            <div class="col col-md-auto category-control-item border-right border-end border-dark">
                <a href="#"
                    class=" text-dark text-decoration-none js-modal-open d-block font-small font-md-body px-md-0 py-md-2"
                    data-toggle="#sort-by">
                    <div class="d-flex justify-content-center align-items-center">
                        Ordenar
                    </div>
                </a>
            </div>
            <div class="visible-when-content-ready col col-md-auto pl-md-2 category-control-item">
                <a href="#"
                    class=" text-dark text-decoration-none js-modal-open d-block font-small font-md-body px-md-0 py-md-2"
                    data-toggle="#nav-filters" data-component="filter-button">
                    <div class="d-flex justify-content-center align-items-center">
                        Filtrar
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<div class="d-flex m-5">
    <!--Filtro y producto -->
    <!--Filtro decorativo-tamaño grande -->
    <aside class="col-md-auto d-none d-md-block visible-when-content-ready p-3" style="width: 280px;">
        <form action="{{ route('producto') }}" method="GET">
            <div class="mb-4 pb-2">
                <h5 class="font-weight-bold mb-3">Ordenar por</h5>
                <div class="form-group d-inline-block mb-0 " style="width: 100%;">
                    <select name="ORDEN" id="ORDEN" class="form-select js-sort-by form-select-small "
                        aria-label="Ordenar por:">
                        <option value=" price ASC">Precio: Menor a Mayor</option>
                        <option value=" price DESC">Precio: Mayor a Menor</option>
                        <option value=" name ASC">A - Z</option>
                        <option value=" name DESC">Z - A</option>
                        <option value=" id_product ASC" selected="">Seleciona un orden</option>
                    </select>
                </div>
            </div>
            <div id="filters" class="filters-properties-container visible-when-content-ready" data-store="filters-nav">
                <div class="js-filter-container  " data-store="filters-group" data-component="list.filter-color"
                    data-component-value="Color">
                    <h5 class="h5 font-big font-weight-bold mb-4">
                        Color
                    </h5>
                    <div class=" mb-4 pb-2 list-unstyled d-grid ">
                        <?php
                        $colores = ['Azul' => '#0000DC', 'Beige' => 'rgb(245, 245, 220)', 'Fucsia' => 'rgb(255, 0, 255)', 'Negro' => 'rgb(0, 0, 0)', 'Rojo' => 'rgb(220, 0, 0)', 'Rosa' => 'rgb(233, 152, 255)'];
                        foreach ($colores as $color) { ?>
                        <label class="js-filter-checkbox js-apply-filter-private  checkbox-container"
                            data-filter-name="Color" data-filter-value="<?= array_search($color, $colores); ?>"
                            data-component="filter.option"
                            data-component-value="<?= array_search($color, $colores); ?>">
                            <div class="d-flex custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input " autocomplete="off">
                                <label class="custom-control-label ps-3" for="customCheck1">
                                    <span class=" checkbox-text">
                                        <?= array_search($color, $colores); ?>
                                    </span>
                                    <span class="checkbox-color" style="background-color: <?= $color; ?>;"></span>
                                </label>
                            </div>
                        </label>
                        <?php } ?>
                    </div>
                    <div class="js-filter-container  " data-store="filters-group" data-component="list.filter-size"
                        data-component-value="Talle">
                        <h5 class="h5 font-big font-weight-bold mb-4">
                            Talle
                        </h5>
                        <div class=" mb-4 pb-2 list-unstyled d-grid">
                            <?php
$talles = ['S', 'M', 'L', 'XL'];
foreach ($talles as $talle) { ?>
                            <label class="js-filter-checkbox js-apply-filter-private  checkbox-container"
                                data-filter-name="Talle" data-filter-value="<?= $talle ?>"
                                data-component="filter.option" data-component-value="<?= $talle ?>">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" autocomplete="off">
                                    <label class="custom-control-label ps-3" for="customCheck2">
                                        <span class=" checkbox-text">
                                            <?= $talle ?>
                                        </span>
                                    </label>
                                </div>
                            </label>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="js-price-filter-container price-filter-container mb-4 pb-2 d-print-inline-block"
                        data-store="filters-group" data-component="list.filter-price">
                        <div class="h5 font-weight-bold mb-4 font-big">Precio</div>
                        <div class="form-group d-flex">
                            <span class="js-filter-input-price-container filter-input-price-container">
                                <label class="form-label">Desde</label>
                                <input type="number" name="min_price" step="1" min="0" pattern="\d*"
                                    oninput="validity.valid||(value='');"
                                    class="js-price-filter-input form-control filter-input-price"
                                    data-component="list.filter-price.min" value="" placeholder="10.000">
                                <a class="js-price-filter-empty input-clear-content" style="display:none">
                                </a>
                            </span>

                            <span class="js-filter-input-price-container filter-input-price-container">
                                <label class="form-label">Hasta</label>
                                <input type="number" name="max_price" step="1" min="0" pattern="\d*"
                                    oninput="validity.valid||(value='');"
                                    class="js-price-filter-input form-control filter-input-price"
                                    data-component="list.filter-price.max" value="" placeholder="30.000">
                                <a class="js-price-filter-empty input-clear-content" style="display:none">
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="js-price-filter-btn btn btn-default btn-small ">Aplicar</button>
        </form>

    </aside>


    <main>
        <!-- CARD -->
        <div class="container d-flex justify-content-around flex-wrap ">
            <?php foreach ($Articulos as $Articulo) { ?>
            <div class="pb-5">
                <article class="card">
                    <img class="card__background" src="{{$Articulo->getImage()}}" alt="IMG" width="1920"
                        height="2193" />
                    <div class="card__content | flow w-100">
                        <div class="card__content--container | flow ">
                            <h2 class="card__title h2_card">{{$Articulo->name}}</h2>
                            <p class="card__description  p_card">
                                {{$Articulo->getDescripcion_parcial()}}
                            </p>
                        </div>
                        <form action="{{ route('cart.store', ['id' => $Articulo->id_product]) }}" method="POST">
                            @csrf
                            <button class="card__button" type="submit">${{$Articulo->price }} <i class="bi bi-cart"></i></button>
                        </form>
                    </div>
                </article>
            </div>
            <?php } ?>
        </div>
        <!-- Paginado -->
        <nav aria-label="...">
            <div class="d-flex justify-content-center align-items-end">
                <div>
                    <ul class="pagination pagination-md">
                        <?php for ($i = 1; $i <= $maxpaginado_producto; $i++) { ?>
                        <li class="page-item ">
                            <a class="page-link" href="product?page=<?= $i ?>" tabproducto="-1"><?= $i ?></a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
    </main>
</div>

@endsection