<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    
    try{
        $con = new PDO("mysql:host=$servidor;dbname=cafegato", $usuario, $senha);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "<p>Conexão OK</p><br/>"; //remover posteriormente
    } catch (PDOException $e) { echo "Erro na conexão: " . $e->getMessage(); }
