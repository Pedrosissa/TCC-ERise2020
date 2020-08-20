<?php
    include_once ("conexao.php"); // fazendo conexão com o banco //
    session_start(); // Iniciando uma sessão //
    
    if(isset($_POST['email']) && isset($_POST['senha'])){ // Vendo que foi enviado dados nos campos email e senha //
        $email = $_POST['email']; // Recebendo os dados pelo post //
        $senha = MD5($_POST['senha']);

        $user = "SELECT * FROM user WHERE email = '$email' AND senha = '$senha'"; // Inicio da consulta no banco //    
        $get = mysqli_query($conn, $user);
        $num = mysqli_num_rows($get);

        // Fim da consulta no banco //
        // Comparando se o usuario existe //
        if($num == 1){

            while($percorer = mysqli_fetch_array($get)){
                // Vendo se o usuario é um cliente ou adm
                // No banco por exemplo tem um campo chamado type, onde os adm tem o valor 1 e os clientes 0
                $adm = $percorer['type']; // pegando o valor do campo type
                $nome = $percorer['nome']; // Pegando o nome do usuario

                session_start();

                // Comparando se é um adm ou um cliente
                if($adm == 1){
                    // Iniciando a sessão de adm
                    $_SESSION['adm'] = $nome;
                    // Mandando ele pro index. php na pasta admin
                    header("location: ../admin/");
                }else{
                    // Iniciando a sessão de cliente
                    $_SESSION['client'] = $nome;
                    // Mandando ele pro index.php na pasta client
                    header("location: ../ERise/client/index.php");
                }
            }
        // Caso o email ou a senha não existir ou estiver incorreta ele vai ser mandado para pagina de login novamente.
        }else{
            echo "
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/TCC/ERise/login.php'>
            <script type=\"text/javascript\">
                alert(\"Senha ou usuario incorreta.\");
            </script>
        ";  
        }

    }
