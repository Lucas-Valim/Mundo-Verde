<?php
require("conexao.php");

include_once './fachada.php';

function parseToXML($htmlStr){
	$xmlStr=str_replace('<','&lt;',$htmlStr);
	$xmlStr=str_replace('>','&gt;',$xmlStr);
	$xmlStr=str_replace('"','&quot;',$xmlStr);
	$xmlStr=str_replace("'",'&#39;',$xmlStr);
	$xmlStr=str_replace("&",'&amp;',$xmlStr);
	return $xmlStr;
}

$dao = $factory->getPontoColetaDao();
$pontos = $dao->buscaTodos();

header("Content-type: text/xml");

// Start XML file, echo parent node
echo '<markers>';

if ($pontos)
{

  foreach ($pontos as $ponto)
  {
    echo '<marker ';
    echo 'name="' . parseToXML($ponto->getName()) . '" ';
    echo 'address="' . parseToXML($ponto->getAddress()) . '" ';
    echo 'lat="' . $ponto->getLat() . '" ';
    echo 'lng="' . $ponto->getLng() . '" ';
  
    $dao = $factory->getDescarteDao();
    $descarte = $dao->buscaPorId($ponto->getId_descarte());
    
    if($descarte){
      echo 'type="' . $descarte->getNome() . '" ';
    }
  
    echo '/>';

  }
}
// End XML file
echo '</markers>';



