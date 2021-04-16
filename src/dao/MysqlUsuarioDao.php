<?php

include_once('UsuarioDao.php');
include_once('DAO.php');

class MysqlUsuarioDao extends DAO implements UsuarioDao {

	private $table_name = 'usuario';

	public function buscaTodos() {

        $query = "SELECT
                    nome, telefone, email, cartaocredito
                FROM
                    " . $this->table_name . 
                    " ORDER BY nome ASC";
     
        $stmt = $this->conn->prepare( $query );
        $stmt->execute();

        $usuarios = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){

            extract($row);
            $usuario = new Usuario($nome,$telefone,$email,$cartaocredito); 
            $usuarios[] = $usuario;
        }
        return $usuarios;
    }

}