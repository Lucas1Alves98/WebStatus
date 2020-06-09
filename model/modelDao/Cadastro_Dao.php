<?php
(stream_resolve_include_path("CadastroController.php"));
(stream_resolve_include_path("Conexao.php"));

class Cadastro_Dao
{

  private $obj;
  private $con;


  function __construct()
  {
    $this->obj = new Cadastro_Bean();
    $this->con = new Conexao();
  }

  
  public function create($con, $obj)
  
  {
   
    $query = $con->conectar()->prepare("insert into admtable(nome,cpf,nascimento,endereco,email,tel,comentario) values (:nome,:cpf,:nascimento,:endereco,:email,:tel,:comentario)");


    $query->bindValue(":nome", $obj->getNome());
    $query->bindValue(":cpf", $obj->getCpf());
    $query->bindValue(":nascimento", $obj->getNascimento());
    $query->bindValue(":endereco", $obj->getEndereco());
    $query->bindValue(":email", $obj->getEmail());
    $query->bindValue(":tel", $obj->getTel());
    $query->bindValue(":comentario", $obj->getComentario());




    $query->execute();
  }
}
