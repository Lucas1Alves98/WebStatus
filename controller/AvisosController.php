<?php 
require_once '../model/modelDao/Conexao.php';
require_once '../model/modelBean/Avisos_Bean.php';
require_once '../model/modelDao/Avisos_Dao.php';



$comentarios = filter_input(INPUT_POST,"comentarios");


$obj = new Avisos_Bean();
$con = new Conexao();
$sql = new Avisos_Dao();


$obj -> setComentarios($comentarios);


$sql->insert($con,$obj);