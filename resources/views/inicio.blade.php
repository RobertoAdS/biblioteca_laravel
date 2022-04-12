<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario UaU</title>
</head>
<body>
    <h1>Produtos</h1>
<form action="/cadastrar-produto" method="POST">
    @csrf
    <label for="lblNome">nome:</label>
    <input type="text" name="nome">
    <br><br>
    <label for="lblValor">valor:</label>
    <input type="text" name="valor">
    <br><br>
    <label for="lblQuantidade">quantidade:</label>
    <input type="text" name="estoque">
    <br><br>
    <button>Cadastrar</button>


</form>
</body>
</html>