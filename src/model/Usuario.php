<?php
class Usuario {
    
    private $nome;
    private $telefone;
    private $email;
    private $cartaocredito;

    
    /*
    public function __construct() { }
    
    public function __construct($login, $senha, $nome)
    {
        $this->login=$login;
        $this->senha=$senha;
        $this->nome=$nome;
    }
    */

    public function __construct( $nome, $telefone, $email, $cartaocredito)
    {
        $this->cartaocredito=$cartaocredito;
        $this->telefone=$telefone;
        $this->email=$email;
        $this->cartaocredito=$cartaocredito;
    }

    public function getCartaoCredito() { return $this->cartaocredito; }
    public function setCartaoCredito($cartaocredito) {$this->cartaocredito = $cartaocredito;}

    public function getTelefone() { return $this->telefone; }
    public function setTelefone($telefone) {$this->telefone = $telefone;}

    public function getNome() { return $this->nome; }
    public function setNome($nome) {$this->nome = $nome;}

    public function getEmail() { return $this->email; }
    public function setEmail($email) {$this->email = $email;}
}
?>