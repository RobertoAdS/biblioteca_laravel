<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <h1>Produtos</h1>

    <form action="/editar-produto/{{ $produto-> id }}" method="post">
        @csrf
        
    <label for="lblNome">Nome:</label>
    <input type="text" name="nome" value="{{ $produto->nome }}">
    <br><br>
    <label for="lblNome">Valor:</label>
    <input type="text" name="valor" value="{{ $produto->valor }}">
    <br><br>
    <label for="lblNome">Quantidade:</label>
    <input type="text" name="estoque" value="{{ $produto->estoque }}">
    <br><br>
    <button>Cadastrar</button>
</body>
</html>