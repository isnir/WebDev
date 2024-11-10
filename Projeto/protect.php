<?php
session_start(); // Inicia a sessão

// Verifica se a variável de sessão 'login' está definida
if (!isset($_SESSION['login'])) {
    // Se não estiver logado, redireciona para a página de login
    header("Location: ../../login_page.php");
    exit;
}