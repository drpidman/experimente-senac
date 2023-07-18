<!DOCTYPE html>
<html lang="pt-br">

    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="libs/fontawesome-free-6.4.0-web/css/all.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/alert/alert.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script>
        let host = "ws://<?php echo $_SERVER['SERVER_ADDR'] ?>:8090";
    </script>

    <title>Experimente Senac</title>
    <body>
    <!-- Herosection abriga todo o conteudo que tera uma imagem de fundo -->

        <!-- Para nao ter quebras na imagem, a navbar fica dentro de um container estatico-->
        <div class="navbar-wrapper">
            <!-- ## Navbar com links uteis da pagina ## -->
            <div class="navbar" id="navbar">
                <div class="nav-title">
                    <h1>Experimente Senac</h1>
                </div>
                <div class="nav-links">
                    <a href="https://www.instagram.com/tec.info.senacd22/">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://docdoflip.wixsite.com/pi-senac-d22">
                        <i class="fas fa-globe"></i>
                    </a>
                </div>
            </div>
            <!-- ## FINAL DA NAVBAR ## -->
        </div>
        <!-- FINAL DA NAVBAR-WRAPPER -->

        <!-- CENTRO DO CONTEUDO DA HERO -->
        <!-- FINAL DA CONTENT-WRAPPER -->
    <!-- FINAL DA HEROSECTION -->
    <main>
        <div class="alert" data-alert="alert-card">
            <div class="alert-top">
                <p>Sucesso!</p>
            </div>
            <div class="alert-body">
                <p>Cadastro efetuado com sucesso! Agora você pode jogar em nosso fliperama e ver os seus pontos marcados aqui no nosso site!</p>
            </div>
        </div>
        <div class="container flex col align center m-top-2 f-size-2" id="form-control" data-aos="fade-up">
            <div class="container flex w-60 flex col p-4 align center m-top-2" data-aos="fade-up">
                <h1 class="m-bottom-1">Registre-se</h1>
                <p style="text-align: center">Crie uma conta para poder jogar e entrar em um tunel do tempo.
                    Complete os campos abaixo para você poder ver os seus pontos conquistados nos jogos e
                    concorrer a alguns premios.
                </p>
            </div>
            <div class="container flex w-60 align center justify center" data-aos="fade-up">
                <form class="card m-top-1">
                    <div class="container justify center align center m-bottom-1">
                        <img alt="controller-img" src="images/controller.png">
                    </div>
                    <!-- ## INPUT NOME ## -->
                    <div class="form-control">
                        <label for="nome">
                            <input type="text" name="nome" placeholder="Nome" id="nome">
                            <span id="span-nome">Nome</span>
                        </label>
                    </div>
                    <!-- ## FIM INPUT NOME ## -->

                    <!-- ## INPUT SOBRENOME ## -->
                    <div class="form-control">
                        <label for="sobrenome">
                            <input type="text" name="sobrenome" placeholder="Sobrenome" id="sobrenome">
                            <span id="span-sobrenome">Sobrenome</span>
                        </label>
                    </div>
                    <!-- ## FIM INPUT SOBRENOME ## -->

                    <!-- ## INPUT INSTAGRAM ## -->
                    <div class="form-control">
                        <label for="instagram">
                            <input type="text" name="ig" placeholder="Instagram" id="instagram">
                            <span id="span-instagram">Instagram</span>
                        </label>
                    </div>
                    <!-- ## FIM INPUT INSTAGRAM ## -->

                    <!-- ## INPUT EMAIL ## -->
                    <div class="form-control">
                        <label for="email">
                            <input type="text" name="email" placeholder="Email" id="email">
                            <span id="span-email">Email</span>
                        </label>
                    </div>
                    <!-- ## FIM INPUT EMAIL ## -->

                    <!-- ## INPUT TELEFONE ## -->
                    <div class="form-control">
                        <label for="telefone">
                            <input type="tel" name="tel" placeholder="telefone" id="telefone">
                            <span id="span-telefone">Telefone</span>
                        </label>
                    </div>
                    <!-- ## FIM INPUT TELEFONE ## -->

                    <!-- ## INPUT SENHA ## -->
                    <div class="form-control">
                        <label for="password">
                            <input type="password" name="password" placeholder="Senha" id="password">
                            <span id="span-password">Senha</span>
                        </label>
                    </div>
                    <!-- ## FIM INPUT SENHA ## -->

                    <!-- ## INPUT CONFIRMAR SENHA ## -->
                    <div class="form-control">
                        <label for="password-confirm">
                            <input type="password" name="password-confirm" placeholder="confirmar senha" id="password-confirm">
                            <span id="span-passconfirm">Confirmar senha</span>
                        </label>
                    </div>
                    <!-- ## FIM INPUT CONFIRMAR SENHA ## -->

                    <div class="form-control">
                        <button class="button-theme-lightblue" onclick="submit_register()" type="button">REGISTRAR</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <script src="js/alert/alert.js"></script>
    <script src="js/app.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    </body>
</html>