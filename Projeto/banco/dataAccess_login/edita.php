<?php

include '../conexao.php';
$id = $_POST['id'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$sql = "update tblogin set login='$login', senha='$senha' where id=$id";
$count = $con->exec($sql);
echo "<p> $count registro foi atualizado</p>";
//echo "<a href='consulta.php'>Consultar dados</a>";

