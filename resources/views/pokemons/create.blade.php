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
    <table>
        <div class="w-50 container p-5 rounded border mt-5">
            <form action="{{ url('pokemons') }}" method="POST">
                @csrf
                <div >
                <h2 class="text-center">Cadastre seu pokemon</h2>
                <input type="text" class="form-control" name="nome" placeholder="Nome" required>
                <br>
                </div>
                <div>
                <input type="text" class="form-control" name="tipo" placeholder="Tipo" required>
                <br>
                </div>
                <div>
                <input class="form-control" name="pontos_de_poder" placeholder="Pontos de Poder" required>
                <br>
                </div>
                <button class="btn btn-secondary container" type="submit">Adicionar</button>
            </form>
            <br>
        </div>
</table>
</body>
</html>
