<?php
include '../conexao.php';

if(isset($POST['usuario']) && srtlen($_POST['usuario']) > 0){

    if(!isset($_SESSION))
        session_start();

    $_SESSION['usuario'] = $mysqli->scape_string($_POST['usuario']);
    $_SESSION['senha'] = md5(md5($_POST['senha']));
    
    $sql_code = "SELECT senha, codigo FROM usuario WHERE usuario = '$_SESSION[usuario]'";
    $sql_query = $mysqli->query($sql_code) or die($mysqli->error);
    $dado = $sql_query->fetch_assoc();
    $total = $sql_query->num_rows;

    if($total == 0){
        $erro[] = "Este usuário não existe.";
    }else{

        if($dado['senha'] == $_SESSION['senha']){

            $_SESSION['usuario'] = $dado['codigo'];

        }else{

            $erro[] = "Senha incorreta.";
        }
    }

    if(count($erro) == 0 || !isset($erro)){
        echo "<script>alert('Login efetuado com sucesso'); location.href='sucesso.php';</script>";
    }
} header("location:../../index.php"); //redireciona automaticamente