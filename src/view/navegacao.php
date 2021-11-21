<?php
include_once "../verifica_adm.php";

// Navigation
echo"<nav class=\"navbar navbar-expand-lg bg-secondary text-uppercase fixed-top\" id=\"mainNav\">";
    echo"<div class=\"container\">";
        echo"<a class=\"navbar-brand js-scroll-trigger\" href=\"index.php\">Mundo Verde</a>";
        echo"<button class=\"navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">Menu<i class=\"fas fa-bars\"></i>";
        echo"</button>";
        echo"<div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">";
            echo"<ul class=\"navbar-nav ml-auto\">";
            echo"<li class=\"nav-item mx-0 mx-lg-1\"><a class=\"nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger\" href=\"cadastro.html\">Cadastro</a></li>";
            echo"<li class=\"nav-item mx-0 mx-lg-1\"><a class=\"nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger\" href=\"login.html\">Login</a></li>";
            echo"<li class=\"nav-item mx-0 mx-lg-1\"><a class=\"nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger\" href=\"ponto_coleta.php\">Coleta</a></li>";
            echo"<li class=\"nav-item mx-0 mx-lg-1\"><a class=\"nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger\" href=\"cadastro_materias.php\">Cadastrar Materia</a></li>";
                
            if($_SESSION["permissao_usuario"] == 2){
                    
                echo"<li class=\"nav-item mx-0 mx-lg-1\"><a class=\"nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger\" href=\"cadastro_pontos.php\">Cadastrar Ponto de Coleta</a></li>";
                
            }
            echo"</ul>";
            $usuario_logado = $_SESSION["nome_usuario"];
            echo $usuario_logado;
            echo"<form id=\"form_logout\" action=\"../executa_logout.php\" method=\"POST\" role=\"form\">";
                echo"<a href=\"javascript:$('#form_logout').submit();\" class=\"btn btn-primary btn-user btn-block\">Deslogar</a>";
            echo"</form>";
        echo"</div>";
    echo"</div>";
echo"</nav>";

?>