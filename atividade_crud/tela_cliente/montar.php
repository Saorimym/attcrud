<!DOCTYPE html>
<html lang="pt">

<head>
    <title>Site PHP</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UV-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="montar.css" />
</head>

<body>
    <?php
    $banco = "banco.txt";
    if (isset($_GET['codigo'])) {
        if (file_exists($banco) && !empty(file_get_contents($banco))) {
            $lista = explode("\n", file_get_contents($banco));
            $informacoes = 4;
            $conjunto = $informacoes * ($_GET['codigo'] - 1);

            $nome = $lista[$conjunto];
            $idade = $lista[$conjunto + 1];
            $endereco = $lista[$conjunto + 2];
            $comanda = str_replace("<br>", "\n", $lista[$conjunto + 3]);
        }
    }
    ?>
    <div class="container-tudo">
        <div class="container-escrita">
            <form method="post" action="insert.php">
                <table>
                    <tr>
                        <td><label for="codigo">Código:</label></td>
                        <td><input type="number" id="codigo" name="codigo" placeholder="<?php echo $_GET['codigo']; ?>"
                                value="<?php echo $_GET['codigo']; ?>" required><br></td>
                    </tr>
                    <tr>
                        <td><label for="nome">Nome do Prato:</label></td>
                        <td><input type="text" id="nome" name="nome" placeholder="<?php echo $nome; ?>"
                                value="<?php echo $nome; ?>" required><br></td>
                    </tr>
                    <tr>
                        <td><label for="idade">Idade:</label></td>
                        <td><input type="text" id="idade" name="idade" placeholder="<?php echo $idade; ?>"
                                value="<?php echo $idade; ?>" required><br></td>
                    </tr>
                    <tr>
                        <td><label for="endereco">Endereço:</label></td>
                        <td><input type="text" id="endereco" name="endereco" placeholder="<?php echo $endereco; ?>"
                                value="<?php echo $endereco; ?>" required><br></td>
                    </tr>
                    <tr>
                        <td><label for="comanda">Comanda:</label></td>
                        <td><textarea type="text" id="comanda" name="comanda" rows="10"
                                cols="40"><?php echo $comanda; ?></textarea><br></td>
                    </tr>
                    <tr>
                        <td class="botoes"><input type="submit" value="Enviar"></td>
                        <td class="botoes"><button onclick="location.href = 'index_cliente.php'">voltar ao começo</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>