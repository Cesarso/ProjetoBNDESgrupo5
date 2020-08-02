<?php
require_once 'Cadastro.php';


abstract class Pessoa implements cadastro {
    protected $id;
    protected $nome;
    protected $cpf;
    
    function Pessoa($id, $nome, $cpf) {
        $this->id = $id;
        $this->nome = $nome;
        $this->cpf = $cpf;
    }


   
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getCpf() {
        return $this->cpf;
    }

   

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    


    
}
