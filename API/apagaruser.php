<?php
session_start();
include_once("conexao.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$resultado_delet = "DELETE FROM tab_users WHERE user_id ='$id'";
$resultado_deletado = mysqli_query($conn, $resultado_delet);

if (mysqli_affected_rows($conn)) {
    header("Location: ../admin/listar.php");
}else{
    header("Location: ../admin/listar.php");
}
