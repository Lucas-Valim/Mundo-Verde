<?php

include_once('DescarteDao.php');
include_once('DAO.php');

class MySqlDescarteDao extends DAO implements DescarteDao {

	private $table_name = 'descarte';

    public function insere($descarte) {

        $query = "INSERT INTO " . $this->table_name .
        " (nome) VALUES" .
        " (:nome)";

        $stmt = $this->conn->prepare($query);

        // bind values
        $stmt->bindValue(":nome", $descarte->getNome());

        if($stmt->execute()){
            return true;
        }else{
            return false;
        }

    }

    public function altera(&$descarte) {

        $query = "UPDATE " . $this->table_name .
        " SET nome = :nome" .
        " WHERE id = :id";

        $stmt = $this->conn->prepare($query);

        // bind parameters
       
        $stmt->bindValue(":id", $descarte->getId());
        $stmt->bindValue(":nome", $descarte->getNome());

        // execute the query
        if($stmt->execute()){
            return true;
        }

        return false;
    }

    public function buscaTodos() {

        $descartes = array();

        $query = "SELECT
                    id , nome
                FROM
                    " . $this->table_name .
                    " ORDER BY id ASC";

        $stmt = $this->conn->prepare( $query );
        $stmt->execute();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            $descartes[] = new descarte($row['id'],$row['nome']);
        }

        return $descartes;
    }

    public function buscaPorId($id) {
        
        $descarte = null;

        $query = "SELECT id, nome
                FROM
                    " . $this->table_name .
                    "WHERE id = ?";

        $stmt = $this->conn->prepare($query);

        $stmt->bindValue(1, $id);

        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row)
        {
            $descarte = new descarte($row['id'],$row['nome']);
        }
        
        return $descarte;
    }

}