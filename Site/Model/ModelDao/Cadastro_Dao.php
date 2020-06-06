<?php
namespace Site\Model\ModelDao;

require_once 'vendor/autoload.php';   


$obj = new \Site\Model\ModelBean\Cadastro_Bean();
$conexao = new \Site\Model\ModelDao\Conexao();

$query = $conexao->conectar()->prepare("insert into admtable(nome,cpf,nascimento,endereco,email,tel,comentario) values (:nome,:cpf,:nascimento,:endereco,:email,:tel,:comentario)");


$query->bindValue(":nome", $obj->getNome());
$query->bindValue(":cpf", $obj->getCpf());
$query->bindValue(":nascimento", $obj->getNascimento());
$query->bindValue(":endereco", $obj->getEndereco());
$query->bindValue(":email", $obj->getEmail());
$query->bindValue(":tel", $obj->getTel());
$query->bindValue(":comentario", $obj->getComentario());




$query->execute();
