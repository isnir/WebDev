<?php

include './banco/conexao.php';
$sql = 'SELECT id, login FROM tblogin ORDER BY id';

echo "<div class'container'>";
echo "<table border='1'>";
echo "<caption>Consulta aos dados das pessoas cadastradas</caption>";
echo "<thead><tr><th>ID</th><th>Login</th>"
 . "<th colspan='2'>Operações</th></tr></thead><tbody>";
//ler cada linha de registro da consulta
foreach ($con->query($sql) as $row) {
    echo "<tr><td>" . $row['id'] . "</td>";
    echo "<td>" . $row['login'] . "</td>";
    echo "<td><a class='buttonTable bEdit' href=./banco/dataAccess_login/editar.php?id=" . $row['id'] . ">Editar</a></td>";
    echo "<td><a class='buttonTable bDelete' href=./banco/dataAccess_login/excluir.php?id=" . $row['id'] . ">Excluir</a></td></tr>";
}
echo "</tbody></table>";
