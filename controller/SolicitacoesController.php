<?php
require_once '../model/modelDao/Conexao.php';
require_once '../model/modelBean/Solicitacoes_Bean.php';
require_once '../model/modelDao/Solicitacoes_Dao.php';


$nome = filter_input(INPUT_POST,"nome");
$cpf = filter_input(INPUT_POST,"cpf");
$comentarios = filter_input(INPUT_POST,"comentarios");
$renach = filter_input(INPUT_POST,"renach");

$obj = new Solicitacoes_Bean();
$con = new Conexao();
$sql = new Solicitacoes_Dao();

$obj -> setNome($nome);
$obj -> setCpf($cpf);
$obj -> setComentarios($comentarios);
$obj -> setRenach($renach);

$sql->insert($con,$obj);

 header("location: ../View/aluno/solicitacao.php");
 
 ?>
