<?php
interface PontoColetaDao {

    public function insere($ponto);
    public function altera(&$ponto);
    public function buscaTodos();
}
?>