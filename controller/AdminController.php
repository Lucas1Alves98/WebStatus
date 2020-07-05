<?php
require_once '../model/modelDao/Conexao.php';
require_once '../model/modelBean/Admin_Bean.php';



$email = filter_input(INPUT_POST,"email");
$senha = filter_input(INPUT_POST,"senha");


$obj = new Admin_Bean();
$con = new Conexao();


$obj -> setEmail($email);
$obj -> setSenha($senha);



//Validando acesso do usu�rio, fazendo uma consulta se o usu�rio existe no banco de dados

$query = $con->conectar()->prepare("select * from administrador where email = :email and senha = :senha");

$query->bindValue (":email" , $obj->getEmail());
$query->bindValue (":senha" , $obj->getSenha());

$query->execute();

//Verificando se � encotrado algum usu�rio

if($query->rowCount() != 0){
    
 $query = $con->conectar()->prepare("select * from administrador where email = :email and senha = :senha");
 
 $query->bindParam (":email" ,$obj->getEmail() );
 $query->bindParam (":senha" ,$obj->getSenha() );
 
 $query->execute();
 
 if($query->rowCount() != 0){
       header("location: ../View/adm/adm.php");
 }
         
}else{
    header("location: ../View/admin.php");
}
