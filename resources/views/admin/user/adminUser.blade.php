@extends("layouts.admin")

@section("title", "UserAdmin")
@section("content")

<div class="row w-100">
    <h1 class="py-2">Usuarios ({{$countUser}})</h1>
    <div class="d-flex justify-content-center flex-wrap">
        <?php
        foreach ($User_por_paginado as $User) {
        ?>
        <div class="card mb-3 d-flex justify-content-between "
            style="max-width:100%; height: auto; align-items:normal;">
            <div class="row ">
                <div class="col-md-8">
                    <div class="card-body">
                        <h4 class="card-title">{{$User->name}} {{$User->surname}} </h4>
                        <p class="card-text">Email:{{$User->email}} </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-body">
                        <h4 class="card-title">rol: {{$User->role}} </h4>
                        <form class="d-flex" action="{{ route('User-update-role', ['id' => $User->id]) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <div>
                                <h5 class="font-weight-bold mb-3">Modificador de rol</h5>
                                <div class="form-group d-flex mb-0 " style="width: 100%;">
                                    <select name="role" id="role" class="form-select js-sort-by form-select-small "
                                        aria-label="rols">
                                        <option value="Cliente">Cliente</option>
                                        <option value="Administrador">Administrador</option>
                                    </select>
                                    <button type="submit" class="btn btn-outline-success btn-small">Aplicar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    <nav aria-label="...">
        <div class="d-flex justify-content-center align-items-end">
            <div>
                <ul class="pagination pagination-md">
                    <?php for ($i = 1; $i <= $maxpaginado_User; $i++) { ?>
                    <li class="page-item ">
                        <a class="page-link" href="/admin/User?page={{$i}}" tabproducto="-1">{{$i}}</a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
</div>

@endsection