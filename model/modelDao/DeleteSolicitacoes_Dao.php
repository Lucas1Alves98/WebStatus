<?php
     
    ( stream_resolve_include_path ( "Conexao.php" ));
 

    class DeleteSolicitacoes_Dao{
    
        private $con;

        function __construct()
        {
            $this->con= new Conexao();
        }
    
    public function deletar($con,$id){
        
  
       
        $query = $con->conectar()->prepare("DELETE FROM `solicitacao` where id = :id");
        
         $query->bindValue(":id", $id);
        
         $query->execute();
    }

    }