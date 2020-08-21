<?php
    include_once("../conexao.php"); // Fazendo a ligamento com o arquivo "conexao.php" //

    $tell = $_POST['telefone']; // Pegandos os dados dos formularios no metodo POST e passandos os valores as variaveis //
    $rua = $_POST['lograd']; 
    $num = $_POST['num']; 
    $compl = $_POST['comple']; 
    $cidade = $_POST['cidade'];
    $neigh = $_POST['bairro']; // Pegandos os dados dos formularios no metodo POST e passandos os valores as variaveis //
    $cep = $_POST['cep'];

    // Colocandos os dados na tabela no banco de dados //
    $user = "INSERT INTO tab_users(user_nome, user_email, user_password, user_cpf, user_rg, user_data_nasc, user_data_cadas) VALUES ('$nome', '$email', '$senha', '$cpf', '$rg', '$data', NOW())";    
    $user_finais = mysqli_query($conn, $user);

    // Informando se foi cadastrado ou não //
    if(mysqli_affected_rows($conn) != 0){
        echo "
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/TCC/admin/cadastro.php'>
            <script type=\"text/javascript\">
                alert(\"Cadastrado com sucesso.\");
            </script>
        ";
    }else{
        echo "
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/TCC/admin/cadastro.php'>
        <script type=\"text/javascript\">
            alert(\"Falha no cadastrado.\");
        </script>
    ";   
    }
?>