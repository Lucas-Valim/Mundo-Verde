<?php
interface DescarteDao {

    public function insere($descarte);
    public function altera(&$descarte);
    public function buscaTodos();
    public function buscaPorId($id);
}
?>