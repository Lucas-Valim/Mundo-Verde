<?php 
// Inicia sessões 
include_once "comum.php";
		
if ( is_session_started() === FALSE ) {
    session_start();
}

error_log("LOGIN");

// Verifica se existe os dados da sessão de login 
if(!isset($_SESSION["id_usuario"]) || !isset($_SESSION["nome_usuario"]) && $_SESSION["permissao_usuario"] != 2) 
{ 
    error_log("USUÁRIO NÃO É ADMINISTRADOR- Voltando para Login");
    // Usuário administrador não logado!!
    header("Location: ./index.html");
    exit; 
}
?>