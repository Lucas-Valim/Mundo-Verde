<?php
abstract class DAO {

    protected $conn;

    public function __construct($conn){
        $this->conn = $conn;
    }
} 
?>