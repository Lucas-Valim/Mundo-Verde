<?php
include_once "fachada.php";

$nome = isset($_POST["nome_cadastro"]) ? addslashes(trim($_POST["nome_cadastro"])) : FALSE;
$email = isset($_POST["email_cadastro"]) ? addslashes(trim($_POST["email_cadastro"])) : FALSE;
$senha = isset($_POST["senha_cadastro"]) ? addslashes(trim($_POST["senha_cadastro"])) : FALSE;
$senhaConf = isset($_POST["repete_senha"]) ? addslashes(trim($_POST["repete_senha"])) : FALSE;


if (empty($nome) || empty($email) || empty($senha) || empty($senhaConf)){
    echo "<script type=\"text/javascript\">alert('Voce nao preencheu todos os campos, verifique novamente!')</script>"; 
    echo "<a href='/Sorte-Verde/src/view/cadastro.html'>Voltar ao cadastro</a>";
    header("../novousuario.php"); // <-- testar o redirect
    exit;
}

if (strcmp($senha, $senhaConf)) {
    echo "<script type=\"text/javascript\">alert('As senhas inseridas não estão iguais, verifique novamente!')</script>"; 
    echo "<a href='/Sorte-Verde/src/view/cadastro.html'>Voltar ao cadastro</a>";
    header("/insere_usuario.php"); // <-- testar o redirect
    exit;
}

$usuario = new Usuario(null, $senha, $nome, $telefone, $email, $cartaoCredito);
$dao = $factory->getUsuarioDao();
$dao->insere($usuario);

header("../usuarios.php");
exit;

?>