<?php
namespace Site\Controller;
require_once 'vendor/autoload.php';   
require_once'../Model/ModelBean/Cadastro_Bean.php';
require_once '../Model/ModelDao/Conexao.php';



$nome = filter_input(INPUT_POST,"nome");
$cpf = filter_input(INPUT_POST,"cpf");
$nascimento = filter_input(INPUT_POST,"nascimento");
$endereco = filter_input(INPUT_POST,"endereco");
$email = filter_input(INPUT_POST,"email");
$tel = filter_input(INPUT_POST,"tel");
$comentario = filter_input(INPUT_POST,"comentario");

$obj = new \Site\Model\ModelBean\Cadastro_Bean();
$conexao = new \Site\Model\ModelDao\Conexao();


$obj->setNome($nome);
$obj->setCpf($cpf);
$obj->setNascimento($nascimento);
$obj->setEndereco($endereco);
$obj->setEmail($email);
$obj->setTel($tel);
$obj->setComentario($comentario);

