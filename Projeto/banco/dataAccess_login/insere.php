<?php

include '../conexao.php'; //abrir a conexão com o BD
//ler os dados do formulário

$login = $_POST['txtLogin'];
$senha = $_POST['txtSenha'];
$senhaConfirm = $_POST['txtSenhaCofirm'];

if ($senha == $senhaConfirm) {

    //definir o comando SQL para inserir
    $sql = "insert into tblogin(login, senha)"
            . "values('$login', '$senha')";
    $count = $con->exec($sql); //executar o comando SQL
    //exibir o resultado
    //echo "<p>$count registro foi incluído</p>";
    header("location:../../login_page.php");
}
else{
    header("location:../../login_cadastro.php");
}
?>