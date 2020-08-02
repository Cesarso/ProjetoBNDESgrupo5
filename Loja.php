<?php


class Loja {
    private  $id;
    private $nomeLoja;
    private $enderecoLoja;
    private $categoriaLoja;
    private $Preço_Promocao;
    
    function Loja($id, $nomeLoja, $enderecoLoja, $categoriaLoja, $Preço_Promocao) {
        $this->id = $id;
        $this->nomeLoja = $nomeLoja;
        $this->enderecoLoja = $enderecoLoja;
        $this->categoriaLoja = $categoriaLoja;
        $this->Preço_Promocao = $Preço_Promocao;
        
    }

    
    
    function getId() {
        return $this->id;
    }

    function getNomeLoja() {
        return $this->nomeDaLoja;
    }

    function getEnderecoLoja() {
        return $this->enderecoLoja;
    }

    function getCategoriaLoja() {
        return $this->categoriaLoja;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNomeLoja($nomeDaLoja) {
        $this->nomeDaLoja = $nomeDaLoja;
    }

    function setEnderecoLoja($enderecoLoja) {
        $this->enderecoLoja = $enderecoLoja;
    }

    function setCategoriaLoja($categoriaLoja) {
        $this->categoriaLoja = $categoriaLoja;
    }
    function getPreço_Promocao() {
        return $this->Preço_Promocao;
    }

    function setPreço_Promocao($Preço_Promocao) {
        $this->Preço_Promocao = $Preço_Promocao;
    }



}
