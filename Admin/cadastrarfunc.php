<?php
session_start();
include_once "conexao.php"
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <link rel="icon" type="image/png" sizes="32x32" href="img/@rise.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ERP - ERise</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-text mx-3"> ERP <p>
                        <i style="font-size: 10px;">AllRise System</i>
                </div>
            </a>
            <button type="button" class="btn btn-primary">
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php" style="font-size: 10px;"> Voltar </a>
            </button><br>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a style="width: 100%;"></a>


                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                <?php
                                if (isset($_SESSION['adm'])) {
                                    echo $_SESSION['adm'];
                                } else {
                                    echo $_SESSION['client'];
                                }
                                ?>
                            </span>
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Sair
                            </a>
                        </div>
                    </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <center>
                        <form action="../API/admin/cadastrofuncback.php" method="POST">
                            <div class="form-group">
                                <label for="" class="textologin">Nome</label><br>
                                <input type="text" class="form-control" style="width: 550px;" placeholder="Nome" name="nome" id="nome" required>
                            </div>
                            <div class="form-group">
                                <label for="" class="textologin">E-Mail</label><br>
                                <input type="email" class="form-control" style="width: 550px;" placeholder="E-mail" name="email" id="email" required>
                            </div>
                            <div class="form-group">
                                <label for="" class="textologin">Senha</label><br>
                                <input type="password" class="form-control" style="width: 550px;" placeholder="Senha" name="senha" id="senha" required>
                            </div>
                            <div class="form-group">
                                <label for="" class="textologin">CPF</label><br>
                                <input type="text" class="form-control" style="width: 550px;" placeholder="CPF" name="cpf" id="cpf" required>
                            </div>
                            <div class="form-group">
                                <label for="" class="textologin">RG</label><br>
                                <input type="text" class="form-control" style="width: 550px;" placeholder="RG" name="rg" id="rg" required>
                            </div>
                            <div class="form-group">
                                <label for="" class="textologin">Data Nascimento</label><br>
                                <input type="date" class="form-control" style="width: 550px;" placeholder="Data de Nascimento" id="datanas" name="datanasc" required>
                            </div>
                            <div class="form-group">
                                <label for="" class="textologin">Profissão</label><br>
                                <select id="prof" name="prof" required class="form-control" style="width: 550px;"><br>
                                    <option value="serv"> </option>
                                    <option value="Programador">Programador</option>
                                    <option value="Designer">Designer</option>
                                    <option value="Marketing">Marketing</option>
                                    <option value="Vendedores">Vendedores</option>
                                </select>
                            </div>
                            <br>
                            <button type="input" class="btn btn-primary btn-sm">Cadastrar</button><br>
                    </center>

                </div>
            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Deseja mesmo sair?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Caso for um engano aperte em cancelar, caso ao contrário em desconectar.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                        <a class="btn btn-primary" href="../API/sair.php">Desconectar</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/chart-area-demo.js"></script>
        <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>