<?php
require_once '../model/modelDao/Conexao.php';
require_once '../model/modelDao/Delete_Dao.php';




$con = new Conexao();
$s = new Delete_Dao();



$id = ($_GET['id']);


$s->deletar($con ,$id);




?>

