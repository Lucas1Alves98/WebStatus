<?php

( stream_resolve_include_path ( "Solicitacoes_Bean.php" ));
( stream_resolve_include_path ( "Conexao.php" ));
(stream_resolve_include_path("SolicitacoesController.php"));
 


class Solicitacoes_Dao{

private $obj;
private $con;

function __construct(){

$this -> obj = new Solicitacoes_Bean();
$this -> con = new Conexao();
}

public function insert($con,$obj){

$query = $con-> conectar()->prepare("insert into solicitacao (nome,cpf,renach,comentarios) values (:nome,:cpf,:renach,:comentarios)");

$query-> bindValue("nome" , $obj ->getNome());
$query-> bindValue("cpf", $obj ->getCpf());
$query-> bindValue("comentarios", $obj->getComentarios());
$query-> bindValue("renach", $obj->getRenach());

$query->execute();
}

}