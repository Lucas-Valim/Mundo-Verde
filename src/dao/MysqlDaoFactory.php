<?php

include_once('DaoFactory.php');
include_once('MySqlUsuarioDao.php');
include_once('MySqlMaterialDao.php');
include_once('MySqlMateriaDao.php');
include_once('MySqlPontoColetaDao.php');

class MySqlDaofactory extends DaoFactory {

    // specify your own database credentials
    private $username = "root";
    private $password = "";
    public $conn;

    // get the database connection
    public function getConnection(){

        $this->conn = null;

        try{
            //$this->conn = new PDO("pgsql:host=" . $this->host . ";port=" . $this->port . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn = new PDO("mysql:host=localhost;port=3306;dbname=sorte_verde", $this->username, $this->password);

      }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }

    public function getUsuarioDao() {

        return new MySqlUsuarioDao($this->getConnection());

    }

    public function getMaterialDao() {
        return new MySqlMaterialDao($this->getConnection());
    }

    public function getMateriaDao() {
        return new MySqlMateriaDao($this->getConnection());
    }
    public function getPontoColetaDao() {
        return new MySqlPontoColetaDao($this->getConnection());
    }
}
?>
