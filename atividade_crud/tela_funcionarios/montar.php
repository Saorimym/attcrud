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
            $cargo = $lista[$conjunto + 1];
            $salario = $lista[$conjunto + 2];
            $endereco = str_replace("<br>", "\n", $lista[$conjunto + 3]);
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
                        <td><label for="nome">Nome:</label></td>
                        <td><input type="text" id="nome" name="nome" placeholder="<?php echo $nome; ?>"
                                value="<?php echo $nome; ?>" required><br></td>
                    </tr>
                    <tr>
                        <td><label for="cargo">Cargo:</label></td>
                        <td><input type="text" id="cargo" name="cargo" placeholder="<?php echo $cargo; ?>"
                                value="<?php echo $cargo; ?>" required><br></td>
                    </tr>
                    <tr>
                        <td><label for="salario">Salário:</label></td>
                        <td><input type="text" id="salario" name="salario" placeholder="<?php echo $salario; ?>"
                                value="<?php echo $salario; ?>" required><br></td>
                    </tr>
                    <tr>
                        <td><label for="endereco">Endereço:</label></td>
                        <td><textarea type="text" id="endereco" name="endereco" rows="10"
                                cols="40"><?php echo $endereco; ?></textarea><br></td>
                    </tr>
                    <tr>
                        <td class="botoes"><input type="submit" value="Enviar"></td>
                        <td class="botoes"><button onclick="location.href = 'index_funcionarios.php'">voltar ao começo</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>