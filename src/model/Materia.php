<?php
class Materia {
    
    private $id;
    private $nome;
    private $descricao;
    private $imagem;
   

    public function __construct( $id, $nome, $descricao,  $imagem)
    {
        $this->id=$id;
        $this->nome=$nome;
        $this->descricao=$descricao;
        $this->imagem=$imagem;
    }

    public function getId() { return $this->id; }
    public function setId($id) {$this->id = $id;}

    public function getNome() { return $this->nome; }
    public function setNome($nome) {$this->nome = $nome;}

    public function getDescricao() { return $this->descricao; }
    public function setDescricao($descricao) {$this->descricao = $descricao;}

    public function getImagem() { return $this->imagem; }
    public function setImagem($imagem) {$this->imagem = $imagem;}

}
?>