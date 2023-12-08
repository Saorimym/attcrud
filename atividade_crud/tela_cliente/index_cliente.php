<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index_cliente.css" />
    <title> Tela Pedidos</title>
</head>


    
<body>

<style>

body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

.container-tudo {
    margin-top: 80px;
}

.container-escrita {
    width: 80%;
    margin: 0 auto;
    padding: 20px;
}

form table {
    width: 100%;
}

form table td {
    padding: 10px;
}

form input,
form textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    box-sizing: border-box;
}

.botoes input,
.botoes button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.botoes input:hover,
.botoes button:hover {
    background-color: #45a049;
}


    </style>
    
    <div class="container-tudo">
    <form method="post" action="insert.php">
        <table>
            <tr>
                <td><label for="nome">Nome:</Label></td>
                <td><input id="nome" name="nome" autofocus> </td>
            </tr>
            <tr>
                <td><label for="idade">Idade:</label></td>
                <td><input id="idade" name="idade" required></textarea></td>
            </tr>
            <tr>
                <td><label for="endereco">Endereço:</label></td>
                <td><input id="endereco" name="endereco" required></textarea></td>
            </tr>
            <tr>
                <td><label for="comanda">Comanda:</label></td>
                <td><textarea id="comanda" name="comanda" required></textarea></td>
            </tr>
            <tr>
            <td class="botoes"><input type="submit" class="formulario" value="adicionar Cliente" /></td>
            <td class="botoes"><button onclick="location.href = 'select.php'">Ver Clientes</button></td>
            <td class="botoes"><button onclick="location.href = '../index.php'">Voltar ao Gerenciador</button></td>    
        </table>
    </form>
    
    </div>
</body>

</html>