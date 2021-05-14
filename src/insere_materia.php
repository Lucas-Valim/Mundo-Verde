<?php
include_once "fachada.php";

$nome = isset($_POST["nome_materia"]) ? addslashes(trim($_POST["nome_materia"])) : FALSE;
$descricao = isset($_POST["descricao_materia"]) ? addslashes(trim($_POST["descricao_materia"])) : FALSE;
$nomeImagemTmp = basename($_FILES["anexo_materia"]["tmp_name"]);
$nomeImagemReal = basename($_FILES["anexo_materia"]["name"]);
$nomeImagemReal = str_replace(" ","_", $nomeImagemReal);

if (empty($nome) || empty($descricao) || empty($nomeImagemReal)){
    header("Location: ./view/cadastro_materias.php");
    echo "<script type=\"text/javascript\">alert('Voce nao preencheu todos os campos, verifique novamente!')</script>";
    exit;
}

$materia = new Materia(null, $nome, $descricao, "../uploads/$nomeImagemReal");

$dao = $factory->getMateriaDao();
$dao->insere($materia);

if (!file_exists("./uploads/"))
{
    mkdir("./uploads/");
}

if (move_uploaded_file($_FILES['anexo_materia']['tmp_name'], "./uploads/$nomeImagemReal")) {
    echo "Arquivo válido e enviado com sucesso.\n";
} else {
    echo "Erro ao enviar arquivo!\n";
}

header("Location: ./view/index.php");
exit;

?>