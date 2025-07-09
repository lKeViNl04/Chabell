<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img width="150" height="60" src="{{ asset("img\LOGOCHABELL.png")}}"
                alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarChabell"
            aria-controls="navbarChabell" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarChabell">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <x-nav-Link routs="inicio">Inicio</x-nav-Link>
                </li>
                <li class="nav-item">
                    <x-nav-Link routs="producto">Producto</x-nav-Link>
                </li>
                <li class="nav-item">
                    <x-nav-Link routs="nosotros">Nosotros</x-nav-Link>
                </li>
                <li class="nav-item">
                    <x-nav-Link routs="contacto">Contacto</x-nav-Link>
                </li>
                <li class="nav-item">
                    <x-nav-Link routs="cart"><i class="bi bi-cart"></i></x-nav-Link>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class='bi bi-person'></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        @guest
                        <li class="dropdown-item">
                            <x-nav-link routs="acceso&registro"> Iniciar Sesión </x-nav-link>
                        </li>
                        @else
                        @if(auth()->user()->hasRole(1))
                        <li>
                            <x-nav-link class="dropdown-item" routs="adminArticle"> Administrador </x-nav-link>
                        </li>
                        @endif
                        <li>
                            <x-nav-link class="dropdown-item" routs="cuenta"> Cuenta </x-nav-link>
                        </li>
                        <li class="dropdown-item d-flex justify-content-center">
                            <form action="{{ route('logout.session') }}" method="POST">
                                @csrf
                                <button type="submit" class="nav-link">
                                    <i class='bi bi-door-open'></i></a>
                                </button>
                            </form>
                        </li>
                        @endguest

                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>