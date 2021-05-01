<?php

include_once('UsuarioDao.php');
include_once('DAO.php');

class MysqlUsuarioDao extends DAO implements UsuarioDao {

	private $table_name = 'usuario';

    public function insere($usuario) {

        $query = "INSERT INTO " . $this->table_name .
        " (nome, senha, email, tipo) VALUES" .
        " (:nome, :senha, :email, :tipo)";

        $stmt = $this->conn->prepare($query);

        // bind values
        $stmt->bindValue(":nome", $usuario->getNome());
        $stmt->bindValue(":senha", $usuario->getSenha());
        $stmt->bindValue(":email", $usuario->getEmail());
        $stmt->bindValue(":tipo", $usuario->getTipo());

        echo $query;

        if($stmt->execute()){
            return true;
        }else{
            return false;
        }

    }

    public function altera(&$usuario) {

        $query = "UPDATE " . $this->table_name .
        " SET nome = :nome, senha = :senha, email = :email, tipo = :tipo" .
        " WHERE id = :id";

        $stmt = $this->conn->prepare($query);

        // bind parameters
       
        $stmt->bindValue(":nome", $usuario->getNome());
        $stmt->bindValue(":senha", $usuario->getSenha());
        $stmt->bindValue(":email", $usuario->getEmail());        
        $stmt->bindValue(":id", $usuario->getId());

        // execute the query
        if($stmt->execute()){
            return true;
        }

        return false;
    }

    public function buscaTodos() {

        $usuarios = array();

        $query = "SELECT
                    ID , NOME, EMAIL, SENHA
                FROM
                    " . $this->table_name .
                    " ORDER BY ID ASC"; //ordenar por id ou nome?

        $stmt = $this->conn->prepare( $query );
        $stmt->execute();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            $usuarios[] = new Usuario($row['ID'],$row['NOME'], $row['EMAIL'], $row['SENHA'], $row['TIPO']); //Precisa por o tipo aqui?
        }

        return $usuarios;
    }

}