@extends("layouts.admin")

@section("title", "ArticleAdmin")
@section("content")


<div class="ps-4 d-flex">
    <a class="btn btn-outline-info btn-lg px-5 text-decoration-none text-dark" type="button"
        href="{{route("adminArticle")}}"><i class="bi bi-arrow-left w-100 fs-4"></i></a>
</div>



<article class="w-100 pt-3 pb-3">
    <div class="d-grid justify-content-center ">
        <div class="card">
            <img class="card__background" src="{{$Amodificar->getImage()}}" alt="IMG" width="1920" height="2193" />
            <div class="card__content | flow w-100">
                <div class="card__content--container | flow ">
                    <h2 class="card__title h2_card">{{$Amodificar->name}}</h2>
                    <p class="card__description  p_card">{{$Amodificar->description}}</p>
                </div>
                <button class="card__button">${{$Amodificar->price}}</button>
            </div>
        </div>

        <div class="pt-2 d-flex justify-content-center">
            <form action="{{ route('Article-destroy', ['id' => $Amodificar->id_product]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="p-4  border border-danger btm btn-outline-danger rounded-4 text-decoration-none text-black fs-5"
                    onclick="return confirm('¿Estas seguro de eliminar este articulo?')">
                    Eliminar
                </button>
            </form>
        </div>
    </div>
</article>

<!--formulario a modificar-->

<form class="d-flex flex-column needs-validation" novalidate=""
    action="{{ route('Article-update', ['id' => $Amodificar->id_product]) }}" method="POST" autocomplete="off"
    enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <!-- nombre -->
    <div data-mdb-input-init class="form-outline mb-4 mx-4">
        <label class="form-label" for="name">Nombre</label>
        <input type="text" name="name" id="name" class="form-control" value="{{$Amodificar->name}}" required />
        <div class="valid-feedback">
            Bien
        </div>
        <div class="invalid-feedback">
            Ingrese un Nombre.
        </div>
    </div>

    <!-- precio -->
    <div data-mdb-input-init class="form-outline mb-4 mx-4">
        <label class="form-label" for="price">Precio</label>
        <input type="number" name="price" id="price" class="form-control" value="{{$Amodificar->price}}" required />
        <div class="valid-feedback">
            Bien
        </div>
        <div class="invalid-feedback">
            Ingrese un Precio.
        </div>
    </div>

    <!-- stock -->
    <div data-mdb-input-init class="form-outline mb-4 mx-4">
        <label class="form-label" for="stock">Stock</label>
        <input type="number" name="stock" id="stock" class="form-control" value="{{$Amodificar->stock}}" required />
        <div class="valid-feedback">
            Bien
        </div>
        <div class="invalid-feedback">
            Ingrese un Stock.
        </div>
    </div>

    <!-- descripcion-->
    <div data-mdb-input-init class="form-outline mb-4 mx-4">
        <label class="form-label" for="description">Descripcion</label>
        <textarea class="form-control" name="description" id="description" rows="4"
            required>{{$Amodificar->description}}</textarea>
        <div class="valid-feedback">
            Bien
        </div>
        <div class="invalid-feedback">
            Ingrese un Descripcion.
        </div>
    </div>
    <!-- imagen -->
    <div class="input-group mb-4 ">
        <input type="file" class="form-control" name="img" id="img">
        <div class="valid-feedback">
            opcional
        </div>
    </div>

    <!-- button -->
    <button data-mdb-ripple-init type="submit"
        class="p-4 border border-warning btn btn-outline-warning rounded-4 text-decoration-none text-dark fs-5  mb-4 justify-content-center">Modificar</button>
</form>

@endsection