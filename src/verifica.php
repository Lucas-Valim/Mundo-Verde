<?php 
// Inicia sessão
include_once "comum.php";

//if ( is_session_started() === FALSE ) {
    session_start();
//}

error_log("LOGIN");

// Verifica se existe os dados da sessão de login
if(!isset($_SESSION["ID_USUARIO"]) || !isset($_SESSION["NOME"]))
{
    error_log("SEM USUÀRIO LOGADO - Voltando para Login");
    // Usuário não logado
    header("Location: ../index.html");
    exit;
}
?>