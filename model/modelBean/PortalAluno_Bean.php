<?php

class PortalAluno_Bean{
private $con;
private $senha;
private $cpf;

function getCon() {
    return $this->con;
}

function getSenha() {
    return $this->senha;
}

function getCpf() {
    return $this->cpf;
}

function setCon($con) {
    $this->con = $con;
}

function setSenha($senha) {
    $this->senha = $senha;
}

function setCpf($cpf) {
    $this->cpf = $cpf;
}
}