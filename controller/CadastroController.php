<?php

include_once '../model/modelDao/Conexao.php';
 include_once '../model/modelDao/Cadastro_Dao.php';
 include_once '../model/modelBean/Cadastro_Bean.php';

$nome = filter_input(INPUT_POST,"nome");
$cpf = filter_input(INPUT_POST,"cpf");
$nascimento = filter_input(INPUT_POST,"nascimento");
$sexo = filter_input(INPUT_POST,"sexo");
$endereco = filter_input(INPUT_POST,"endereco");
$cep = filter_input(INPUT_POST,"cep");
$email = filter_input(INPUT_POST,"email");
$telefone = filter_input(INPUT_POST,"telefone");
$celular = filter_input(INPUT_POST,"celular");
$senha = filter_input(INPUT_POST,"senha");
$comentarios = filter_input(INPUT_POST,"comentarios");

$sql = new Cadastro_Dao();
$obj = new Cadastro_Bean();
$con = new Conexao();


$obj->setNome($nome);
$obj->setCpf($cpf);
$obj->setNascimento($nascimento);
$obj->setSexo($sexo);
$obj->setEndereco($endereco);
$obj->setCep($cep);
$obj->setEmail($email);
$obj->setTelefone($telefone);
$obj->setCelular($celular);
$obj->setSenha($senha);
$obj->setComentarios($comentarios);

$sql->insert($con,$obj);

  header("location: ../View/adm/adm.php");
  


