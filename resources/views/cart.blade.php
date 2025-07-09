@extends("layouts.main")

@section("title", "Cart")
@section("content")

<div class="container py-5 ">
    <div class="row py-5">
        <!-- Tabla del carrito -->
        <div class="col-12">
            <h2 class="mb-4">Carrito</h2>
            @if (empty($Carts) || count($Carts) == 0)
            <div class="alert alert-info text-center ">
                <p>Tu carrito está vacío. <a href="{{ route('producto') }}">¡Explora nuestros productos!</a></p>
            </div>
            @else
            <form action="{{ route('cart.update') }}" method="POST">
            @csrf
            <table class="table table-bordered align-middle w-100">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($Carts as $id => $Cart) { ?>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('storage/' . $Cart["img"]) }}" alt="img" class="img-thumbnail me-3"
                                    style="width: 80px; height: auto;">
                                {{$Cart["name"]}}
                            </div>
                        </td>
                        <td>{{$Cart["price"]}}</td>
                        <td>
                            <div class="input-group">
                                <button class="btn btn-outline-secondary" type="button"
                                    onclick="updateAmount({{ $id }},-1)">-</button>
                                <input name="amount[{{ $id }}]" id="amountInput-{{ $id }}" type="number"
                                    class="form-control text-center" value="{{$Cart["amount"]}}" min="0">
                                <button class="btn btn-outline-secondary" type="button"
                                    onclick="updateAmount({{ $id }},1)">+</button>
                            </div>
                        </td>
                        <td>{{$Cart["subtotal"]}}</td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div class="d-flex justify-content-end">
            <button type="submit" class=" btn btn-primary ">Actualizar carrito</button>
            </div>
            </form>
            <div class="d-flex justify-content-between">
                <form action="{{ route('cart.clear') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary "
                        onclick="return confirm('¿Estas seguro de Vaciar Todo el carrito?')">
                        Vaciar carrito
                    </button>
                </form>
                <button class=" btn btn-primary ">Comprar</button>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection