<?php
session_start(); // Iniciar a sessão
include '../conexao.php'; // Conectar ao banco de dados

$login = $_POST['txtLogin'];
$senha = $_POST['txtSenha'];

if (isset($_POST['btnAcessar'])) { // Se o botão "Acessar" foi clicado

    // Consulta para verificar o login e a senha no banco de dados
    $sql = "SELECT * FROM tblogin WHERE login='$login' AND senha='$senha'";

    // Verifica se a consulta retornou algum resultado
    if ($con->query($sql)->rowCount() == 0) { // Se não houver registros
        echo "<h3>Login e/ou senha inválidos !!!</h3>";
        echo "<h3><a href='../../login_page.php'>Retornar</a></h3>";
        unset($_SESSION['login']); // Desativa a sessão de login
        header("Refresh: 5; url=../../index.php"); // Redireciona após 5 segundos
    } else { // Se o login for validado
        $_SESSION['login'] = $login; // Armazena o login na sessão
        header("location:../../index.php"); // Redireciona para a página inicial
    }
}
?>