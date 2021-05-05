<?php
include_once "./fachada.php";

$name = isset($_POST["name"]) ? addslashes(trim($_POST["name"])) : FALSE;
$address = isset($_POST["address"]) ? addslashes(trim($_POST["address"])) : FALSE;
$lat = isset($_POST["lat"]) ? addslashes(trim($_POST["lat"])) : FALSE;
$lng = isset($_POST["lng"]) ? addslashes(trim($_POST["lng"])) : FALSE;
$type = isset($_POST["type"]) ? addslashes(trim($_POST["type"])) : FALSE;

if (empty($name) || empty($address) || empty($lat) || empty($lng) || empty($type)){
    $_SESSION['msg'] = "<span style='color: green';>Preencha todos os campos!Tente novamente.</span>";
    header("./view/cadastrar.php"); // <-- testar o redirect
    exit;
}


$ponto = new PontoColeta(null, $name, $address, $lat, $lng, $type);
$dao = $factory->getPontoColetaDao();
$dao->insere($ponto);

header("Location: ./view/index.php");
exit;

?>