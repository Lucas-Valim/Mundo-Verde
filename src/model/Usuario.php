<?php
class Usuario {
    
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $senhaConf;
    private $tipo;
   

    public function __construct( $id, $nome, $email,  $senha, $senhaConf, $tipo)
    {
        $this->id=$id;
        $this->nome=$nome;
        $this->email=$email;
        $this->senha=$senha;
        $this->senhaConf=$senhaConf;
        $this->tipo=$tipo; 
    }

    public function getId() { return $this->id; }
    public function setId($id) {$this->id = $id;}

    public function getNome() { return $this->nome; }
    public function setNome($nome) {$this->nome = $nome;}

    public function getEmail() { return $this->email; }
    public function setEmail($email) {$this->email = $email;}

    public function getSenha() { return $this->senha; }
    public function setSenha($senha) {$this->senha = $senha;}

    public function getSenha() { return $this->senhaConf; }
    public function setSenha($senhaConf) {$this->senhaConf = $senhaConf;}

    public function getTipo() { return $this->tipo; }
    public function setTipo($tipo) {$this->tipo = $tipo;}

}
?>