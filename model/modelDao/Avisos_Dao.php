<?php
     ( stream_resolve_include_path ( "Avisos_Bean.php" ));
    ( stream_resolve_include_path ( "Conexao.php" ));
 

class Avisos_Dao
{
    private $obj;
    private $con;

    function __construct()
    {
        $this->obj = new Avisos_Bean();
        $this->con = new Conexao();
    }

    public function Insert($con, $obj)
    {
        $query = $con->conectar()->prepare("insert into avisos (comentarios) values (:comentarios)");


        $query->bindValue(":comentarios", $obj->getComentarios());
        
        $query->execute();
    }
}
