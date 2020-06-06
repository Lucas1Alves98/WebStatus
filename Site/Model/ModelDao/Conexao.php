<?php
namespace Site\Model\ModelDao;

use PDO;
use PDOException;


class Conexao {
     //Serve para conectar com o banco de dados em PDO

    private $usuario;
    private $senha;
    private $banco;
    private $servidor;
    private static $pdo;
    
    public function __construct(){
        $this->servidor = "localhost";
        $this->banco = "webstatus";
        $this->usuario = "root";
        $this->senha = "";
    }
    
    public function conectar(){
        try{
            if(is_null(self::$pdo)){
                self::$pdo = new PDO("mysql:host=".$this->servidor.";dbname=".$this->banco, $this->usuario, $this->senha);
            }
            return self::$pdo;
        } catch (PDOException$ex) {
			echo $ex->getMessage();
        }
    }
    
}


