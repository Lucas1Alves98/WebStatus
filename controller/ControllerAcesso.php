<?php
// chamando a classe  AcessoUsuario e conexao 

require_once '../model/modelBean/AcessoUsuario.php';
require_once '../model/modelDao/Conexao.php';

//criando um objeto dessa classe
$obj = new AcessoUsuario();
$con = new Conexao();

//Pegando as informa��es do input do usuario

$email = filter_input(INPUT_POST,'email');
$senha = filter_input(INPUT_POST,'senha');

//Setando as informa��es para a classe AcessoUsuario

$obj->setEmail($email);
$obj->setSenha($senha);

//Validando acesso do usu�rio, fazendo uma consulta se o usu�rio existe no banco de dados

$query = $con->conectar()->prepare("select * from adm where email = :email and senha = :senha");

$query->bindValue (":email" , $obj->getEmail());
$query->bindValue (":senha" , $obj->getSenha());

$query->execute();

//Verificando se � encotrado algum usu�rio

if($query->rowCount() != 0){
    
 $query = $con->conectar()->prepare("select * from adm where email = :email and senha = :senha");
 
 $query->bindParam (":email" ,$obj->getEmail() );
 $query->bindParam (":senha" ,$obj->getSenha() );
 
 $query->execute();
 
 if($query->rowCount() != 0){
       header("location: ../View/aluno/avisos.php");
 }
         
}else{
    header("location: ../View/portal-aluno.php");
}


