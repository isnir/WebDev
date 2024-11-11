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
        <link rel="stylesheet" type="text/css" href="assets/styles/formBase.css" />

        <script src="javascript/confirm_cadastro.js"></script>

    </head>
    <body>
        <?php
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

        <div class="center container">
            <div class="formTemplete">
                <h1 style="text-align: center">Cadastro</h1>
                <form class="formContent" action="banco/dataAccess_login/insere.php" method="post">
                    <fieldset><legend>Dados do Login</legend>
                        <label for="login">Login:</label><br />
                        <input type="text" id="txtLogin" name="txtLogin"
                               required="required" placeholder="Digite o login"
                               autocomplete="off" autofocus="autofocus"/><br />
                        <label for="senha">Senha:</label><br />
                        <input type="password" id="txtSenha" required="required"
                               name="txtSenha" placeholder="Digite a senha"/><br />
                        <label for="senhaCofirm">Confirmar Senha:</label><br />
                        <input type="password" id="txtSenhaCofirm" required="required"
                               name="txtSenhaCofirm" placeholder="Digite a senha"/><br /><br />
                        <input onclick="cadastrarUsuario()" type="submit" value="Confirmar Cadastro" >
                    </fieldset>
                </form>
            </div>
        </div>

        <footer>
            <div class="footer container">
                <span>Aconchego dos Bigodes&#174;</span>
            </div>
        </footer>

        <?php
        // put your code here
        ?>
    </body>
</html>
