<?php
(stream_resolve_include_path("Cadastro_Bean.php"));
(stream_resolve_include_path("Conexao.php"));
(stream_resolve_include_path("CadastroController.php"));

class Cadastro_Dao{

  private $obj;
  private $con;

  function __construct() {
    $this-> obj = new Cadastro_Bean();
    $this-> con = new Conexao();
}
public function insert($con,$obj) {

$query = $con->conectar()->prepare("select id from adm where cpf = :e");
$query->bindValue(":e" ,$obj->getCpf());
 $query->execute();
 if($query->rowCount() > 0){
   
     return false;
 }else{
  $query = $con->conectar()->prepare("insert into adm (nome,cpf,nascimento,sexo,endereco,cep,telefone,celular,email,senha,comentarios)values(:nome,:cpf,:nascimento,:sexo,:endereco,:cep,:telefone,:celular,:email,:senha,:comentarios)");

  $query->bindValue(":nome", $obj->getNome());
  $query->bindValue(":cpf", $obj->getCpf());
  $query->bindValue(":nascimento", $obj->getNascimento());
  $query->bindValue(":sexo", $obj->getSexo());
  $query->bindValue(":endereco", $obj->getEndereco());
  $query->bindValue(":cep", $obj->getCep());
  $query->bindValue(":telefone", $obj->getTelefone());
  $query->bindValue(":celular", $obj->getCelular());
  $query->bindValue(":email", $obj->getEmail());
  $query->bindValue(":senha", $obj->getSenha());
  $query->bindValue(":comentarios", $obj->getComentarios());
  
  $query->execute();   return true;
  
  
 }
}
 
  
  
}



