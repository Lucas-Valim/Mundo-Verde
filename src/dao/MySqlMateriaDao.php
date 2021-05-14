<?php

include_once('MateriaDao.php');
include_once('DAO.php');

class MySqlMateriaDao extends DAO implements MateriaDao {

	private $table_name = 'materia';

    public function insere($materia) {

        $query = "INSERT INTO " . $this->table_name .
        " (nome, descricao, imagem) VALUES" .
        " (:nome, :descricao, :imagem)";

        $stmt = $this->conn->prepare($query);

        // bind values
        $stmt->bindValue(":nome", $materia->getNome());
        $stmt->bindValue(":descricao", $materia->getDescricao());
        $stmt->bindValue(":imagem", $materia->getImagem());

        if($stmt->execute()){
            return true;
        }else{
            return false;
        }

    }

    public function altera(&$materia) {

        $query = "UPDATE " . $this->table_name .
        " SET nome = :nome, descricao = :descricao, imagem = :imagem" .
        " WHERE id = :id";

        $stmt = $this->conn->prepare($query);

        // bind parameters
       
        $stmt->bindValue(":nome", $materia->getNome());
        $stmt->bindValue(":descricao", $materia->getDescricao());
        $stmt->bindValue(":imagem", $materia->getImagem());        
        $stmt->bindValue(":id", $materia->getId());

        // execute the query
        if($stmt->execute()){
            return true;
        }

        return false;
    }

    public function buscaTodos() {

        $materias = array();

        $query = "SELECT
                    id , nome, descricao, imagem
                FROM
                    " . $this->table_name .
                    " ORDER BY id ASC";

        $stmt = $this->conn->prepare( $query );
        $stmt->execute();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            $materias[] = new Materia($row['id'],$row['nome'], $row['descricao'], $row['imagem']);
        }

        return $materias;
    }

    public function buscaPorId($id) {
        
        $materia = null;

        $query = "SELECT id, nome, descricao, imagem
                FROM
                    " . $this->table_name .
                    "WHERE id = ?";

        $stmt = $this->conn->prepare($query);

        $stmt->bindValue(1, $id);

        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row)
        {
            $materia = new Materia($row['id'],$row['nome'], $row['descricao'], $row['imagem']);
        }
        
        return $materia;
    }

}