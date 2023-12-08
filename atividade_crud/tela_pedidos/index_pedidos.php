<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index_pedidos.css" />
    <title> Tela Pedidos</title>
</head>

<body>
    <div class="container-tudo">
    <form method="post" action="insert.php">
        <table>
            <tr>
                <td><label for="nome">Nome do Prato:</Label></td>
                <td><input id="nome" name="nome" autofocus> </td>
            </tr>
            <tr>
                <td><label for="preco">Preço:</label></td>
                <td><input id="preco" name="preco" required></textarea></td>
            </tr>
            <tr>
                <td><label for="ingredientes">Ingredientes:</label></td>
                <td><input id="ingredientes" name="ingredientes" required></textarea></td>
            </tr>
            <tr>
                <td><label for="preparo">Preparo:</label></td>
                <td><textarea id="preparo" name="preparo" required></textarea></td>
            </tr>
            <tr>
            <td class="botoes"><input type="submit" class="formulario" value="adicionar prato" /></td>
            <td class="botoes"><button onclick="location.href = 'select.php'">Ver Pratos</button></td>
            <td class="botoes"><button onclick="location.href = '../index.php'">Voltar ao Gerenciador</button></td>    
        </table>
    </form>
    
    </div>
</body>

</html>