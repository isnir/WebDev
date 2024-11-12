<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sobrenos.css">
    <title>Sobre Nós</title>
</head>
<body>

<?php include './banco/sessionInfo/session.php'; ?>

<nav class="NavBar">
    <div class="center">
        <ul>
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="sobrenos.php">Sobre Nós</a></li>
            <?php
            if (!isset($_SESSION['login'])) {
                echo "<li style='float:right'><a href='./login_cadastro.php'>Cadastre-se</a></li>";
                echo "<li style='float:right'><a href='./login_page.php'>Entrar</a></li>";
            } else {
                echo "<li style='float:right'><a><input class='link-button' form='btnSair' type='submit' value='Sair' name='btnSair'/></a></li>";
            }
            ?>
        </ul>
    </div>
</nav>

<section class="sobre-nos-section">
    <h2 class="section-heading">Sobre Nós</h2>
    <div class="team-container">
        <div class="team-member">
            <img src="assets/img/about/lazaro_animal.jpg" alt="Lázaro" class="member-img">
            <div class="member-info">
                <h3>Lázaro</h3>
                <p>Estudante de Análise e Desenvolvimento de Sistemas, cursando primeiro período.</p>
                <p>Email: lazaro.junior@outlook.com</p>
            </div>
        </div>
        <div class="team-member">
            <img src="assets/img/Angel.jpeg" alt="Matheus" class="member-img">
            <div class="member-info">
                <h3>Matheus</h3>
                <p>Estudante de Análise e Desenvolvimento de Sistemas, cursando segundo período. "Este é o meu primeiro site, espero que fique bacana!"</p>
                <p>Email: Gracafigueiro@outlook.com</p>
            </div>
        </div>
        <div class="team-member">
            <img src="assets/img/Nicole_animal.jpg" alt="Nicole" class="member-img">
            <div class="member-info">
                <h3>Nicole</h3>
                <p>Estudante de Análise e Desenvolvimento de Sistemas, cursando segundo período.</p>
                <p>Email: nicolepsales@gmail.com</p>
            </div>
        </div>
        <div class="team-member">
            <img src="assets/img/Ruan_animal.jpg" alt="Ruan" class="member-img">
            <div class="member-info">
                <h3>Ruan</h3>
                <p>Estudante de Ciência da Computação, cursando segundo período.</p>
                <p>Email: Ruan_b3@hotmail.com</p>
            </div>
        </div>
        <div class="team-member">
            <img src="assets/img/about/rui_animal.jpg" alt="Rui" class="member-img">
            <div class="member-info">
                <h3>Rui</h3>
                <p>Estudante de Análise e Desenvolvimento de Sistemas, cursando segundo período.</p>
                <p>Email: ruigabriel765@gmail.com</p>
            </div>
        </div>
    </div>
</section>

<script src="js/scroll-animation.js"></script>
<!--<script src="js/confetti-animation.js"></script>!-->
</body>
</html>
