<?php
namespace Site\Model\ModelDao;

use Site\Model\ModelBean\PortalAluno_Bean;

class PortalAluno_Dao
{
    private $obj;
    private $con;

    function __construct()
    {
        $this->obj = new PortalAluno_Bean();
        $this->con = new conexao();
    }

    public function create($con, $obj)
    {
        $query = $con->conectar()->prepare("insert into logintable(cpf,senha) values (:cpf,:senha)");


        $query->bindValue(":cpf", $obj->getCpf());
        $query->bindValue(":senha", $obj->getSenha());
        $query->execute();
    }
}
