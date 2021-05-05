<?php

include_once('PontoColetaDao.php');
include_once('DAO.php');

class MysqlPontoColetaDao extends DAO implements PontoColetaDao {

	private $table_name = 'markers';

    public function insere($ponto) {

        $query = "INSERT INTO " . $this->table_name .
        " (name, address, lat, lng, type) VALUES" .
        " (:name, :address, :lat, :lng, :type)";

        $stmt = $this->conn->prepare($query);

        // bind values
        $stmt->bindValue(":name", $ponto->getName());
        $stmt->bindValue(":address", $ponto->getAddress());
        $stmt->bindValue(":lat", $ponto->getLat());
        $stmt->bindValue(":lng", $ponto->getLng());
        $stmt->bindValue(":type", $ponto->getType());

        if($stmt->execute()){
            return true;
        }else{
            return false;
        }

    }

    public function altera(&$ponto) {

        $query = "UPDATE " . $this->table_name .
        " SET name = :name, address = :address, lat = :lat, lng = :lng, type = :type" .
        " WHERE id = :id";

        $stmt = $this->conn->prepare($query);

        // bind parameters
        $stmt->bindValue(":id", $ponto->getId());
        $stmt->bindValue(":name", $ponto->getName());
        $stmt->bindValue(":address", $ponto->getAddress());
        $stmt->bindValue(":lat", $ponto->getLat());
        $stmt->bindValue(":lng", $ponto->getLng());
        $stmt->bindValue(":type", $ponto->getType());

        // execute the query
        if($stmt->execute()){
            return true;
        }

        return false;
    }

    public function buscaTodos() {

        $pontos = array();

        $query = "SELECT
                    id , name, address, lat, lng, type
                FROM
                    " . $this->table_name .
                    " ORDER BY id ASC"; 

        $stmt = $this->conn->prepare( $query );
        $stmt->execute();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            $pontos[] = new PontoColeta($row['id'],$row['name'], $row['address'], $row['lat'], $row['lng'], $row['type']);
        }

        return $pontos;
    }
}