<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Pokemons</title>
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
<body class="container bg-white">
    <button class="btn btn-info mt-5"><a href="{{url('pokemons/create')}}">&#x2190 Voltar</a></button>
    <table class="table table-hover rounded table-bordered border-round-5 table-white mt-4">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Tipo</th>
            <th scope="col">Pontos de poder</th>
            <th scope="col">Ação</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($pokemons as $pokemon)
            <tr>
                <th>{{ $pokemon->id }}</th>
                <td>{{ $pokemon->nome }}</td>
                <td>{{ $pokemon->tipo }}</td>
                <td>{{ $pokemon->pontos_de_poder }} pts</td>
                <td class="d-flex"><button class="btn btn-primary"><a href="{{ url('pokemons/'.$pokemon->id.'/edit') }}">Editar</a></button>
                <form action="{{ url('pokemons/'.$pokemon->id) }}" method="POST" class="">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
                </td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>