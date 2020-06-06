<?php
namespace Site\Model\ModelBean;
require_once 'vendor/autoload.php';   

class Cadastro_Bean{

private $nome;
private $cpf;
private $nascimento;
private $endereco;
private $email;
private $tel;
private $comentario;

function getNome() {
    return $this->nome;
}

function getCpf() {
    return $this->cpf;
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

function getTel() {
    return $this->tel;
}

function getComentario() {
    return $this->comentario;
}

function setNome($nome) {
    $this->nome = $nome;
}

function setCpf($cpf) {
    $this->cpf = $cpf;
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

function setTel($tel) {
    $this->tel = $tel;
}

function setComentario($comentario) {
    $this->comentario = $comentario;
}




}
