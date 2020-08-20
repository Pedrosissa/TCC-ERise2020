<?php
include_once("conexao.php"); // Fazendo a ligamento com o arquivo "conexao.php" //
$email = $_POST['email']; // Pegando o email // 
$cpf = $_POST['cpf']; // Pegando o CPF // 
$sql = "SELECT * FROM user WHERE email = '$email' OR cpf = '$cpf'"; // fazendo a busca no banco de dados //
$valida = mysqli_query($conn, $sql);
if (mysqli_num_rows($valida) == 1) { // Camparando se o email existe no banco ou não //
    // Se existir dará esse erro ''
    echo "
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/TCC/index.php'>
            <script type=\"text/javascript\">
                alert(\"Falha no cadastrado.\");
            </script>
        ";
} else {
    // Caso o email ou CPF não exista no banco //
    $nome = $_POST['nome']; // Pegandos os dados dos formularios no metodo POST e passandos os valores as variaveis //
    $email = $_POST['email'];
    $senha = MD5($_POST['senha']);
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $data = $_POST['datanasc']; // Pegandos os dados dos formularios no metodo POST e passandos os valores as variaveis //

    // Colocandos os dados na tabela no banco de dados //
    $user = "INSERT INTO user(nome, email, senha, cpf, rg, datanas, datacadas) VALUES ('$nome', '$email', '$senha', '$cpf', '$rg', '$data', NOW())";
    $user_finais = mysqli_query($conn, $user);

    // Informando se foi cadastrado ou não //
    if (mysqli_affected_rows($conn) != 0) {
        echo "
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/TCC/index.php'>
            <script type=\"text/javascript\">
                alert(\"Cadastrado com sucesso.\");
            </script>
        ";
    }
}
