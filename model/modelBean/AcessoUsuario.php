<?php

class AcessoUsuario {

    private $senha;
    private $cpf;

    
   
    function getSenha() {
        return $this->senha;
    }

    function getCpf() {
        return $this->cpf;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }



}
