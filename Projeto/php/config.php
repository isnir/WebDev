<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbpassword = '';
    $dbName = 'formulario-adocao';

    $conexao = new mysqli($dbHost,$dbUsername,$dbpassword,$dbName)

    if($conexao->connect_erro)
    {
        echo "erro";

    }
    else{
        echo "conexão efetuada com sucesso"
    }
?>