<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
    <h1 class="mt-2">Pesquisa de produtos</h1>
    @if(!empty($mensagem))
        <div class="alert alert-success mt-2">{{ $mensagem }}</div>
    @endif

    @if(count($produtos) == 0)
    <div class="alert alert-danger mt-2">Nenhum produto encontrado com essa descrição!</div>
@else
    <table class="table mt-2 text-center">
        <tr>
            <th>Id</th>
            <th class="text-left">Descrição</th>
            <th>Quantidade</th>
            <th>Valor</th>
            <th>Data de vencimento</th>
            <th>Filosofia</th>
            <th></th>
        </tr>
        @foreach ($produtos as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td class="text-left">{{ $p->descricao }}</td>
                <td>{{ $p ->Quantidade }}</td>
                <td> {{ $p->valor }}</td>
                <td>{{ $p->data_vencimento }}</td>
                <td>{{ $p->filosfia }}</td>
                <td><a href="/produtos/excluir/{ { $p->id } }"><button class="btn btn-danger">Excluir</button></a></td>
                <td><a href="/produtos/alterar/{ { $p->id } }"><button class="btn btn-warning">Alterar</button></a></td>
            </tr>
        @endforeach
    </table>
@endif

</body>
</html>
