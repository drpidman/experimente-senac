<!DOCTYPE html>
<html lang="pt-br">

    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="libs/fontawesome-free-6.4.0-web/css/all.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/alert/alert.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Experimente Senac</title>
    <body>
    <!-- Herosection abriga todo o conteudo que tera uma imagem de fundo -->
    <div class="herosection">
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
        <div class="content-wrapper">
            <!-- WRAPPER PARA ABRIGAR O BOTÃO E OS TEXTOS-->
            <div class="center-content-wrapper">
                <div class="center-item">
                    <h1>Comece uma nova jornada</h1>
                    <p style="margin-top: .5rem">Registre-se agora e venha nessa jornada nostalgica que te levara aos anos 80</p>
                </div>
                <div class="center-item">
                    <button class="button-theme-blue f-size-3" onclick="scroll_to_register()">REGISTRE-SE</button>
                </div>
            </div>
            <!-- FINAL DA CENTER-CONTENT-WRAPPER  -->
        </div>
        <!-- FINAL DA CONTENT-WRAPPER -->
    </div>
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

        <div class="container flex col align center f-size-2" data-aos="fade-up">
            <div class="container flex w-60 flex col p-4" data-aos="fade-up">
                <h1 class="m-top-1 m-bottom-1" data-aos="fade-up">Turma tecnico em informatica D22</h1>
                <section class="pre-bar" data-aos="fade-up">
                    Os futuros técnicos de informática D22", da unidade Senac - Registro/SP, são exemplos de como é possível aliar diversão e sustentabilidade.
                    Com a preocupação crescente em relação ao impacto do lixo eletrônico no meio ambiente, a D22 surgiu com a proposta de recolher e transformar esses resíduos em fliperamas divertidos e conscientes.
                </section>
                <h1 class="m-top-1 m-bottom-1" data-aos="fade-up">Nosso objetivo</h1>
                <section class="pre-bar m-bottom-1" data-aos="fade-up">
                    Construir um fliperama retro com materiais reaproveitados tem como objetivo principal a sustentabilidade e a economia, ao utilizar materiais que já existem em vez de comprar novos.
                    Além disso, essa atividade pode ser uma oportunidade de aprendizado sobre eletrônica, mecânica e programação, além de proporcionar diversão para amigos e familiares.
                    Em resumo, construir um fliperama retro com materiais reaproveitados é uma maneira criativa e sustentável de reutilizar materiais antigos e ter uma experiência nostálgica de jogos clássicos.
                </section>
                <h1 class="m-top-1 m-bottom-1" data-aos="fade-up">Nossa galeria</h1>
                <section class="grid-gallery m-top-1" data-aos="fade-up">
                    <img alt="Docflip d22" src="https://static.wixstatic.com/media/768eb9_96a37c4ae19d4cf8abe482047cb8e1e1~mv2.jpeg/v1/crop/x_0,y_0,w_1204,h_1478/fill/w_276,h_341,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/WhatsApp%20Image%202023-03-18%20at%2018_48_20.jpeg">
                    <img alt="Docflip d22" src="https://static.wixstatic.com/media/768eb9_68372c90f26f415ea613f629db311e96~mv2.jpg/v1/crop/x_0,y_5,w_1032,h_1209/fill/w_276,h_341,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/WhatsApp%20Image%202023-03-18%20at%2018_48_edited.jpg">
                    <img alt="Docflip d22" src="https://static.wixstatic.com/media/768eb9_c51de3c276ce4c86a3ffdecabea60648~mv2.jpeg/v1/crop/x_0,y_95,w_1204,h_1410/fill/w_276,h_341,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/WhatsApp%20Image%202023-03-18%20at%2018_48_20%20(2).jpeg">
                </section>
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