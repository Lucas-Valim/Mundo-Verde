<?php
interface UsuarioDao {

    public function insere($usuario);
    public function altera(&$usuario);
    public function buscaPorEmail($email);
    public function buscaTodos();
}
?>