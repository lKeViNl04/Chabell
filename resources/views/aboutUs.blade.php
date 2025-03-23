@extends("layouts.main")

@section("title", "AboutUS")
@section("content")

<section class="py-3 py-md-5">
    <div class="container">
        <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
            <div class="col-12 col-lg-6 col-xl-5">
                <img class="img-fluid rounded-circle " loading="lazy" src="{{asset("img/Nosotros.jpg") }}"
                    alt="About 1">
            </div>
            <div class="col-12 col-lg-6 col-xl-7">
                <div class="row justify-content-xl-center">
                    <div class="col-12 col-xl-11">
                        <h2 class="mb-3">¿Quiénes Somos?</h2>
                        <p class="lead fs-4 text-secondary mb-3">Somos una tienda en crecimiento, comprometidos con la
                            calidad, el confort y la satisfacción de nuestros clientes en cada pijama.</p>
                        <p class="mb-5">Ofrecemos una exclusiva colección de pijamas kigurumi, diseñados para brindar
                            comodidad y estilo. Nuestros productos destacan por sus materiales suaves y detalles
                            divertidos, perfectos para todas las edades.</p>
                        <div class="row gy-4 gy-md-0 gx-xxl-5X">
                            <div class="col-12 col-md-6">
                                <div class="d-flex">
                                    <div class="me-4 text-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                            fill="currentColor" class="bi bi-handbag-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M8 1a2 2 0 0 0-2 2v2H5V3a3 3 0 1 1 6 0v2h-1V3a2 2 0 0 0-2-2M5 5H3.36a1.5 1.5 0 0 0-1.483 1.277L.85 13.13A2.5 2.5 0 0 0 3.322 16h9.355a2.5 2.5 0 0 0 2.473-2.87l-1.028-6.853A1.5 1.5 0 0 0 12.64 5H11v1.5a.5.5 0 0 1-1 0V5H6v1.5a.5.5 0 0 1-1 0z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h2 class="h4 mb-3">Marca Versátil</h2>
                                        <p class="text-secondary mb-0">Diseñamos pijamas kigurumi cómodos y estilosos
                                            para todas las edades y ocasiones.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="d-flex">
                                    <div class="me-4 text-primary">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                            fill="currentColor" class="bi bi-emoji-laughing-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16M7 6.5c0 .501-.164.396-.415.235C6.42 6.629 6.218 6.5 6 6.5s-.42.13-.585.235C5.164 6.896 5 7 5 6.5 5 5.672 5.448 5 6 5s1 .672 1 1.5m5.331 3a1 1 0 0 1 0 1A5 5 0 0 1 8 13a5 5 0 0 1-4.33-2.5A1 1 0 0 1 4.535 9h6.93a1 1 0 0 1 .866.5m-1.746-2.765C10.42 6.629 10.218 6.5 10 6.5s-.42.13-.585.235C9.164 6.896 9 7 9 6.5c0-.828.448-1.5 1-1.5s1 .672 1 1.5c0 .501-.164.396-.415.235" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h2 class="h4 mb-3">Nuestra Filosofía</h2>
                                        <p class="text-secondary mb-0">Diseñamos con emoción, pensando siempre en tu
                                            satisfacción.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection