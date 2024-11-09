<?php

//verifica o login na sessão

session_start();

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


