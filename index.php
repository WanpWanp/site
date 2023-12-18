<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/navegacao_menu.css">
    <link rel="stylesheet" href="./css/conhecimento.css">
    <link rel="stylesheet" href="./css/projeto.css">
    <link rel="stylesheet" href="./css/contato.css">
    <link rel="stylesheet" href="./css/orcamento.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/responsivo.css">
    <link rel="stylesheet" href="./css/joias_menu.css">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./img/portifolio/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./img/dispensa/favicon-32x32.png">
    <!--<link rel="manifest" href="/site.webmanifest">-->
    <style>
        .container {
            width: 97%;
            margin: 0 auto;
        }
    </style>
    <title>W.A.N.P Solução Site</title>
</head>

<body>

    <div class="container" style="box-shadow: 6px 2px 15px black">
        <div class="hamburguer">
            <!--Aplicando um fundo que impossibilia o usuário de usar a página enquanto o menu estiver aberto-->
            <div class="line" id="line1"></div>
            <div class="line" id="line2"></div>
            <div class="line" id="line3"></div>
            <span>Fechar</span>
        </div>
        <!--End .hamburguer-->
        <div class="backdrop"></div>

        <header id="home">

            <div class="img-wrapper">
                <img src="./img/portifolio/bg.jpg" alt="Simbolizando o desenvolvimento">
            </div>
            <!--End .img_wrapper-->
            <div class="banner">

                <!--<div class="perfil">
                    <img src="./img/perfil.jpg" alt="Foto de perfil de Willian">
                </div>
                End .perfil-->

                <div class="titulo">
                    <h1>Apresentação de aprendizado <br> em Front End</h1>
                </div>
                <!--End .titulo-->
                <p>Willian Pacheco</p>
                <a href="https://tecguilty.com/" target="_blank"><button>Saiba mais</button></a>
            </div>
            <!--End .banner-->

        </header>
        <!--End header-->

        <aside class="side-bar">
            <!--<div class="backdrop"></div>-->
            <nav>
                <ul class="menu">
                    <li class="menu-item"><a href="#home" class="menu-link" id="menu_link1">Home</a></li>
                    <li class="menu-item"><a href="#conhecimentos" class="menu-link" id="menu_link2">Conhecimento</a></li>
                    <!--<li class="menu-item"><a href="#projetos" class="menu-link" id="menu_link3">Projetos</a></li>-->
                    <li class="menu-item"><a href="#contato" class="menu-link" id="menu_link4">Contato</a></li>
                    <li class="menu-item"><a href="#orcamento" class="menu-link" id="menu_link5">Orçamento</a></li>
                    <!--<li class="menu-item"><a href="#" class="menu-link">Agradecimentos</a></li>-->
                </ul>
                <!--End .menu-->
            </nav>
            <div class="social-media">
                <a href="https://www.facebook.com/WANP-104641035111522" target="_blank"><i class="fab fa-facebook-square"></i></a>
                <!--<a href="http://api.whatsapp.com/send?text=Olá!%20:)%20como%20vai?%20Gostaria%20de%20informações&phone=5531993871955." target="_blank"><i class="fab fa-github-square"></i></a>-->
                <a href="https://github.com/willian-Axl-wanp" target="_blank"><i class="fab fa-github-square"></i></a>
                <!--<a href="http://wa.me/+5531993871955?text=Olá!%20:)%20como%20vai?%20Gostaria%20de%20informações." target="_blank"><i class="fab fa-whatsapp-square"></i></a>-->
                <a href="https://web.whatsapp.com/send?phone=+5531997175253&text=Olá!%20:)%20como%20vai?%20Gostaria%20de%20informações." target="_blank"><i class="fab fa-whatsapp-square"></i></a>
            </div>
            <!--End .social_media-->

        </aside>
        <!--End .side_bar-->

        <section class="sessao-conhecimento" id="conhecimentos">
            <div class="sessao-header">
                <h1>Conhecimentos</h1>
            </div>
            <!--End .sessao-header-->
            <div class="conhecimentos">
                <div class="conhecimento">
                    <div class="conhecimento-header">
                        <i class="fab fa-html5"></i>
                        <h3>HTML</h3>
                    </div>
                    <!--End .conhecimento-header-->
                    <div class="conhecimento-text">
                        <p>Conhecimento em HTML, curso em html, conhecimento prévio. <br> É uma das três linguagens básicas da internet, é usada ao lado de CSS e JavaScript. <br>
                        </p>
                    </div>
                    <!--End .conhecimento-text-->
                </div>
                <!--End .conhecimento-->
                <div class="conhecimento">
                    <div class="conhecimento-header">
                        <i class="fab fa-css3-alt"></i>
                        <h3>CSS</h3>
                    </div>
                    <!--End .conhecimento-header-->
                    <div class="conhecimento-text">
                        <p>Meu conhecimento em CSS está sempre em espansão, pois sempre tem mais oque se aprender. <br> É uma das três linguagens básicas para se criar um conteúdo em rede. Está linguagem da estilo para as páginas no navegador. </p>
                    </div>
                    <!--End .conhecimento-text-->
                </div>
                <!--End .conhecimento-->
                <div class="conhecimento ">
                    <div class="conhecimento-header">
                        <i class="fab fa-wordpress"></i>
                        <h3>Wordpress</h3>
                    </div>
                    <!--End .conhecimento-header-->
                    <div class="conhecimento-text">
                        <p>Meu conhecimento no Wordpress vem de uma crescente, um framework muito amplo de possibiliadades. Sempre em busca de avançar cada vez mais nesta ferramenta que venho para auxiliar muito.</p>
                    </div>
                </div>
                <!--End .conhecimento-->
                <div class="conhecimento">
                    <div class="conhecimento-header">
                        <i class="fab fa-js"></i>
                        <h3>JavaScript</h3>
                    </div>
                    <!--End .conhecimento-header-->
                    <div class="conhecimento-text">
                        <p>Esta é uma parte muito importante para as páginas do navegador. <br> Ela faz com as funcionalidades da página, autentificações, entre outros, sejam bem claras e evitem erros. </p>
                    </div>
                </div>
                <!--End .conhecimento-->
                <!--<div class="conhecimento">-->
                <!--<div class="conhecimento-header">-->
                <!--<i class="fab fa-bootstrap"></i>-->
                <!--<h3>Bootstrap</h3>-->
                <!--</div>-->
                <!--End .conhecimento-header-->
                <!--<div class="conhecimento-text">-->
                <!--<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero distinctio amet, alias aliquid est totam itaque asperiores quo eos! Dicta, est sint a veritatis fugiat omnis iusto veniam culpa dolor?</p>-->
                <!--</div>-->
                <!--</div>-->
                <!--End .conhecimento-->
                <div class="conhecimento">
                    <div class="conhecimento-header">
                        <i class="fab fa-github"></i>
                        <h3>Git e GitHub</h3>
                    </div>
                    <!--End .conhecimento-header-->
                    <div class="conhecimento-text">
                        <p>Com intuito de expor meus maiores conhecimentos, escalei o Git e GitHub. <br> Essa ferramenta auxilia muiro na criação e controle de projetos. Ainda há muito para adquir para meu pessoal mas ja me abre muitas portas com meu conhecimento.</p>
                    </div>
                </div>
                <!--End .conhecimento-->
                <div class="conhecimento-img-wrapper">
                    <img src="./img/portifolio/conhecimento1.png" alt="Conhecimento">
                </div>
                <!--End .conhecimento-img-wrapper-->
            </div>
            <!--End .conhecimentos-->
        </section>
        <!--End .sessao-conhecimento-->

        <!--Ascrescentar aqui a sessao de projetos no futuro-->

        <section class="sessao-contato" id="contato">
            <div class="contato-wrapper">
                <div class="contato-left"></div>
                <!--End .contato-left-->
                <div class="contato-right">
                    <h1>Contato</h1>
                    <form>
                        <div class="input-group">
                            <input type="text" class="field" id="nome" required>
                            <label for="nome" class="field-label">Nome</label>
                        </div>
                        <!--End .input-group-->
                        <div class="input-group">
                            <input type="text" class="field" id="email" required>
                            <label for="email" class="field-label">E-mail</label>
                        </div>
                        <!--End .input-group-->
                        <div class="input-group">
                            <input type="tel" class="field" id="num_contato" required>
                            <label for="email" class="field-label">Celular</label>
                        </div>
                        <!--End .input-group-->
                        <div class="input-group">
                            <textarea class="field" id="mensagem"></textarea>
                            <label for="mensagem" class="field-label">Mensagem</label>
                        </div>
                        <!--End .input-group-->
                        <button type="submit" class="btn btn-submit">Enviar</button>
                    </form>
                    <!--End .form-->
                </div>
                <!--End .contato-right-->
            </div>
            <!--End .contato-wrapper-->
        </section>
        <!--End .sessao-contato-->

        <section class="sessao-orcamento" id="orcamento">
            <div class="orcamento-wrapper">
                <h1>Faça um orcamento</h1>
                <form action="">
                    <label for="qtde">Qtde de páginas</label>
                    <input type="number" min="1" name="qtde" id="qtde">
                    <label for="js">Preciso de um script JS</label>
                    <input type="checkbox" name="js" id="js">
                    <label>Layout</label>
                    <div class="group-layout">
                        <div>
                            <input type="radio" name="layout" id="layout-sim">
                            <label for="layout-sim">Preciso de um layout</label>
                        </div>
                        <!--End .-->
                        <div>
                            <input type="radio" name="layout" id="layout-nao">
                            <label for="layout-nao">Já tenho um layout</label>
                        </div>
                        <!--End .-->
                    </div>
                    <label for="prazo">Prazo</label>
                    <input type="range" name="prazo" id="prazo" min="1" max="10">
                    <label id="preco"></label>
                    <!--<button type="submit" class="btn btn-orcamento">Enviar</button>-->
                </form>
                <!--End form-->
            </div>
            <!--End .orcamento-wrapper-->
        </section>
        <!--End .orcamento-->
        <footer>
            <div class="footer-content">
                <p>
                    copyright &copy: 2021, W.AN.P - Todos os direitos reservados
                </p>
                <!--End p-->
                <div class="social-list">
                    <ul>
                        <li class="li"><a href=""><i class="fab fa-facebook"></i></a></li>
                        <li class="li"><a href=""><i class="fab fa-whatsapp"></i></a></li>
                        <li class="li"><a href=""><i class="fab fa-github"></i></a></li>
                    </ul>
                    <!--End ul-->
                </div>
                <!--End .social-list-->
            </div>
            <!--End .footer-content-->
        </footer>
        <!--end footer-->
        <a href="#home" id="link-topo">
            <i class="fas fa-arrow-up"></i>
        </a>
        <!--End i-->
    </div>
    <!--End .container-->

</body>

<script src="js/abrir_menu.js"></script>
<script src="js/calc_orcamento.js"></script>

</html>