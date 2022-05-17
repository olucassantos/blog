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
            <h1 class="display-2">{{ $postagem->titulo }}</h1>

            <p class="lead rounded bg-dark text-white p-2">
                {{ $postagem->descricao }}
            </p>

            <a href="{{ route('postagens.index') }}">Todas as postagens</a>
        </div>
    </body>
</html>
