<?php
include_once("conexao.php"); // Fazendo a ligamento com o arquivo "conexao.php" //

$nome = $_POST['nome']; // Pegandos os dados dos formularios no metodo POST e passandos os valores as variaveis //
$email = $_POST['email'];
$text = $_POST['text']; // Pegandos os dados dos formularios no metodo POST e passandos os valores as variaveis //

// Colocandos os dados na tabela no banco de dados //
$user = "INSERT INTO suporte(nome, email, assun) VALUES ('$nome', '$email', '$text')";
$user_finais = mysqli_query($conn, $user);

// Informando se foi cadastrado ou não //
if (mysqli_affected_rows($conn) != 0) {
    echo "
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/TCC/index.php'>
            <script type=\"text/javascript\">
                alert(\"Contato realizado com sucesso.\");
            </script>
        ";
} else {
    echo "
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/TCC/index.php'>
        <script type=\"text/javascript\">
            alert(\"Falha ao realizar o contato.\");
        </script>
    ";
}
