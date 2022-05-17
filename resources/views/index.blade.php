<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <title>Bem vindo ao Blog</title>
    </head>
    <body>
        <div class="container">
            <div class="d-flex align-content-between">
                <h1>Lista de Postagens</h1>

                <a href="{{ route('postagens.create') }}" class="btn btn-primary ms-auto me-0">Cadastrar Postagem</a>
            </div>

            <ol>
                @foreach ($postagens as $postagem)
                    <li>
                        {{ $postagem->titulo }}

                        <a href="{{ route('postagens.show', $postagem->id) }}" class='btn btn-link'>Ver</a>
                    </li>
                @endforeach
            </ol>
        </div>
    </body>
</html>
