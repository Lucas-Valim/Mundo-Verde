<?php

include_once('model/Usuario.php');
include_once('model/PontoColeta.php');
include_once('model/Materia.php');
include_once('model/Descarte.php');
include_once('dao/UsuarioDao.php');
include_once('dao/DaoFactory.php');
include_once('dao/MySqlDaoFactory.php');
include_once('dao/PontoColetaDao.php');
include_once('dao/MateriaDao.php');
include_once('dao/DescarteDao.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$factory = new MySqlDaofactory();

?>