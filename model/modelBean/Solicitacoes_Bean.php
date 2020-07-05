<?php

class Solicitacoes_Bean{

private $nome;
private $cpf;
private $comentarios;
private $renach;

function getNome() {
    return $this->nome;
}

function getCpf() {
    return $this->cpf;
}
function getComentarios() {
    return $this->comentarios;
}
function getRenach() {
    return $this->renach;
}

function setNome($nome) {
    $this->nome = $nome;
}

function setCpf($cpf) {
    $this->cpf = $cpf;
}

function setComentarios($comentarios) {
    $this->comentarios = $comentarios;
}

function setRenach($renach) {
    $this->renach = $renach;
}

}