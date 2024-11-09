<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" type="text/css" href="css/sobrenos.css" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sobre nós</title>
</head>
<body>
<?php
    include './banco/sessionInfo/session.php';
    ?>
    <nav class="NavBar">
        <div class="center">
            <ul>
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="sobrenos.php">Sobre nós</a></li>
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
        <!--Link abrindo outra janela guia-->
        <!-- <div class="voltarHome img" >
            <span class="tooltiptext">Voltar ao inicio</span>
            <a href="./index.html"><img src="assets/img/novelo.svg" alt="..." /></a>
        </div> -->
    <div class="Background">  
    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
            <br>
                <h2 class="section-heading text-uppercase">Sobre Nós</h2>
                <h3 class="section-subheading">Equipe</h3>
            </div>
            <ul class="timeline">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/lazaro_animal.jpg" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Lázaro</h4>
                            <h4 class="subheading"></h4>
                        </div>
                        <div class="timeline-body"><p class="">Estudante de Análise e Desenvolvimento de Sistemas, cursando primeiro período. <br> E-mail: lazaro.junior@outlook.com</p></div>
                    </div>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/Angel.jpeg" width="180px" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Matheus</h4>
                            <h4 class="subheading"></h4>
                        </div>
                        <div class="timeline-body"><p class="">Estudante de Análise e Desenvolvimento de Sistemas, cursando segundo período. <br>"Este é o meu primeiro site, espero que fique bacana!" <br> E-mail: Gracafigueiro@outlook.com</p></div>
                    </div>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets\img\about\N.png" width="180px"  alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Nicole</h4>
                            <h4 class="subheading"></h4>
                        </div>
                        <div class="timeline-body"><p class="">Estudante de Análise e Desenvolvimento de Sistemas, cursando segundo período. <br> E-mail: nicolepsales@gmail.com <br></p></div>
                    </div>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Ruan</h4>
                            <h4 class="subheading"></h4>
                        </div>
                        <div class="timeline-body"><p class="">Estudante de Ciência da Computação, cursando segundo período. <br> E-mail: Ruan_b3@hotmail.com </p></div>
                    </div>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/rui_animal.jpg" width="200px" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Rui</h4>
                            <h4 class="subheading"></h4>
                        </div>
                        <div class="timeline-body"><p class="">Estudante de Análise e Desenvolvimento de Sistemas, cursando segundo período. <br> E-mail: ruigabriel765@gmail.com <br></p></div>
                    </div>
            </ul>
        </div>
    </section>
    </div>
</body>
</html>
