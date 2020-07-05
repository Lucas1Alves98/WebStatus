<?php
// chamando a classe  AcessoUsuario e conexao 

require_once '../model/modelBean/AcessoUsuario.php';
require_once '../model/modelDao/Conexao.php';

//criando um objeto dessa classe
$obj = new AcessoUsuario();
$con = new Conexao();

//Pegando as informações do input do usuario

$cpf = filter_input(INPUT_POST,'cpf');
$senha = filter_input(INPUT_POST,'senha');

//Setando as informações para a classe AcessoUsuario

$obj->setCpf($cpf);
$obj->setSenha($senha);

//Validando acesso do usuário, fazendo uma consulta se o usuário existe no banco de dados

$query = $con->conectar()->prepare("select * from adm where cpf = :cpf and senha = :senha");

$query->bindValue (":cpf" , $obj->getCpf());
$query->bindValue (":senha" , $obj->getSenha());

$query->execute();

//Verificando se é encotrado algum usuário

if($query->rowCount() != 0){
    
 $query = $con->conectar()->prepare("select * from adm where cpf = :cpf and senha = :senha");
 
 $query->bindParam (":cpf" ,$obj->getCpf() );
 $query->bindParam (":senha" ,$obj->getSenha() );
 
 $query->execute();
 
 if($query->rowCount() != 0){
       header("location: ../View/aluno/avisos.php");
 }
         
}else{
    header("location: ../View/portal-aluno.php");
}


