<?php
session_start();

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" sizes="32x32" href="../designer/img/logo/@rise.png">
    <title>ERise</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- CSS Externo -->
    <link rel="stylesheet" href="../designer/css/style.css">
    <link rel="stylesheet" href="../designer/css/stylerise.css">
    <link rel="stylesheet" href="../designer/css/Footer-white.css">
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <!-- Icones -->

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light .menutopfix">

        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../admin/index.php">
                            <img src="../designer/img/icons/chevron-left.svg" alt="" width="15" height="15" title="Voltar">
                            Voltar
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="imgcenter">
        <center>
            <h2>
                <?php
                if (isset($_SESSION['adm'])) {
                    echo $_SESSION['adm'];
                    $nome = $_SESSION['adm'];
                } else {
                    echo $_SESSION['client'];
                    $nome = $_SESSION['client'];
                }
                ?>
            </h2>
        </center>
        <br>
        <br>
        <hr>
        <br>
        <br>
        <div class="colunaesquerda">
            <div>
                <h2>
                    Opções do perfil
                </h2>
                <br>
                <br>
                <button type="button" class="btn btn-outline-primary btn-lg" style="width: 450px;">Editar</button>
                <br>
                <br>
                <button type="button" class="btn btn-outline-secondary btn-lg" style="width: 450px;"><a href="../Lojas/index.php"> Visualizar loja </a></button>
                <br>
                <br>
                <button type="button" class="btn btn-outline-success btn-lg" style="width: 450px;" data-toggle="modal" data-target="#staticBackdrop">Termos</button>
                <br>
                <br>
                <button type="button" class="btn btn-outline-danger btn-lg" style="width: 450px;" data-toggle="modal" data-target="#exampleModal">Deletar</button>

            </div>
        </div>
        <div class="colunadireita">
            <h2>Informações extras</h2>
            <br>
            <form action="#" method="POST">
                <div class="form-group">
                    <label for="" class="textologin">Telefone</label><br>
                    <input class="form-control formlogin" type="text" placeholder="Telefone" name="telefone" id="telefone" maxlength="15" onkeyup="mascara( this, mtel );">
                </div>
                <div class="form-group">
                    <label for="" class="textologin">CEP</label><br>
                    <input class="form-control formlogin" type="text" placeholder="CEP" name="cep" id="cep">
                </div>
                <div class="form-group">
                    <label for="" class="textologin">Logradouro</label><br>
                    <input class="form-control formlogin" type="text" placeholder="Logradouro" name="lograd" id="logradouro">
                </div>
                <div class="form-group">
                    <label for="" class="textologin">Numero</label><br>
                    <input class="form-control formlogin" type="text" placeholder="Numero" name="num" id="numero">
                </div>
                <div class="form-group">
                    <label for="" class="textologin">Complemento</label><br>
                    <input class="form-control formlogin" type="text" placeholder="Complemento" name="comple" id="complemento">
                </div>
                <div class="form-group">
                    <label for="" class="textologin">Bairro</label><br>
                    <input class="form-control formlogin" type="text" placeholder="Bairro" name="bairro" id="bairro">
                </div>
                <div class="form-group">
                    <label for="" class="textologin">Estado</label><br>
                    <select id="uf" name="uf" class="form-control formlogin"><br>
                        <option value="NULL"> </option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select>
                </div>
                <br>
                <button type="submit" class="btn btn-outline-primary btn-lg" style="margin-left: 25%;">Enviar </button>
                <br>
                <br>
            </form>
        </div>
    </div>
    <div class="finalcolunas"></div>
    <br>
    <br>
    <center>
        <div>
            <p class="campea">
            </p>
        </div>
    </center>
    <br><br>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmação</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Certeza que deseja excluir a sua conta no sistema da ERise?
                    <p>Saiba que esse procedimento não poderá ser desfeito depois.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary">Excluir</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Termos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="text-align: justify;">
                    <i>
                        <b>1º</b> ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        <b>2º</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        <b>3º</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </i>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Não aceito</button>
                    <button type="button" class="btn btn-primary">Aceito</button>
                </div>
            </div>
        </div>
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
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">
        $("#cep").focusout(function() {
            //Início do Comando AJAX
            $.ajax({
                //O campo URL diz o caminho de onde virá os dados
                //É importante concatenar o valor digitado no CEP
                url: 'https://viacep.com.br/ws/' + $(this).val() + '/json/unicode/',
                //Aqui você deve preencher o tipo de dados que será lido,
                //no caso, estamos lendo JSON.
                dataType: 'json',
                //SUCESS é referente a função que será executada caso
                //ele consiga ler a fonte de dados com sucesso.
                //O parâmetro dentro da função se refere ao nome da variável
                //que você vai dar para ler esse objeto.
                success: function(resposta) {
                    //Agora basta definir os valores que você deseja preencher
                    //automaticamente nos campos acima.
                    $("#logradouro").val(resposta.logradouro);
                    $("#complemento").val(resposta.complemento);
                    $("#bairro").val(resposta.bairro);
                    $("#cidade").val(resposta.localidade);
                    $("#uf").val(resposta.uf);
                    //Vamos incluir para que o Número seja focado automaticamente
                    //melhorando a experiência do usuário
                    $("#numero").focus();
                }
            });
        });
    </script>
    <script type="text/javascript">
        /* Máscaras ER */
        function mascara(o, f) {
            v_obj = o
            v_fun = f
            setTimeout("execmascara()", 1)
        }

        function execmascara() {
            v_obj.value = v_fun(v_obj.value)
        }

        function mtel(v) {
            v = v.replace(/\D/g, ""); //Remove tudo o que não é dígito
            v = v.replace(/^(\d{2})(\d)/g, "($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
            v = v.replace(/(\d)(\d{4})$/, "$1-$2"); //Coloca hífen entre o quarto e o quinto dígitos
            return v;
        }

        function id(el) {
            return document.getElementById(el);
        }
        window.onload = function() {
            id('telefone').onkeyup = function() {
                mascara(this, mtel);
            }
        }
    </script>
</body>

</html>