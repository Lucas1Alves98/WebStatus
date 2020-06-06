<?php
namespace Site\Controller;
require_once 'C:\xampp\htdocs\WebStatus3\Site\vendor\autoload.php';


$cpf = filter_input (INPUT_POST,"cpf");
$senha = filter_input(INPUT_POST,"senha");

$obj = new \Site\Model\ModelBean\PortalAluno_Bean();
$con = new \Site\Model\ModelDao\Conexao();
$produtoDao = new \Site\Model\ModelDao\PortalAluno_Dao();


$obj->setCpf($cpf);
$obj->setSenha($senha);


$produtoDao->create($con, $obj);
                    