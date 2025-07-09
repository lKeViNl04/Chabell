@extends("layouts.main")

@section("title", "Contact")
@section("content")

<h1 class=" d-flex justify-content-center mt-2">CONTACTO</h1>
<section class=" d-flex justify-content-center mb-5 mt-3 ">
    <form action="{{route("Contact-store")}}" method="POST" autocomplete="off"
        class="col-md-6 border  border-secondary rounded p-4 needs-validation" novalidate="">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control border border-light-subtle" name="name" id="name"
                placeholder="Ingrese su nombre" required>
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
        <div class="mb-3">
            <label for="phone_number" class="form-label">Telefono ( Opcional )</label>
            <input type="tel" class="form-control border border-light-subtle" name="phone_number" id="phone_number"
                placeholder="Ingrese su Telefono">
            <div class="valid-feedback">
                opcional
            </div>
            @error('phone_number')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control border border-light-subtle" name="email" id="Email"
                aria-describedby="emailHelp" placeholder="Ingrese su Email" required>
            <div class="valid-feedback">
                Bien
            </div>
            <div class="invalid-feedback">
                Ingrese un Email.
            </div>
            @error('email')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="menssage" class="form-label">Consulta</label>
            <textarea class="form-control border border-light-subtle" name="menssage" id="menssage"
                placeholder="Ingrese su consulta" required></textarea>
            <div class="valid-feedback">
                Bien
            </div>
            <div class="invalid-feedback">
                Ingrese la consulta.
            </div>
            @error('menssage')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-secondary">Enviar</button>
    </form>
</section>
@endsection