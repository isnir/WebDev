<?php

include '../conexao.php';
$id = $_POST['id'];
$sql = "delete from tblogin where id=$id ";
$count = $con->exec($sql);
echo "<script> alert(`$count registro foi removido!`); </script>";
header('location:../../registro_login.php');

