<?php
    session_start();
    include_once("conexao.php"); // Fazendo a ligamento com o arquivo "conexao.php" //

    $nome = $_POST['nome']; // Pegandos os dados dos formularios no metodo POST e passandos os valores as variaveis //
    $categ = $_POST['categ'];  // Pegandos os dados dos formularios no metodo POST e passandos os valores as variaveis //
  
    if (isset($_SESSION['adm'])) {
        $userfinal = $_SESSION['adm'];
      } else {
        $userfinal = $_SESSION['client'];
      }

    // Colocandos os dados na tabela no banco de dados //
    $user = "INSERT INTO loja(nome, categorias, dataregistro, dono) VALUES ('$nome', '$categ', NOW(), '$userfinal')";    
    $user_finais = mysqli_query($conn, $user);

    // Informando se foi cadastrado ou não //
    if(mysqli_affected_rows($conn) != 0){
        echo "
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/TCC/admin/registro.php'>
            <script type=\"text/javascript\">
                alert(\"Loja registrada com sucesso.\");
            </script>
        ";
    }else{
        echo "
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/TCC/admin/registro.php'>
        <script type=\"text/javascript\">
            alert(\"Falha ao registrar a loja..\");
        </script>
    ";   
    }
