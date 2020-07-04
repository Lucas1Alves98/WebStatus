<?php

class Cadastro_Bean{

private $nome;
private $cpf;
private $sexo;
private $nascimento;
private $endereco;
private $cep;
private $email;
private $telefone;
private $comentarios;
private $senha;
private $celular;



function getNome() {
    return $this->nome;
}


function getSenha() {
    return $this->senha;
}


function getCelular() {
    return $this->celular;
}

function getCep(){
    return $this->cep;
}

function getCpf() {
    return $this->cpf;
}

function getSexo() {
    return $this->sexo;
}

function getNascimento() {
    return $this->nascimento;
}

function getEndereco() {
    return $this->endereco;
}

function getEmail() {
    return $this->email;
}

function getTelefone() {
    return $this->telefone;
}

function getComentarios() {
    return $this->comentarios;
}

function setNome($nome) {
    $this->nome = $nome;
}

function setSenha($senha) {
    $this->senha = $senha;
}

function setCelular($celular) {
    $this->celular = $celular;
}

function setCep ($cep) {
    $this->cep = $cep;
}   
function setCpf($cpf) {
    $this->cpf = $cpf;
}

function setSexo($sexo) {
    $this->sexo = $sexo;
}

function setNascimento($nascimento) {
    $this->nascimento = $nascimento;
}

function setEndereco($endereco) {
    $this->endereco = $endereco;
}

function setEmail($email) {
    $this->email = $email;
}

function setTelefone($telefone) {
    $this->telefone = $telefone;
}

function setComentarios($comentarios) {
    $this->comentarios = $comentarios;
}




}
