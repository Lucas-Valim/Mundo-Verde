<?php
interface MateriaDao {

    public function insere($materia);
    public function altera(&$materia);
    public function buscaTodos();
}
?>