<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" sizes="32x32" href="../designer/img/logo/@rise.png">
    <title>ERise - Loja</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- CSS Externo -->
    <link rel="stylesheet" href="../Designer/css/style.css">
    <link rel="stylesheet" href="../Designer/css/allstyle.css">
    <link rel="stylesheet" href="../Designer/css/Footer-white.css">
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
                    <li class="nav-item">
                        <a class="nav-link" href="../Admin/perfil.php">
                            Voltar
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
                <img src="../designer/img/carousel/img1.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2 id="titulo">Img1</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../designer/img/carousel/img2.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Img2</h2>
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../designer/img/carousel/img3.png" class="d-block w-100" alt="...">
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

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#promocao">Promoções <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active dropdown">
                    <a class="nav-link" dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Categorias <span class="sr-only">(current)</span>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Cateroria 1</a>
                            <a class="dropdown-item" href="#">Cateroria 2</a>
                            <a class="dropdown-item" href="#">Cateroria 3</a>
                            <a class="dropdown-item" href="#">Cateroria 4</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Cateroria 1</a>
                            <a class="dropdown-item" href="#">Cateroria 2</a>
                        </div>
                    </a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </div>
    </nav>

    <br>
    <br>

    <br>
    <section id="produtos" class="limit-space">

        <div class="row mb-4 mt-4">
            <div class="col">
                <h1 class="text-center mb-4 espacamentotxt">Mais vendidos</h1>
            </div>
        </div>

        <div id="sliderprodutos" class="carousel slide" data-ride="carousel">
            <!-- INICIO SLIDER-->


            <div class="carousel-inner">

                <div class="carousel-item active">

                    <div class="row">


                        <div class="col-sm">
                            <div class="card border-secondary">
                                <img class="card-img-top" src="src/img/imagem1.jpg" alt="" width="100px" height="180px">
                                <div class="card-body">
                                    <h5 class="card-title">Produto</h5>
                                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s,
                                        when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book.
                                    </p>
                                    <a class="btn btn-secondary" href="">Comprar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="card border-secondary">
                                <img class="card-img-top" src="src/img/imagem1.jpg" alt="" width="100px" height="180px">
                                <div class="card-body">
                                    <h5 class="card-title">Produto</h5>
                                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s,
                                        when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book.
                                    </p>
                                    <a class="btn btn-secondary" href="">Comprar</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm">
                            <div class="card border-secondary">
                                <img class="card-img-top" src="src/img/imagem1.jpg" alt="" width="100px" height="180px">
                                <div class="card-body">
                                    <h5 class="card-title">Produto</h5>
                                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s,
                                        when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book.
                                    </p>
                                    <a class="btn btn-secondary" href="">Comprar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="card border-secondary">
                                <img class="card-img-top" src="src/img/imagem1.jpg" alt="" width="100px" height="180px">
                                <div class="card-body">
                                    <h5 class="card-title">Produto</h5>
                                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s,
                                        when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book.
                                    </p>
                                    <a class="btn btn-secondary" href="">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="carousel-item">

                    <div class="row">
                        <div class="col-sm">
                            <div class="card border-secondary">
                                <img class="card-img-top" src="src/img/imagem1.jpg" alt="" width="100px" height="180px">
                                <div class="card-body">
                                    <h5 class="card-title">Produto</h5>
                                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s,
                                        when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book.
                                    </p>
                                    <a class="btn btn-secondary" href="">Comprar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="card border-secondary">
                                <img class="card-img-top" src="src/img/imagem1.jpg" alt="" width="100px" height="180px">
                                <div class="card-body">
                                    <h5 class="card-title">Produto</h5>
                                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s,
                                        when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book.
                                    </p>
                                    <a class="btn btn-secondary" href="">Comprar</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm">
                            <div class="card border-secondary">
                                <img class="card-img-top" src="src/img/imagem1.jpg" alt="" width="100px" height="180px">
                                <div class="card-body">
                                    <h5 class="card-title">Produto</h5>
                                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s,
                                        when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book.
                                    </p>
                                    <a class="btn btn-secondary" href="">Comprar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="card border-secondary">
                                <img class="card-img-top" src="src/img/imagem1.jpg" alt="" width="100px" height="180px">
                                <div class="card-body">
                                    <h5 class="card-title">Produto</h5>
                                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s,
                                        when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book.
                                    </p>
                                    <a class="btn btn-secondary" href="">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>

            <a class="carousel-control-prev" href="#sliderprodutos" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#sliderprodutos" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>

        </div><!-- fim slider -->

    </section>

    <!-- Fim Sessão Mais vendidos -->
    <br>
    <br>
    <div class="benecenter limit-space">
        <section id="promocao">

            <div class="row mb-4 mt-4">
                <div class="col">
                    <h1 class="text-center mb-4 espacamentotxt">Promoções</h1>
                </div>
            </div>

            <div id="sliderprodutos2" class="carousel slide" data-ride="carousel">
                <!-- INICIO SLIDER-->


                <div class="carousel-inner">

                    <div class="carousel-item active">

                        <div class="row">


                            <div class="col-sm">
                                <div class="card border-secondary">
                                    <img class="card-img-top" src="src/img/imagem1.jpg" alt="" width="100px" height="180px">
                                    <div class="card-body">
                                        <h5 class="card-title">Produto</h5>
                                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s,
                                            when an unknown printer took a galley of type and scrambled it to make a
                                            type specimen book.
                                        </p>
                                        <a class="btn btn-secondary" href="">Comprar</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="card border-secondary">
                                    <img class="card-img-top" src="src/img/imagem1.jpg" alt="" width="100px" height="180px">
                                    <div class="card-body">
                                        <h5 class="card-title">Produto</h5>
                                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s,
                                            when an unknown printer took a galley of type and scrambled it to make a
                                            type specimen book.
                                        </p>
                                        <a class="btn btn-secondary" href="">Comprar</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm">
                                <div class="card border-secondary">
                                    <img class="card-img-top" src="src/img/imagem1.jpg" alt="" width="100px" height="180px">
                                    <div class="card-body">
                                        <h5 class="card-title">Produto</h5>
                                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s,
                                            when an unknown printer took a galley of type and scrambled it to make a
                                            type specimen book.
                                        </p>
                                        <a class="btn btn-secondary" href="">Comprar</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="card border-secondary">
                                    <img class="card-img-top" src="src/img/imagem1.jpg" alt="" width="100px" height="180px">
                                    <div class="card-body">
                                        <h5 class="card-title">Produto</h5>
                                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s,
                                            when an unknown printer took a galley of type and scrambled it to make a
                                            type specimen book.
                                        </p>
                                        <a class="btn btn-secondary" href="">Comprar</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="carousel-item">

                        <div class="row">
                            <div class="col-sm">
                                <div class="card border-secondary">
                                    <img class="card-img-top" src="src/img/imagem1.jpg" alt="" width="100px" height="180px">
                                    <div class="card-body">
                                        <h5 class="card-title">Produto</h5>
                                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s,
                                            when an unknown printer took a galley of type and scrambled it to make a
                                            type specimen book.
                                        </p>
                                        <a class="btn btn-secondary" href="">Comprar</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="card border-secondary">
                                    <img class="card-img-top" src="src/img/imagem1.jpg" alt="" width="100px" height="180px">
                                    <div class="card-body">
                                        <h5 class="card-title">Produto</h5>
                                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s,
                                            when an unknown printer took a galley of type and scrambled it to make a
                                            type specimen book.
                                        </p>
                                        <a class="btn btn-secondary" href="">Comprar</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm">
                                <div class="card border-secondary">
                                    <img class="card-img-top" src="src/img/imagem1.jpg" alt="" width="100px" height="180px">
                                    <div class="card-body">
                                        <h5 class="card-title">Produto</h5>
                                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s,
                                            when an unknown printer took a galley of type and scrambled it to make a
                                            type specimen book.
                                        </p>
                                        <a class="btn btn-secondary" href="">Comprar</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="card border-secondary">
                                    <img class="card-img-top" src="src/img/imagem1.jpg" alt="" width="100px" height="180px">
                                    <div class="card-body">
                                        <h5 class="card-title">Produto</h5>
                                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s,
                                            when an unknown printer took a galley of type and scrambled it to make a
                                            type specimen book.
                                        </p>
                                        <a class="btn btn-secondary" href="">Comprar</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>

                <a class="carousel-control-prev" href="#sliderprodutos2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#sliderprodutos2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                </a>

            </div><!-- fim slider -->

        </section>
        <br>
        <br>
    </div>

    <!-- Fim promoções -->
    <section id="produtos" class="limit-space">

        <div class="row mb-4 mt-4">
            <div class="col">
                <h1 class="text-center mb-4 espacamentotxt">Mais procurados</h1>
            </div>
        </div>

        <div id="sliderprodutos" class="carousel slide" data-ride="carousel">
            <!-- INICIO SLIDER-->


            <div class="carousel-inner">

                <div class="carousel-item active">

                    <div class="row">


                        <div class="col-sm">
                            <div class="card border-secondary">
                                <img class="card-img-top" src="src/img/imagem1.jpg" alt="" width="100px" height="180px">
                                <div class="card-body">
                                    <h5 class="card-title">Produto</h5>
                                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s,
                                        when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book.
                                    </p>
                                    <a class="btn btn-secondary" href="">Comprar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="card border-secondary">
                                <img class="card-img-top" src="src/img/imagem1.jpg" alt="" width="100px" height="180px">
                                <div class="card-body">
                                    <h5 class="card-title">Produto</h5>
                                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s,
                                        when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book.
                                    </p>
                                    <a class="btn btn-secondary" href="">Comprar</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm">
                            <div class="card border-secondary">
                                <img class="card-img-top" src="src/img/imagem1.jpg" alt="" width="100px" height="180px">
                                <div class="card-body">
                                    <h5 class="card-title">Produto</h5>
                                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s,
                                        when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book.
                                    </p>
                                    <a class="btn btn-secondary" href="">Comprar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="card border-secondary">
                                <img class="card-img-top" src="src/img/imagem1.jpg" alt="" width="100px" height="180px">
                                <div class="card-body">
                                    <h5 class="card-title">Produto</h5>
                                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s,
                                        when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book.
                                    </p>
                                    <a class="btn btn-secondary" href="">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="carousel-item">

                    <div class="row">
                        <div class="col-sm">
                            <div class="card border-secondary">
                                <img class="card-img-top" src="src/img/imagem1.jpg" alt="" width="100px" height="180px">
                                <div class="card-body">
                                    <h5 class="card-title">Produto</h5>
                                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s,
                                        when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book.
                                    </p>
                                    <a class="btn btn-secondary" href="">Comprar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="card border-secondary">
                                <img class="card-img-top" src="src/img/imagem1.jpg" alt="" width="100px" height="180px">
                                <div class="card-body">
                                    <h5 class="card-title">Produto</h5>
                                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s,
                                        when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book.
                                    </p>
                                    <a class="btn btn-secondary" href="">Comprar</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm">
                            <div class="card border-secondary">
                                <img class="card-img-top" src="src/img/imagem1.jpg" alt="" width="100px" height="180px">
                                <div class="card-body">
                                    <h5 class="card-title">Produto</h5>
                                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s,
                                        when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book.
                                    </p>
                                    <a class="btn btn-secondary" href="">Comprar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="card border-secondary">
                                <img class="card-img-top" src="src/img/imagem1.jpg" alt="" width="100px" height="180px">
                                <div class="card-body">
                                    <h5 class="card-title">Produto</h5>
                                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s,
                                        when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book.
                                    </p>
                                    <a class="btn btn-secondary" href="">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>

            <a class="carousel-control-prev" href="#sliderprodutos" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#sliderprodutos" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>

        </div><!-- fim slider -->

    </section>

    <div class="beneficio">
        <div class="benecenter">
            <div class="imgcenter">
                <br>
                <br>
                <center>
                    <h2>Novidades</h2>
                </center>
                <br>
                <br>
                <div class="colunaesquerda">
                    <div class="img-nov-lg">
                        <img src="../designer/img/conteudo/banner2.jpg" alt="">
                    </div>
                </div>
                <div class="colunadireita">
                    <div class="img-nov-lg">
                        <img src="../designer/img/conteudo/banner2.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="finalcolunas"></div>
            <br>
            <br>
            <center>
                <div>
                    <br>
                    <br>
                    <br>
                    <br>
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