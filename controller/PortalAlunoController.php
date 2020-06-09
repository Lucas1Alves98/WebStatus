<?php
require_once '../model/modelBean/PortalAluno_Bean.php';
require_once '../model/modelDao/Conexao.php';
require_once '../model/modelDao/PortalAluno_Dao.php';

$cpf = filter_input (INPUT_POST,"cpf");
$senha = filter_input(INPUT_POST,"senha");

$obj = new PortalAluno_Bean();
$con = new Conexao();
$sql = new PortalAluno_Dao();

$obj->setCpf($cpf);
$obj->setSenha($senha);

$sql->create($con, $obj);
?>
