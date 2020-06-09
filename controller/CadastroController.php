<?php

require_once '../model/modelDao/Conexao.php';
require_once '../model/modelDao/Cadastro_Dao.php';
require_once '../model/modelBean/Cadastro_Bean.php';

$nome = filter_input(INPUT_POST,"nome");
$cpf = filter_input(INPUT_POST,"cpf");
$nascimento = filter_input(INPUT_POST,"nascimento");
$endereco = filter_input(INPUT_POST,"endereco");
$email = filter_input(INPUT_POST,"email");
$tel = filter_input(INPUT_POST,"tel");
$comentario = filter_input(INPUT_POST,"comentario");

$sql = new Cadastro_Dao();
$obj = new Cadastro_Bean();
$con = new Conexao();


$obj->setNome($nome);
$obj->setCpf($cpf);
$obj->setNascimento($nascimento);
$obj->setEndereco($endereco);
$obj->setEmail($email);
$obj->setTel($tel);
$obj->setComentario($comentario);

$sql->create($con,$obj);

print $nome;