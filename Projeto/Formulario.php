
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" type="text/css" href="css/formulario.css" />
    <link rel="stylesheet" type="text/css" href="css/tooltip.css"> 
    <link rel="stylesheet" type="text/css" href="css/navbar.css" />


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">

    <title>Formulario</title>
    <script src="script.js"></script>
</head>

<body>
<?php
  // Iniciar a sessão e verificar se o usuário está logado
  session_start();
  
  // Verificar se o usuário não está logado
  if (!isset($_SESSION['login']) || $_SESSION['login'] == false) {
      // Redirecionar para a página de login caso não esteja logado
      header("Location: ./login_page.php");
      exit(); 
  }

  include './banco/sessionInfo/session.php';
?>
  
<form id="btnSair" action="banco/sessionInfo/session.php" method="post"></form>
    
<nav class="NavBar">
    <div class="center container">
        <ul>
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="sobrenos.php">Sobre Nós</a></li>
            <?php
            if (!isset($_SESSION['login']) || $_SESSION['login'] == false) {
                echo "<li style='float:right'><a href='./login_cadastro.php'>Cadastre-se</a></li>";
                echo "<li style='float:right'><a href='./login_page.php'>Entrar</a></li>";
            } else {
                echo "<li style='float:right'><a </a><input class='link-button' form='btnSair' type='submit' value='Sair' name='btnSair'/></li>";
            }
            ?>
        </ul>
    </div>
</nav>

<div class="Background">
    <form action="PHP/config.php" method="POST">
        <h1>Formulário de adoção</h1>

        <!-- IMAGEM -->
        <div class="gatoadoca">
            <img src="./assets/img/adoção1.jpg" alt="gato-adocao"/>
        </div>

        <!-- FORMULÁRIO -->
        <form action="#" method="post">
            <fieldset>
                <legend>Dados</legend>
                <!-- CONTAINER -->
                <div class="campo">
                    <label><span style="color: red"> * </span>Nome do adotante:</label>
                    <input type="text" name="nome" id="nome" placeholder="Digite o nome..." pattern="[a-zA-Z\s]{2,40}"
                        style="width: 20em" required />
                </div>
                <br>
                <div class="campo">
                    <label><span style="color: red"> * </span>Endereço do adotante:</label>
                    <input type="text" name="endereco" id="endereco" placeholder="Rua, Alameda, Avenida..."
                        pattern="[a-zA-Z1-9\s]{2,40}" style="width: 20em" required />
                </div>
                <br>
                <div class="campo">
                    <label><span style="color: red"> * </span>CEP do adotante:</label>
                    <input type="text" name="cep" id="cep" placeholder="00000-000" pattern="\d{5}-\d{3}"
                        style="width: 5em" required />
                    <br>
                </div>
                <br>
                <div class="campo">
                    <label><span style="color: red"> * </span>E-mail:</label>
                    <input type="email" name="email" id="email" placeholder="Digite o e-mail para contato..."
                        required />
                    <br>
                </div>
                <br>
                <div class="campo">
                    <label><span style="color: red"> * </span>Celular:</label>
                    <input name="celular" id="celular" placeholder="(ddd)(999999999)" required />
                </div>
                <br>
                <div class="campo">
                    <label><span style="color: red"> * </span>Digite seu CPF:</label>
                    <input type="text" name="cpf" id="cpf" placeholder="xxx.xxx.xxx-xx"
                        pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" title="Digite um CPF no formato: xxx.xxx.xxx-xx" required>
                    <br>
                </div>
                <br>
                <div class="campo">
                    <label class="checkbox">Escolha o sexo do gatinho:
                        <input type="radio" name="sexo" value="masculino" />Masculino
                    </label>
                    <label class="checkbox">
                        <input type="radio" name="sexo" value="Feminino" />Feminino
                    </label>
                    <br>
                    <br>
                    <div class="campo">
                        <label>Mensagem:</label>
                        <textarea name="mensagem" id="mensagem" style="width:30em"
                            placeholder="Preferência de cor da pelagem?"></textarea>
                        <br>
                        <br>
                    </div>
                    <br>
                    <input button type="submit" name="submit" value="Enviar!"></button>
                </div>
            </fieldset>
        </form>
    </form>
</div>
</body>

</html>
