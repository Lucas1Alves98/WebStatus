<?php
     ( stream_resolve_include_path ( "PortalAluno_Bean.php" ));
    ( stream_resolve_include_path ( "Conexao.php" ));
 

class PortalAluno_Dao
{
    private $obj;
    private $con;

    function __construct()
    {
        $this->obj = new PortalAluno_Bean();
        $this->con = new Conexao();
    }

    public function create($con, $obj)
    {
        $query = $con->conectar()->prepare("insert into logintable(cpf,senha) values (:cpf,:senha)");


        $query->bindValue(":cpf", $obj->getCpf());
        $query->bindValue(":senha", $obj->getSenha());
        $query->execute();
    }
}
