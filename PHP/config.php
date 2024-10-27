<?php
// PEGANDO OS DADOS DO FORMULARIO
$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$endereco = isset($_POST['endereco']) ? $_POST['endereco'] : '';
$cep = isset($_POST['cep']) ? $_POST['cep'] : ''; 
$email = isset($_POST['email']) ? $_POST['email'] : '';
$celular = isset($_POST['celular']) ? $_POST['celular'] : '';
$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '';
$sexo = isset($_POST['sexo']) ? $_POST['sexo'] : '';
$mensagem = isset($_POST['mensagem']) ? $_POST['mensagem'] : '';

// CONFIGURAÇOES DE CREDENCIAIS
$server = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'formulario_adocao';

// CONEXAO COM O BANCO DE DADOS
$conn = new mysqli ($server, $usuario, $senha, $banco);

// Verificação de conexão
if ($conn->connect_error) {
    die("Falha ao se comunicar com o banco de dados: " . $conn->connect_error);
}

// Inserindo instruções para o banco de dados (s=string)
$smtp = $conn->prepare("INSERT INTO formulario_adocao (nome, endereco, cep, email, celular, cpf, sexo, mensagem) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
if ($smtp === false) {
    die("Erro na preparação da consulta: " . $conn->error);
}

$smtp->bind_param("ssssssss", $nome, $endereco, $cep, $email, $celular, $cpf, $sexo, $mensagem);

if ($smtp->execute()) {
    echo "Formulario Cadastrado com SUCESSO!";
} else {
    echo "Erro no envio do formulario: " . $smtp->error;
}

$smtp->close();
$conn->close();
?>