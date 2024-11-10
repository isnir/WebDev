<?php

//verifica o login na sessão

if (session_status() == PHP_SESSION_NONE) {
    session_start();  // Inicia a sessão se ainda não estiver ativa
}

if ((isset($_SESSION['login']) == false)) {
    unset($_SESSION['login']);
} else {
    $logado = "Usuario: " . $_SESSION['login']; //ler o login da sessão
}

if (isset($_POST['btnSair'])) {
    session_destroy();
    header('location:../../index.php');
}



/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

