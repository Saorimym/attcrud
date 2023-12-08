<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index_funcionarios.css" />
    <title> Tela Pedidos</title>
</head>

<body>
    <div class="container-tudo">
    <form method="post" action="insert.php">
        <table>
            <tr>
                <td><label for="nome">Nome:</Label></td>
                <td><input id="nome" name="nome" autofocus> </td>
            </tr>
            <tr>
                <td><label for="cargo">Cargo:</label></td>
                <td><input id="cargo" name="cargo" required></textarea></td>
            </tr>
            <tr>
                <td><label for="salario">Salário:</label></td>
                <td><input id="salario" name="salario" required></textarea></td>
            </tr>
            <tr>
                <td><label for="endereco">Endereço:</label></td>
                <td><textarea id="endereco" name="endereco" required></textarea></td>
            </tr>
            <tr>
            <td class="botoes"><input type="submit" class="formulario" value="adicionar Funcionário" /></td>
            <td class="botoes"><button onclick="location.href = 'select.php'">Ver Funcionários</button></td>
            <td class="botoes"><button onclick="location.href = '../index.php'">Voltar ao Gerenciador</button></td>   
        </table>
    </form>
    </div>
</body>

</html>