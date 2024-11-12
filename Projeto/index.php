<html>

<head lang="pt-br">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">

  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/main.css" />
  <link rel="stylesheet" type="text/css" href="css/tooltip.css" />
  <link rel="stylesheet" type="text/css" href="css/cardapio.css" />
  <link rel="stylesheet" type="text/css" href="css/navbar.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

  <!-- JS -->
  <script src="js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <title>Desenvolvimento Web</title>

</head>

<body>
  <?php
  include './banco/sessionInfo/session.php';
  ?>
  <form id="btnSair" action="banco/sessionInfo/session.php" method="post"/></form>
  <a id="page-top"></a>
  <!-- Inicio do Header -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">

      <a class="navbar-brand" href="#page-top"><img src="assets/img/novelo.svg" alt="..." /></a>
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars ms-1"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#cardapio">Cardápio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"
              href="https://www.google.com.br/maps/place/Rio+Gastronomia+2024/@-22.9740042,-43.2256031,17z/data=!3m1!4b1!4m6!3m5!1s0x9bd5006d6941b9:0x92a852ffdf9d946e!8m2!3d-22.9740092!4d-43.2230228!16s%2Fg%2F11ln5wknm9?entry=ttu&g_ep=EgoyMDI0MDgyOC4wIKXMDSoASAFQAw%3D%3D"
              class="nav">Localização</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#reserva">Reserva</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="./sobrenos.php">Sobre nós</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./Formulario.php">Adoção</a>
          </li>
          <?php
                //O que eu fiz aqui:
                //Se NÃO estiver logado, apresentar páginas de login e cadastro.
                if ((isset($_SESSION['login']) == false)) {
                    echo "<li class='nav-item' style = 'float:right'><a  class='nav-link' href = './login_cadastro.php'>Cadastre-se</a></li>";
                    echo "<li class='nav-item' style = 'float:right'><a class='nav-link' href = './login_page.php'>Entrar</a></li>";
                }
                //Se estiver ligado apresentar o nome do usuário e a opção "Sair".
                else {
                    echo "<li class='nav-item' style = 'float:right'><a  class='nav-link'><input class = 'link-button' form = 'btnSair' type = 'submit' value = 'Sair' name = 'btnSair'/> </a></li>";
                    echo "<li class='nav-item' style='float:right'><a  class='nav-link'>$logado</a></li>";
                }
                //Se estiver logado E for admin, dar acesso ao registro de login, é possivelmente outros.
                if ((isset($_SESSION['login']) == true) and $_SESSION['login'] == "admin") {
                    echo "<li class='nav-item' style = 'float:right'><a class='nav-link' href = 'database_login.php'>Registros de Login</a></li>";
                }
               //Isso deve estar funcional, porém dá pra fazer melhor, se possível comparar o "nivel" em vez de "login".
           ?>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead-->
  <header class="masthead" id="bemvindo">
    <div class="container">
      <div class="masthead-subheading">Sejam bem-vindos!</div>
      <div class="masthead-heading text-uppercase">
        Aconchego dos Bigodes Cat Café
      </div>
      <a class="btn botao" href="#services">Saber mais</a>
    </div>
  </header>

  <!-- Bem Vindo -->
  <!-- Services-->
  <section class="page-section" id="services">
    <div class="container">
      <div class="text-center">
        <h2 class="section-heading text-uppercase">Serviços</h2>
      <!--  <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <img class="img_teste" src="assets/img/coffee-cup.png">
          </span>
          <h4 class="my-3">Cafeteria</h4>
          <p class="text-muted">Primeiramente,
            o que é um cat-café? O conceito de cat-café surgiu em Taiwan, e hoje é sucesso no Japão, tornando-se cada
            vez mais popular pelo mundo. Além disso, um cat-café é um ambiente acolhedor onde você pode unir o prazer de
            tomar um bom café com a experiência de estar ao lado, e interagir com os bichanos.
            No Brasil o cat-café é uma novidade, mas já promete espalhar amor por onde passar, pois os
            gatos que vivem no café pertencem à ONG's parceiras, por tanto, estão para adoção!</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <img class="img_teste" src="assets/img/adopt.png">
          </span>
          <h4 class="my-3">Adoção</h4>
          <p class="text-muted">Estamos em parceria com ONG's interessadas no bem-estar de nossos inquilinos, todos os gatinhos
            estão para adoção! Para seguir com o processo de adoção, exigimos o preenchimento de um pequeno formulário
            com intuito de triar e também verificar a disponibilidade dos bichinhos.</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <img class="img_teste" src="assets/img/adoption.png">
          </span>
          <h4 class="my-3">Cat Sitting</h4>
          <p class="text-muted">Disponibilizamos um espaço aconchegante para os bichanos, com tudo que eles merecem:
            sofás, arranhadores, brinquedos, bebedouros e comedouros. <br> E é claro que você, humano, é muito
            bem-vindo!</p>
        </div>
      </div>
    </div>
  </section>
  <!-- 
    Adoção
    <a name="adoção">
      <div id="adoção">
        <a href=""><span>Animais para adoção</span></a>
      </div>
    </a> -->

  <!-- Cardapio -->

  <a name="cardapio">
    <div class="text-center">
      <h2 class="section-heading text-uppercase">Cardápio</h2>
      <h3 class="section-subheading text-muted">Confira os principais itens do nosso cardápio:</h3>
    </div>
    <div id="carouselExampleAutoplaying" class="carousel carousel-dark slide" data-bs-ride="carousel">

      <div class="carousel-inner">

        <div class="carousel-item active">
          <div class="cards-wrapper">
            <div class="card">
              <div class="image-wrapper">
                <img src="assets/img/espresso cat.jpg" alt="..." />
              </div>
              <div class="card-body">
                <h5 class="card-title">Café espresso</h5>
                <p class="card-text">
                  A grafia "espresso" com "s" é uma forma de homenagear os italianos que popularizaram o hábito de beber
                  café feito na máquina.
                  A palavra "espresso" é uma transliteração do termo italiano que significa "expresso" ou "rápido". Na
                  língua portuguesa, a grafia correta é "expresso", com "x. <br>
                </p>
                <!-- <a href="#" class="btn btn-primary">café espresso</a> -->
              </div>
            </div>
            <div class="card">
              <div class="image-wrapper">
                <img src="assets/img/green matcha cat.webp" class="card-img-top" alt="..." />
              </div>
              <div class="card-body">
                <h5 class="card-title">Green Matcha</h5>
                <p class="card-text">
                  O Green Matcha é um chá verde onde suas folhas são cultivadas à sombra, que posteiriormente é
                  cuidadosamente cozido a vapor e meticulosamente seco. <br>
                  O chá matcha ajuda a prevenir o envelhecimento precoce, promover o emagrecimento e melhorar o humor.
                </p>
                <!-- <a href="#" class="btn btn-primary">Green Matcha</a> -->
              </div>
            </div>
            <div class="card">
              <div class="image-wrapper">
                <img src="assets/img/Irish coffe.jpeg" class="card-img-top" alt="..." />
              </div>
              <div class="card-body">
                <h5 class="card-title">Irish Coffe</h5>
                <p class="card-text">
                  O Irish Coffee, ou café irlandês, é uma bebida alcoólica que mistura café, uísque, açúcar e chantilly.
                  <br>É uma das bebidas mais tradicionais da Irlanda e uma das mais populares do mundo.
                </p>
                <!-- <a href="#" class="btn btn-primary">Irish Coffe</a> -->
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="cards-wrapper">
            <div class="card">
              <div class="image-wrapper">
                <img src="assets/img/latte macchiato cat.jpeg" class="card-img-top" alt="..." />
              </div>
              <div class="card-body">
                <h5 class="card-title">Latte Macchiato</h5>
                <p class="card-text">
                  O latte macchiato é uma bebida à base de leite e café, suave, cremosa e levemente adocicada. <br>
                  É preparada com leite vaporizado, café expresso e espuma de leite, e normalmente servida num copo
                  alongado de vidro.
                </p>
                <!-- <a href="#" class="btn btn-primary">LATTE MOCCHIATO</a> -->
              </div>
            </div>
            <div class="card">
              <div class="image-wrapper">
                <img src="assets/img/latte cat 2.jpg" class="card-img-top" alt="..." />
              </div>
              <div class="card-body">
                <h5 class="card-title">Cappuccino</h5>
                <p class="card-text">
                  Um clássico! Uma bebida bem encorpada, basicamente composta de café com leite, um cappuccino é uma
                  bebida feita com café, leite vaporizado e creme, que se caracteriza pela sua textura cremosa e espuma.
                  <br>
                  O nome cappuccino vem do italiano cappucio, que significa "pequeno capuz", em referência ao hábito dos
                  monges franciscanos, que também é parecido com a cor da bebida.
                </p>
                <!-- <a href="#" class="btn btn-primary">CAPPUCCINO</a> -->
              </div>
            </div>

            <!-- </div>
        </div> -->
            <!-- <div class="carousel-item"> -->
            <!-- <div class="cards-wrapper"> -->
            <div class="card">
              <div class="image-wrapper">
                <img src="assets/img/afogato.jpeg" class="card-img-top" alt="..." />
              </div>
              <div class="card-body">
                <h5 class="card-title">Affogato</h5>
                <p class="card-text">
                  O affogato é uma sobremesa ou bebida gelada à base de café e sorvete, que surgiu na Itália e se
                  espalhou pelo mundo. <br>
                  O nome vem do italiano e significa literalmente "afogado", pois é uma bola de sorvete "afogada" em
                  café espresso, mas parece que foi feita para nosso cardápio, para nos afogarmos em fofura!
                </p>
                <!-- <a href="#" class="btn btn-primary">AFFOGATO</a> -->
              </div>
            </div>


          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </a>

    
  
  <a name="reserva">
    <div id="reserva">
       <!-- <a href="formulario-adocao.html"><span>Faça já sua reserva!</span></a> -->
    </div>
  </a>

  

  <!-- Inicio do Bottom -->
  <div id="contato">
    <a name="contato">
      <fieldset>
        <legend class="navegação-final">
          Aconchego dos Bigodes Cat Café
        </legend>

        <!-- <div class="nav-final">

                    <h3>MENU</h3>

                    <lu>
                        <li><a href="">Home</a></li>
                        <li><a href="#quemsomos" >Quem Somos</a></li>
                        <li><a href="#adocao">Adoção</a></li>
                        <li><a href="#cardapio">Cardápio</a></li>
                    </lu>

                </div> -->

        <div class="redes-sociais">
          <h3>Permaneça Conectado</h3>

          <lu>
            <li><a href="https://www.instagram.com/gatocafeoficial?igsh=YzljYTk1ODg3Zg==" target="_blank">Instagram</a></li>
            <img src="" />
            <li><a href="https://x.com/gatocafeoficial?t=gExmg34sfi-3d_frzrMCAQ&s=09" target="_blank">Twitter</a></li>
            <img src="" />
          </lu>
        </div>

        <div class="redes-sociais">
          <h3>Contato</h3>

          <lu>
            <li class="tel">
              <span>(21) 9999-99999</span>
            </li>
            <li class="email">
              <span>Aconchegodosbigodes@outlook.com</span>
            </li>
          </lu>
        </div>

        <div class="localizacao">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3673.3539274059635!2d-43.223022799999995!3d-22.974009199999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9bd5006d6941b9%3A0x92a852ffdf9d946e!2sRio%20Gastronomia%202024!5e0!3m2!1spt-BR!2sbr!4v1725462883603!5m2!1spt-BR!2sbr"
            width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </fieldset>
    </a>
  </div>

</body>

</html>
