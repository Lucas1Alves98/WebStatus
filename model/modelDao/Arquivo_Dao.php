<?php
     ( stream_resolve_include_path ( "Arquivo_Bean.php" ));
    ( stream_resolve_include_path ( "Conexao.php" ));
 

class Arquivo_Dao
{
    private $obj;
    private $con;

    function __construct()
    {
        $this->obj = new Arquivo_Bean();
        $this->con = new Conexao();
    }

    public function Insert($obj,$con){
         
      $query = $con->conectar()->prepare("insert into arquivo (novoNome,novoNome1) values (:novoNome,:novoNome1)");
      $query->bindValue(":novoNome", $obj->getNovoNome());
      $query->bindValue(":novoNome1", $obj->getNovoNome1());
      $query->execute();
    }
    
}
