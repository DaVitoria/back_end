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
                    Novo Usuário
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
                                <table class="table table-bordered data-table" id="clients">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nome do Usuário</th>
                                            <th>Email</th>
                                            {{-- <th>Senha</th> --}}
                                            <th>Nível</th>
                                            <th>Ação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $rs)
                                        <tr>
                                            <td>{{ $rs->id }}</td>
                                            <td>{{ $rs->name }}</td>
                                            <td>{{ $rs->email }}</td>
                                            {{-- <td>{{ $rs->password }}</td> --}}
                                            <td>{{ $rs->role }}</td> 
                                            <td>

                                                <button style="padding: 5px 5px;"><a class="btn btn-outline-info" href="{{ route('users.edit', $rs->id) }}">Editar</a></button>
                                                <button style="padding: 5px 5px;"><a class="btn btn-outline-info" href="{{ route('users.destroy', $rs->id) }}">Apagar</a></button>
                                                
                                               
                                            </td>   
                                        </tr>
                                        @endforeach
                                    </tbody>
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
                    <h5 class="modal-title" id="meuModalLabel">Cadastro de Novo Usuário</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('users.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="control-group">
                            <label class="control-label">Nome Completo</label>
                            <div class="controls">
                                <input id="name" type="text" name="name" />
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label">Email</label>
                            <div class="controls">
                                <input id="email" type="email" name="email" />
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Senha</label>
                            <div class="controls">
                                <input id="password" type="password" name="password" />
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Nível</label>
                            <div class="controls">
                                <input id="role" type="role" name="role" />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <button type="button" class="btn btn-custon-four btn-danger" data-dismiss="modal">Fechar</button>
                        <!-- Outros botões ou ações -->
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
@endsection
