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
            <h1>Nova Postagem</h1>

            <form action="{{ route('postagens.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label" for="">Titulo</label>
                    <input type="text" name="titulo" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="">Descrição</label>

                    <textarea name="descricao" class="form-control" id="" cols="30" rows="10"></textarea>
                </div>

                <input type="submit" class="btn btn-success" value="Enviar">
            </form>

        </div>
    </body>
</html>
