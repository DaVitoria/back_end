@extends('main')
@section('content')

<body>
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Home - Sistema de Cursos Online</title>
                <style>
                    .info-box {
                        background-color: #f4f4f4;
                        border: 1px solid #ddd;
                        padding: 20px;
                        margin-bottom: 20px;
                        border-radius: 5px;
                    }
                </style>
            </head>
            <body>
                <header>
                    <!-- Aqui você pode colocar o cabeçalho do seu site -->
                    <h1>Bem-vindo ao Sistema de Cursos Online</h1>
                </header>
            
                <main>
                    <!-- Caixa de cursos cadastrados -->
                    <div class="info-box">
                        <h2>Cursos Cadastrados</h2>
                      
                        <!-- Exibir número de cursos cadastrados -->
                        {{-- <p>Total de cursos cadastrados: {{ $num_courses }}</p> --}}
                    </div>
                    
                    <!-- Caixa de usuários inscritos -->
                    <div class="info-box">
                        <h2>Usuários Inscritos</h2>
                        <!-- Exibir número de usuários inscritos -->
                        {{-- <p>Total de usuários inscritos: {{ $num_users }}</p> --}}
                    </div>
                </main>
            </body>
            </html>
        </div>
    </div>
</body>

@endsection
