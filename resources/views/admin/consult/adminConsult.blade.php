@extends("layouts.admin")

@section("title", "ConsultAdmin")
@section("content")

<div class="row w-100">
    <div class="be-comment-block ">
        <h1 class="comments-title text-dark mb-3">Comentarios({{$CountConsultas}})</h1>
        <?php foreach ($Consultas_por_paginado as $Consulta) { ?>
            <div class="be-comment-content bg-light p-3 rounded mb-3">
                <div class="row">
                    <span class="col-6">
                        <h5>Nombre:  {{$Consulta->name}} </h5>
                        <h5>Email: {{$Consulta->email}} </h5>
                    </span>
                    <span class="col-6 text-end text-muted">
                        <p>Tel: {{$Consulta->phone_number}} </p>
                        <p>Fecha: {{$Consulta->created_at ? $Consulta->created_at->format('d/m/Y H:i') : 'Sin fecha'}} </p>
                    </span>
                </div>
                <h5>Mensaje:</h5>
                <p class="be-comment-text bg-white border rounded p-3">{{$Consulta->menssage}}</p>
            </div>
        <?php } ?>

        <nav aria-label="...">
            <div class="d-flex justify-content-center align-items-end">
                <ul class="pagination pagination-md">
                    <?php for ($i = 1; $i <= $maxpaginado_Consultas; $i++) { ?>
                        <li class="page-item">
                            <a class="page-link" href="/admin/Consult?page={{$i}}"
                                tabindex="-1"> {{$i}} </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </nav>
    </div>
</div>

@endsection