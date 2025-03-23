@extends("layouts.main")

@section("title", "Account")
@section("content")

<div class="container rounded bg-white mt-5 mb-5">

    <div class="row">
        <!-- Actualmente -->
        <div class="col-md-6 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <h4 class="text-right">Actualmente</h4>
                <div class="border border-2 border border-primary rounded-1 p-4 ">
                    <div>
                        <img class="rounded-circle mt-3" width="150px"
                            src="https://st.depositphotos.com/1734074/4224/v/600/depositphotos_42240019-stock-illustration-vector-black-man-in-business.jpg">
                    </div>
                    <div class="d-flex flex-column text-center">
                        <span class="font-weight-bold">Nombre:{{ $DatosUsuario->name }}</span>
                        <span class="font-weight-bold">Apellido:{{ $DatosUsuario->surname }}</span>
                        <span class="font-weight-bold">Email:{{ $DatosUsuario->email }}</span>
                    </div>
                </div>
                <form action="{{ route('user.destroy', ['id' => $DatosUsuario->id]) }}" method="POST">
                    @csrf
                    <div class="mt-5 text-center">
                        <button class="btn btn-primary profile-button" type="submit">Borrar Cuenta</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Ajuste-->
        <div class="col-md-6 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Configuración de perfil</h4>
                </div>
                <form class="needs-validation" novalidate=""
                    action="{{ route('user.update', ['id' => $DatosUsuario->id]) }}" method="POST" autocomplete="off">
                    @csrf
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label class="form-label" for="nombre_modificar">Nombre</label>
                            <input type="text" class="form-control" placeholder="Nuevo nombre" name="name" id="name"
                                value="{{ old("name", $DatosUsuario->name) }}">
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="valid-feedback">
                            </div>
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="apellido_modificar">Apellido</label>
                            <input type="text" class="form-control" placeholder="Nuevo Apellido" name="surname"
                                id="surname" value="{{ old("surname", $DatosUsuario->surname) }}">
                            @error('surname')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="valid-feedback">
                            </div>
                            <div class="invalid-feedback">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <label class="form-label" for="email_modificar">Email</label>
                            <input type="email" class="form-control" placeholder="Nuevo Email" name="email" id="email"
                                value="{{ old("email", $DatosUsuario->email) }}">
                            @error('email')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="valid-feedback">
                            </div>
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="col-md-12 pt-3">
                            <label class="form-label" for="ccontraseña_modificar">Contraseña</label>
                            <input type="password" class="form-control" placeholder="Nueva Contraseña" name="password"
                                id="password" value="{{ old("password") }}">
                            @error('password')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="valid-feedback">
                            </div>
                            <div class="invalid-feedback">
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <button class="btn btn-primary profile-button" type="submit">Guardar cambios</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection