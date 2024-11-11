<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="assets/styles/ruleSet.css" />
        <link rel="stylesheet" type="text/css" href="assets/styles/nav_footer.css" />
        <link rel="stylesheet" type="text/css" href="assets/styles/CRUD_table.css" />

    </head>
    <body>
        <?php
        // Iniciar a sessão e verificar se o usuário está logado
        session_start();
  
        // Verificar se o usuário não está logado
        if (!isset($_SESSION['login']) || $_SESSION['login'] == false) {
        // Redirecionar para a página de login caso não esteja logado
        header("Location: ./login_page.php");
        }

        include './banco/sessionInfo/session.php';
        ?>
        <nav class="NavBar">
            <div class="center container">
                <ul>
                    <li><a class="active" href="index.php">Home</a></li>
                    <li><a href="sobrenos.php">Sobre Nós</a></li>
                    <?php
                    if ((isset($_SESSION['login']) == false)) {
                        echo "<li style = 'float:right'><a href = './login_cadastro.php'>Cadastre-se</a></li>";
                        echo "<li style = 'float:right'><a href = './login_page.php'>Entrar</a></li>";
                    } else {
                        echo "<li style = 'float:right'><a </a><input class = 'link-button' form = 'btnSair' type = 'submit' value = 'Sair' name = 'btnSair'/></li>";
                    }
                    ?>

                </ul>
            </div>
        </nav>

        <div class="container">
            <?php
            include './banco/dataAccess_login/consulta.php';
            ?>
        </div>

        <footer>
            <div class="footer container">
                <span>Aconchego dos Bigodes&#174;</span>
            </div>
        </footer>


    </body>
</html>

