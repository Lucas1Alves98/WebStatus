<?php

class Admin_Bean {

    private $senha;
    private $email;

    
   
    function getSenha() {
        return $this->senha;
    }

    function getEmail() {
        return $this->email;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setEmail($email) {
        $this->email = $email;
    }



}
