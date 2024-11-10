<?php

include '../conexao.php';
$id = $_GET['id'];
$sql = "SELECT id, login, senha FROM tblogin where id=$id";
echo "<html><body><h1>Exclusão</h1><form action='exclui.php' method='post'>";
foreach ($con->query($sql) as $row) {
    echo "<input type='hidden' name='id' value='$id' />";
    echo "<label for='login'>Login:</label>";
    echo "<input type='text' id='login' name='login' "
    . "placeholder='Digite seu login' value='" . $row['login'] . "'readonly'>";

    echo "<br /><br /><label for='senha'>Senha:</label>";
    echo "<input type='text' id='senha' name='senha' "
    . "placeholder='Digite sua senha' value='" . $row['senha'] . "'readonly'>";

    echo "<br /><br /><input type='submit' value='Apagar registro' />";
}
echo "</form></body></html>";
