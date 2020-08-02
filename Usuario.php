<?php
require_once 'Pessoa.php';
require_once 'Cadastro.php';

class Usuario extends Pessoa {
    private $login;
    private $senha;
    private $nivel;
    private $statusAtivo;
    
    
    
    function __construct($login, $senha, $nivel, $statusAtivo) {
        $this->login = $login;
        $this->senha = $senha;
        $this->nivel = $nivel;
        $this->statusAtivo = $statusAtivo;
    }
    public function Pessoa($id, $nome, $cpf) {
        parent::Pessoa($id, $nome, $cpf);
    }

    public function getCpf() {
        return parent::getCpf();
    }

    public function getId() {
        return parent::getId();
    }

    public function getNome() {
        return parent::getNome();
    }

    public function setCpf($cpf) {
        parent::setCpf($cpf);
    }

    public function setId($id) {
        parent::setId($id);
    }

    public function setNome($nome) {
        parent::setNome($nome);
    }

    
    
    function getLogin() {
        return $this->login;
    }

    function getSenha() {
        return $this->senha;
    }

    function getNivel() {
        return $this->nivel;
    }

    function getStatusAtivo() {
        return $this->statusAtivo;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setNivel($nivel) {
        $this->nivel = $nivel;
        if ($nivel == "Admin"){
            echo "Administrador";
        }else if($nivel == "operador"){
                echo "Operador";
            }else {
                echo "Usuario Invalido";
            }
        }
    

    function setStatusAtivo($statusAtivo) {
        $this->statusAtivo = $statusAtivo;
        $this->statusAtivo = "s";
        if(statusAtivo == "s"){
            $this->setStatusAtivo(true);
        }else{
            $this->setStatusAtivo(false);
        }
            
        
    }
    
    public  function cadastrar(){
        $this->cadastrar(cadastrar()+1);
    }
    public  function alterar(){
        $this->alterar();
    }
    public  function excluir(){
        $this->excluir($this->cadastrar()-1);
    }
  

    

}