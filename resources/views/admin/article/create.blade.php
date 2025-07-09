@extends("layouts.admin")

@section("title", "CreateArticle")
@section("content")

<div class="ps-4 d-flex">
    <a class="btn btn-outline-info btn-lg px-5 text-decoration-none text-dark" type="button"
        href="{{route("adminArticle")}}"><i class="bi bi-arrow-left w-100 fs-4"></i></a>
</div>

<form class="pt-2 d-flex flex-column needs-validation" novalidate="" action="{{ route('Article-store') }}" method="POST"
    autocomplete="off" enctype="multipart/form-data">
    @csrf
    <!-- nombre -->
    <div data-mdb-input-init class="form-outline mb-4 mx-4">
        <label class="form-label" for="name">Nombre</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required />
        <div class="valid-feedback">
            Bien
        </div>
        <div class="invalid-feedback">
            Ingrese un Nombre.
        </div>
        @error('name')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- precio -->
    <div data-mdb-input-init class="form-outline mb-4 mx-4">
        <label class="form-label" for="price">Precio</label>
        <input type="number" name="price" id="price" class="form-control" value="{{ old('price') }}" required />
        <div class="valid-feedback">
            Bien
        </div>
        <div class="invalid-feedback">
            Ingrese un Precio.
        </div>
        @error('price')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <!-- stock -->
    <div data-mdb-input-init class="form-outline mb-4 mx-4">
        <label class="form-label" for="stock_agregar">Stock</label>
        <input type="number" name="stock" id="stock" class="form-control" value="{{ old('stock') }}" required />
        <div class="valid-feedback">
            Bien
        </div>
        <div class="invalid-feedback">
            Ingrese un Stock.
        </div>
        @error('stock')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- descripcion -->
    <div data-mdb-input-init class="form-outline mb-4 mx-4">
        <label class="form-label" for="description">Descripcion</label>
        <textarea class="form-control" name="description" id="description" rows="4" value="{{ old('description') }}"
            required></textarea>
        <div class="valid-feedback">
            Bien
        </div>
        <div class="invalid-feedback">
            Ingrese un descripcion razonable.
        </div>
        @error('description')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <!-- imagen -->
    <div class="input-group mb-4 ">
        <input type="file" class="form-control" name="img" id="img">
        <div class="valid-feedback">
            Bien
        </div>
    </div>

    <!-- button -->
    <button data-mdb-ripple-init type="submit"
        class="p-4 border border-info btn btn-outline-info rounded-4 text-decoration-none text-dark fs-5  mb-4 justify-content-center">Agregar
        Producto</button>
</form>

@endsection