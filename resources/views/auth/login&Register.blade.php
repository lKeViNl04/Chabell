<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{asset("css/Style.css")}}">
    <title>@yield("title","laravel")</title>
</head>

<body class="body-lr">
    <div id="stars"></div>
    <div id="stars2"></div>
    <div id="stars3"></div>
    <div class="section">
        <div class="container">
            <div class="row full-height justify-content-center">
                @if(session()->has('feedback.message'))
                <div class="alert alert-info">
                    {!! session()->get('feedback.message') !!}
                </div>
                @endif
                @if ($errors->any())
                <div class="alert alert-danger">
                    hay errores en los datos del formularios
                </div>
                @endif
                <div class="col-12 text-center align-self-center py-5">
                    <div class="section pb-5 pt-5 pt-sm-2 text-center">
                        <h6 class="mb-0 pb-3"><span>Iniciar Sesion</span><span>Registarse</span></h6>
                        <input class="checkbox none_checkbox_lr" type="checkbox" id="reg-log" name="reg-log" />
                        <label for="reg-log"></label>
                        <div class="card-3d-wrap mx-auto">
                            <div class="card-3d-wrapper">
                                <div class="card-front">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-4 pb-3">Iniciar Sesion</h4>
                                            <form class="needs-validation" novalidate=""
                                                action={{ route("auth.authenticate.login") }} method="POST"
                                                autocomplete="off">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="email" class="form-style form-control " name="email"
                                                        id="email" placeholder="Email" required>
                                                    <div class="valid-feedback">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                    </div>
                                                    <i class="input-icon uil uil-at"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" class="form-style  form-control"
                                                        name="password" id="password" placeholder="Contraseña" required>
                                                    <div class="valid-feedback">

                                                    </div>
                                                    <div class="invalid-feedback">

                                                    </div>
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>
                                                <input type="submit" class="btn mt-4" value="Iniciar">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-back">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mt-3 mb-1 pb-3">Registrase</h4>
                                            <form class="needs-validation" novalidate=""
                                                action={{ route("user.store") }} method="POST" autocomplete="off">
                                                @csrf
                                                <div class="form-group ">
                                                    <input type="text" class="form-style form-control " name="name"
                                                        id="name" placeholder="Nombre" required>
                                                    @error('name')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                    <div class="valid-feedback"></div>
                                                    <div class="invalid-feedback"></div>
                                                    <i class="input-icon uil uil-user"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="text" class="form-style form-control" name="surname"
                                                        id="surname" placeholder="Apellido" required>
                                                    @error('surname')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                    <div class="valid-feedback"></div>
                                                    <div class="invalid-feedback"></div>
                                                    <i class="input-icon uil uil-user"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="email" class="form-style form-control" name="email"
                                                        id="email" placeholder="Email" required>
                                                    @error('email')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                    <div class="valid-feedback"></div>
                                                    <div class="invalid-feedback"></div>
                                                    <i class="input-icon uil uil-at"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" class="form-style form-control"
                                                        name="password" id="password" placeholder="Contraseña" required>
                                                    @error('password')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                    <div class="valid-feedback"></div>
                                                    <div class="invalid-feedback"></div>
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>
                                                <input type="submit" class="btn mt-4" value="Registrarse">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/validation.js') }}"></script>
</body>

</html>