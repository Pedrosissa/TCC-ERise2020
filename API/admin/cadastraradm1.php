<?php
    include_once("../conexao.php"); // Fazendo a ligamento com o arquivo "conexao.php" //

    $nome = $_POST['nome']; // Pegandos os dados dos formularios no metodo POST e passandos os valores as variaveis //
    $email = $_POST['email']; 
    $senha = $_POST['senha']; 
    $cpf = $_POST['cpf']; 
    $rg = $_POST['rg'];
    $data = $_POST['datanasc']; // Pegandos os dados dos formularios no metodo POST e passandos os valores as variaveis //
  
    // Colocandos os dados na tabela no banco de dados //
    $user = "INSERT INTO user(nome, email, senha, cpf, rg, datanas, datacadas) VALUES ('$nome', '$email', '$senha', '$cpf', '$rg', '$data', NOW())";    
    $user_finais = mysqli_query($conn, $user);

    // Informando se foi cadastrado ou não //
    if(mysqli_affected_rows($conn) != 0){
        echo "
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/admin/cadastro.php'>
            <script type=\"text/javascript\">
                alert(\"Cadastrado com sucesso.\");
            </script>
        ";
    }else{
        echo "
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/admin/cadastro.php'>
        <script type=\"text/javascript\">
            alert(\"Falha no cadastrado.\");
        </script>
    ";   
    }
?>