<?php

class Produto {
    private $idProduto;
    private $descricao;
    private $preço;
    private $promocao;
    
    function __construct() {
        
    }
    function getIdProduto() {
        return $this->idProduto;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getPreço() {
        return $this->preço;
    }

    function setIdProduto($idProduto) {
        $this->idProduto = $idProduto;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setPreço($preço) {
        $this->preço = $preço;
    }
    function getPromocao() {
        return $this->promocao;
    }

    function setPromocao($promocao) {
        $this->promocao = $promocao;
    }



}
