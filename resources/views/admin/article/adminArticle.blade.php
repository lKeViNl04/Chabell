@extends("layouts.admin")

@section("title", "ArticleAdmin")
@section("content")

<div class="row w-100">

    <div class="row">

        <div class="col-md-12 d-flex justify-content-between">
            <h1 class="py-2">Articulos( {{$countproduct }})</h1>
            <div class="m-3">
                <a type="button" class="btn btn-outline-info p-3 text-decoration-none text-dark "
                    href="{{route("Article-create")}}">Agregar Articulo</a>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center flex-wrap">
        <?php
foreach ($Articulos_por_paginado as $Articulos) {
        ?>
        <div class="card mb-3 d-flex justify-content-between" style="max-width:100%; height: auto; align-items:normal;">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-2 ps-0 pe-0">
                            <img src="{{ $Articulos->getImage()}}" class="img-fluid rounded-start" alt="..."
                                style="height: 100%; width: 100%; object-fit: cover;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body h-100">
                                <div class="row ">
                                    <div class="col-md-12">
                                        <h2 class="card-title"><?= $Articulos->name ?></h2>
                                        <p class="card-text fw-lighter">Descripcion:{{$Articulos->description}} </p>
                                    </div>
                                    <div class="pt-2 col-md-12 d-flex justify-content-between">
                                        <p class="card-text fw-semibold">Precio: $ {{$Articulos->price}} </p>
                                        <p class="card-text fw-semibold">Strock: {{$Articulos->stock}} </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center align-items-center px-5 flex-wrap">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="py-2 d-flex flex-column align-items-center ">
                                <a class=" p-3 mb-2 border border-warning btn btn-outline-warning rounded-4 text-decoration-none text-black fs-6"
                                    href="{{ route('Article-edit', ['id' => $Articulos->id_product]) }}">Modificar</a>
                                
                                    <form action="{{ route('Article-destroy', ['id' => $Articulos->id_product]) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="p-3 mt-2 border border-danger btn btn-outline-danger rounded-4 text-decoration-none text-black fs-6"
                                        onclick="return confirm('¿Estas seguro de eliminar este articulo?')">
                                        Eliminar
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                        <a class="page-link" href="/admin/Article?page={{$i }}" tabproducto="-1"><?= $i ?></a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
</div>



@endsection