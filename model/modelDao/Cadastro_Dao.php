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


  $query = $con->conectar()->prepare("insert into teste (nome,cpf)values(:nome,:cpf)");


  $query->bindValue(":nome", $obj->getNome());
  $query->bindValue(":cpf", $obj->getCpf());
  
  $query->execute();
}
 
  
  
};