<?php
require_once '../model/modelDao/Conexao.php';
require_once '../model/modelDao/DeleteSolicitacoes_Dao.php';
$con = new Conexao();
$s = new DeleteSolicitacoes_Dao();
$id = ($_GET['id']);
$s->deletar($con ,$id);
header("location: ../View/adm/solicitacoes.php");


