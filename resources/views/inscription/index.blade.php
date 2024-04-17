@extends('main')
@section('content')

<!doctype html>
<html class="no-js" lang="en">
<head>
   
</head>
<body>
    <!-- Static Table Start -->
    <div class="static-table-area">
        <div class="main-sparkline13-hd">
            <div class="content">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#meuModal">
                    Fazer a Inscrição
                </button>
            </div>
              <br><br>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="sparkline8-list">
                        <div class="sparkline8-hd">
                            <div class="main-sparkline8-hd">
                                <h1>Inscrição</h1>
                            </div>
                        </div>
                        <div class="sparkline8-graph">
                            <div class="static-table-list">
                                <table class="table">
                                    
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Usuario</th>
                                            <th>Curso</th>
                                            <th>Data de inscrição</th>
                                        </tr>
                                    </thead>
                                    @if($inscriptions->count() > 0)
                                        @foreach($inscriptions as $rs)
                                            @if(Auth::user()->id === $rs->user->id)
                                                <tbody>
                                                    <td>{{ $rs->id }}</td>
                                                    <td>{{ $rs->user->name }}</td>
                                                    <td>{{ $rs->course->name }}</td>
                                                    <td>{{ $rs->date_registration }}</td>  
                                                </tbody>
                                            @endif
                                        @endforeach
                                    @endif
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="sparkline9-list mt-b-30 res-mg-t-30 analysis-progrebar-ctn">
                        <div class="sparkline9-hd">
                            <div class="main-sparkline9-hd">
                                <h1>Estado da Inscrição</h1>
                            </div>
                        </div>
                        <div class="sparkline9-graph">
                            <div class="static-table-list">
                                <table class="table sparkle-table">
                                    <thead>
                                        <tr>
                                            <th>Válido até</th>
                                            <th>Estado</th>
                                            <th>Ação</th>
                                        </tr>
                                    </thead>
                                    @foreach($inscriptions as $inscription)<!-- Ajuste aqui para acessar as inscrições do usuário -->
                                        <tbody>
                                            <td>{{ $inscription->validated_until }}</td>
                                            <td>{{ $inscription->status }}</td>
                                            <td>
                                                <button><a class="btn btn-custon-four btn-danger" href="{{ route('inscription.destroy', $inscription->id) }}"> Apagar </a></button>
                                            </td>
                                        </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
<div class="modal fade" id="meuModal" tabindex="-1" role="dialog" aria-labelledby="meuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="meuModalLabel">Nova Inscrição</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('inscription.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="user_id">Nome do Usuário</label>
                        <select name="user_id" id="user_id" class="form-control" readonly>
                            <option value="">Selecione</option>
                            @foreach ($user as $user)
                                @if (Auth::user()->id === $user->id)
                                    <option value="{{ $user->id }}" selected>{{ $user->name }}</option>
                                @else
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <input type="hidden" name="usuario" value="{{ auth()->user()->id }}">
                    
                    <div class="form-group">
                        <label for="curso">Curso</label>
                        <select class="form-control" id="curso" name="curso" required>
                            <option value="">Selecione</option>
                            @foreach($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="data_registro">Data de Registro</label>
                        <input type="date" class="form-control" id="data_registro" name="data_registro" onchange="calcularDataValida()" required>
                    </div>
                    <div class="form-group">
                        <label for="valido_ate">Válido Até</label>
                        <input type="date" class="form-control" id="valido_ate" name="valido_ate" required>
                    </div>

                    <div class="modal-footer justify-content-between">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <button type="button" class="btn btn-custon-four btn-danger" data-dismiss="modal">Fechar</button>
                        <!-- Outros botões ou ações -->
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


</body>

<script>
    // Desabilita a interação com o campo de seleção
    document.getElementById('user_id').addEventListener('mousedown', function(event) {
        event.preventDefault();
    });
</script>

{{-- Para Preencher a Data de Validade Automaticamente --}}
<script>
    function calcularDataValida() {
        var dataRegistro = new Date(document.getElementById("data_registro").value);
        var umAnoDepois = new Date(dataRegistro.getFullYear() + 1, dataRegistro.getMonth(), dataRegistro.getDate());
        var validoAteInput = document.getElementById("valido_ate");
        var ano = umAnoDepois.getFullYear();
        var mes = String(umAnoDepois.getMonth() + 1).padStart(2, '0');
        var dia = String(umAnoDepois.getDate()).padStart(2, '0');
        var dataValida = ano + '-' + mes + '-' + dia;
        validoAteInput.value = dataValida;
    }
</script>
</html>
@endsection

<!-- Footer -->
<!-- Coloque aqui o seu código de footer -->
</html>
