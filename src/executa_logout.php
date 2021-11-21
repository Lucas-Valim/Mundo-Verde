<?php

include_once "comum.php";

if ( is_session_started() === FALSE ) {
    session_start();
    if(isset($_SESSION["nome_usuario"]) && isset($_SESSION["id_usuario"])) {
        session_destroy();
        header("location: ./view/login.html");
        exit();
    } 
} 
?>