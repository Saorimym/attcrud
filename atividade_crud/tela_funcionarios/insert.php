<?php

$banco = "banco.txt";
$conteudo = $_POST["nome"] . "\n" . $_POST["cargo"] . "\n" . $_POST["salario"] . "\n" . str_replace("\n", "<br>", $_POST["endereco"])
. "\n";
$criar = fopen($banco, "a+");
fwrite($criar, $conteudo);

if ($criar == true) {
    echo "Dados armazenados em banco.txt";
} else {
    echo "Erro ao salvar dados em banco.txt";
};
fclose($criar);
header('Location: index_funcionarios.php#footer');

?>