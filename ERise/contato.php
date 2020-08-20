<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" sizes="32x32" href=".../designer/img/logo/@rise.png">
    <title>ERise</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- CSS Externo -->
    <link rel="stylesheet" href="../designer/css/style.css">
    <link rel="stylesheet" href="../designer/css/stylerise.css">
    <link rel="stylesheet" href="../designer/css/Footer-white.css">
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ"
        crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY"
        crossorigin="anonymous"></script>
    <!-- Icones -->

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light menutopfix">

        <div class="container-fluid">
            <button type="button" id="sidebarCollapse" class="btn btn-info">
                <a href="../index.php">
                    <img src="../designer/img/icons/chevron-left.svg" alt="" width="15" height="15" title="Voltar">
                    <span> Voltar </span>
                </a>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-align-justify"></i>
            </button>
        </div>
    </nav>
    <div class="logindiv">

        <center>
            <h2>Contato</h2>
            <br>
            <form action="../API/cadastroassun.php" method="POST">
            <div class="form-group">
                    <label for="" class="textologin">Nome</label><br>
                    <input class="formlogin" type="text" placeholder="Nome" name="nome" required>
                </div>
                <div class="form-group">
                    <label for="" class="textologin">E-mail</label><br>
                    <input class="formlogin" type="email" placeholder="E-Mail" name="email" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Assunto</label>
                    <textarea class="form-control assuntoform" id="exampleFormControlTextarea1" rows="3" placeholder="Assunto" name="text" required></textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-outline-primary">Enviar</button>
        </center>
        </form>
    </div>
    <footer id="myFooter">
        <div class="container">
            <ul>
                <li><a href="../index.php">
                        <img src="../designer/img/icons/info-circle.svg" alt="" width="18" height="18" title="Sobre">
                        Sobre</a></li>
                <li><a href="contato.php">
                        <img src="../designer/img/icons/chat-dots.svg" alt="" width="18" height="18" title="Contato">
                        Contato</a></li>
                <li><a href="../index.php">
                        <img src="../designer/img/icons/code-slash.svg" alt="" width="18" height="18" title="Serviços">
                        Serviços</a></li>
            </ul>
            <p class="footer-copyright">© 2020 Copyright - AllRise System</p>
        </div>
    </footer>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>