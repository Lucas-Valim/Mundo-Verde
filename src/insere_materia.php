<?php
include_once "fachada.php";

$nome = isset($_POST["nome_materia"]) ? addslashes(trim($_POST["nome_materia"])) : FALSE;
$descricao = isset($_POST["descricao_materia"]) ? addslashes(trim($_POST["descricao_materia"])) : FALSE;
$imagem = isset($_POST["anexo_materia"]) ? addslashes(trim($_POST["anexo_materia"])) : FALSE;

$imagem = "teste";

if (empty($nome) || empty($descricao) || empty($imagem)){
    echo "<script type=\"text/javascript\">alert('Voce nao preencheu todos os campos, verifique novamente!')</script>";
    header("Location: ./view/cadastro_materias.php");
    exit;
}

$materia = new Materia(null, $nome, $descricao, $imagem);
$dao = $factory->getMateriaDao();
$dao->insere($materia);

header("Location: ./view/index.php");
exit;

?>