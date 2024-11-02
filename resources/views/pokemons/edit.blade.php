<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    * {
        margin: 0;
        padding: auto;
        
    }
    a {
        text-decoration: none;
        color:white;
    }
    table {
        width: 100%;
        height: 100%;
    }
    form {
        margin-left: 10px;
    }

</style>
<body>
    <div class="container">
    <br>
    <button class="btn btn-info ml-5"><a href="{{url('pokemons')}}">&#x2190 Voltar</a></button>
    </div>
    <table>
        <div class="w-50 container p-5 rounded border mt-5 ">
            <form action="{{ url('pokemons', $pokemons->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div >
                <h2 class="text-center">Altere seu pokemon</h2>
                <input type="text" class="form-control" name="nome" value="{{$pokemons-> nome}}" placeholder="Nome" required>
                <br>
                </div>
                <div>
                <input type="text" class="form-control" name="tipo" value="{{$pokemons-> tipo}}" placeholder="Tipo" required>
                <br>
                </div>
                <div>
                <input class="form-control" name="pontos_de_poder" value="{{$pokemons-> pontos_de_poder}}" placeholder="Pontos de Poder" required>
                <br>
                </div>
                <button class="btn btn-primary container" type="submit">Atualizar</button>
            </form>
            <br>
        </div>
</table>
</body>
</html>
