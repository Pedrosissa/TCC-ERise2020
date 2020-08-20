<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" sizes="32x32" href="designer/img/logo/@rise.png">
    <title>ERise</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- CSS Externo -->
    <link rel="stylesheet" href="designer/css/style.css">
    <link rel="stylesheet" href="designer/css/allstyle.css">
    <link rel="stylesheet" href="designer/css/Footer-white.css">
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <!-- Icones -->

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light menutop">

        <div class="container-fluid">
            <button type="button" id="sidebarCollapse" class="btn btn-outline-primary">
                <a href="ERise/contato.php">
                    <img src="designer/img/icons/chat-dots.svg" alt="" width="15" height="15" title="Contato">
                    <span class="margem-bt-cont"> Contato </span>
                </a>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-align-justify"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="ERise/login.php">
                            <img src="designer/img/icons/person-fill.svg" alt="" width="15" height="15" title="Login">
                            Login
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ERise/cadastro.php">
                            <img src="designer/img/icons/person-plus-fill.svg" alt="" width="15" height="15" title="Cadastro">
                            Cadastro
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="designer/img/carousel/img1.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2 id="titulo">Img1</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img src="designer/img/carousel/img2.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Img2</h2>
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="designer/img/carousel/img3.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Img3</h2>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
    </div>
    <br>
    <br>
    <div class="corpo">
        <center>
            <h2 class="texttitulo">Sobre a empresa</h2>
        </center>
        <br>
        <br>
        <div class="conteudo">
            <div class="imgconteudo">
                <img src="designer/img/conteudo/banner2.jpg" width="450px" height="350px" alt="Imagem do Conteudo" class="rounded border border-secondary">
            </div>
            <div class="textconteudo">
                <center>
                    <h2 class="texttitulo"> E-Rise</h2>
                </center>
                <br>
                <p>
                    O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por estas indústrias desde o ano de 1500, quando uma misturou os caracteres de um texto para criar um espécime de livro. Este texto não só sobreviveu 5 séculos, mas também o salto para a tipografia electrónica, mantendo-se essencialmente inalterada. Foi popularizada nos anos 60 com a disponibilização das folhas de Letraset.
                </p>
            </div>
        </div>
    </div>
    <br>
    <div class="corpo">
        <br>
        <div class="conteudo">

            <div class="textconteudo">
                <center>
                    <h2 class="texttitulo"> AllRise System </h2>
                </center>
                <br>
                <p>
                    O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por estas indústrias desde o ano de 1500, quando uma misturou os caracteres de um texto para criar um espécime de livro. Este texto não só sobreviveu 5 séculos, mas também o salto para a tipografia electrónica, mantendo-se essencialmente inalterada. Foi popularizada nos anos 60 com a disponibilização das folhas de Letraset.
                </p>
            </div>
            <div class="imgconteudo">
                <img src="designer/img/conteudo/banner2.jpg" width="450px" height="350px" alt="Imagem do Conteudo" class="rounded border border-secondary">
            </div>
        </div>
    </div>
    <br>

    <div class="beneficio">
        <div class="benecenter">
            <div class="imgcenter">
                <br>
                <br>
                <center>
                    <h2>Benefício</h2>
                </center>
                <br>
                <br>
                <div class="colunaesquerda">
                    <p class="textobeneficio">
                        <img src="designer/img/icons/shield-lock.svg" alt="" width="18" height="18" title="Segurança">
                        Sua empresa estará segura.
                    </p>
                    <p class="textobeneficio">
                        <img src="designer/img/icons/wifi.svg" alt="" width="18" height="18" title="Conectada">
                        Sua empresa estará conectada ao mundo.
                    </p>
                    <p class="textobeneficio">
                        <img src="designer/img/icons/tools.svg" alt="" width="18" height="18" title="Ferramentas">
                        Tenha acesso a ferramentas administrativas.
                    </p>
                    <p class="textobeneficio">
                        <img src="designer/img/icons/house.svg" alt="" width="18" height="18" title="Casa">
                        Administre sua empresa de qualquer lugar.
                    </p>
                </div>
                <div class="colunadireita">
                    <p class="textobeneficio">
                        <img src="designer/img/icons/graph-up.svg" alt="" width="18" height="18" title="Graficos">
                        Tenha acesso a gráficos.
                    </p>
                    <p class="textobeneficio">
                        <img src="designer/img/icons/people.svg" alt="" width="18" height="18" title="Funcionarios">
                        Tenha controle de seus funcionários.
                    </p>
                    <p class="textobeneficio">
                        <img src="designer/img/icons/envelope.svg" alt="" width="18" height="18" title="Marketing">
                        Faça seu próprio marketing.
                    </p>
                    <p class="textobeneficio">
                        <img src="designer/img/icons/chat-square-quote.svg" alt="" width="18" height="18" title="Chat">
                        Converse com seus clientes.
                    </p>
                </div>
            </div>
            <div class="finalcolunas"></div>
            <br>
            <br>
            <center>
                <div>
                    <p class="campea">
                        <img src="designer/img/icons/award.svg" alt="" width="25" height="25" title="Campeao">
                        Conosco sua empresa será campeã de vendas!
                    </p>
                </div>
            </center>
            <br><br>
        </div>
        <br>
        <br>
        <br>
        <br>
        <footer id="myFooter">
            <div class="container">
                <ul>
                    <li><a href="index.php">
                            <img src="designer/img/icons/info-circle.svg" alt="" width="18" height="18" title="Sobre">
                            Sobre</a></li>
                    <li><a href="ERise/contato.php">
                            <img src="designer/img/icons/chat-dots.svg" alt="" width="18" height="18" title="Contato">
                            Contato</a></li>
                    <li><a href="index.html">
                            <img src="designer/img/icons/code-slash.svg" alt="" width="18" height="18" title="Serviços">
                            Serviços</a></li>
                </ul>
                <p class="footer-copyright">© 2020 Copyright - AllRise System</p>
            </div>
        </footer>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>