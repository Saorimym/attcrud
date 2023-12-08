<?php
$banco = "banco.txt";
if (file_exists($banco) && !empty(file_get_contents($banco))) {
echo "<CENTER>Pratos Registrados no Banco de Dados.<br></CENTER>";
echo "<br>";
$lista = explode("\n", file_get_contents($banco));
$informacoes = 4;
unset($lista[count($lista) - 1]);
$conjunto = 1;

echo "<center><table border=1>";
date_default_timezone_set('America/Sao_Paulo');
echo "<meta charset='UTF-8'>";

echo "<tr><th>Código</th><th>Nome do Prato</th><th>Preço</th><th>Ingredientes</th><th>Preparo</th><th>Ações</th></tr>";

for ($i = 0; $i < count($lista); $i += $informacoes) {

echo "<tr>"; 
echo "<td id='$conjunto' > $conjunto</td>";

for ($j = $i; $j < $i + $informacoes; $j++) {
     echo "<td>{$lista[$j]}</td>";
}

echo "<td>
<a href='delete.php?codigo=$conjunto'><img src='../imgs/delete_crud.png' alt='Deletar' title='Deletar registro'> </a>
<a href='montar.php?codigo=$conjunto'><img src='../imgs/update_crud.png' alt='Atualizar' title='Atualizar registro'></td>";
echo "</tr>";
$conjunto++;
}
echo "</table>";
echo "<footer id='footer'>";
echo "</footer>";
} else {
    echo "<br><br><p align=center>Ainda não há nenhum registro!!</p>";
    echo ("<br><br><a href='index_pedidos.php'>Voltar</a>");}
?>