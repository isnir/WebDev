
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <!-- 
    <link rel="stylesheet" type="text/css" href="./CSS/body.css"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">

    <style type="text/css">
        html {
            font-size: 14px;
            font-family: 'Open Sans', sans-serif;

        }

        h1 {
            font-size: 60px;
            text-align: center;
            margin: 0;
            padding: 20px 0;
            color: #4E2C33;
            /* text-shadow: 3px 3px 1px rgb(255, 255, 255); */
            border-radius: 5px;
        }

        html {
            background-color: #4E2C33;
            background-image: url(assets/img/gato1.png);
        }

        body {
            border-radius: 20px;
            width: 800px;
            margin: 0 auto;
            background-color: #f6f6f691;
            padding: 0 20px 20px 20px;
            border: 5px solid rgb(255, 255, 255);

        }

        img {
            border-radius: 50%;
        }

        input:invalid {
            background-color: rgb(255, 255, 255);
        }

        .campo input {
            border-radius: 10px;
        }

        .botao {
            border-radius: 10px;
            font-size: 1.5em;
            background: #4E2C33;
            border: 0;
            margin-bottom: 1em;
            color: #d3ada5;
            padding: 0.2em 0.6em;
            box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.2);
            text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.5);


        }
    </style>
    </style>
    <title>Formulario</title>
    <script src="script.js"></script>
</head>

<body>
    <form action="formulario-de-adocao.php" method="POST">
        <h1>Formulário de adoção</h1>
        <!--Link abrindo outra janela guia-->
        <a href="index.html" target="_blank">
      <h3><img src="./assets/img/novelo.svg" alt="ico"></h3>
        </a>

        <!-- IMAGEM -->

        <img src="./assets/img/adoção1.jpg" alt="gato-adocao" width="300px" height="300px" />

        <!-- FORMULÁRIO  -->
        <form action="#" method="post">

            <fieldset>
                <legend>Dados</legend>
                <!-- CONTAINER -->
                <div class="campo">
                    <label><span style="color: red"> * </span>Nome do adotante:</label>
                    <input type="text" id="nome" name="nome" placeholder="Digite o nome..." pattern="[a-zA-Z\s]{2,40}"
                        style="width: 20em" required />
                </div>
                <br>
                <div class="campo">
                    <label><span style="color: red"> * </span>Endereço do adotante:</label>
                    <input type="text" id="endereco" name="endereco" placeholder="Rua, Alameda, Avenida..."
                        pattern="[a-zA-Z\s]{2,40}" style="width: 20em" required />
                </div>
                <br>
                <div class="campo">
                    <label><span style="color: red"> * </span>CEP do adotante:</label>
                    <input type="text" id="nome" name="nome" placeholder="00000-000" pattern="\d{5}-\d{3}"
                        style="width: 5em" required />
                    <br>
                </div>
                <br>
                <div class="campo">
                    <label><span style="color: red"> * </span>E-mail:</label>
                    <input type="email" id="email" name="email" placeholder="Digite o e-mail para contato..."
                        required />
                    <br>
                </div>
                <br>
                <div class="campo">
                    <label><span style="color: red"> * </span>Celular:</label>
                    <input id="celular" placeholder="(ddd)(999999999)" required />

                </div>
                <br>
                <div class="campo">
                    <label><span style="color: red"> * </span>Digite seu CPF:</label>
                    <input type="text" name="cpf" id="cpf" placeholder="xxx.xxx.xxx-xx"
                        pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" \ title="Digite um CPF no formato: xxx.xxx.xxx-xx" required>
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
                        <textarea name="message" style="width:30em"
                            placeholder="Preferência de cor da pelagem?"></textarea>
                        <br>
                        <br>
                    </div>
                    <br>

                    <input button class="botao submit" type="submit" name="submit"></button>
                </div>
                </div>
                </div>
            </fieldset>
        </form>

        </a>
    </form>
</body>

</html>