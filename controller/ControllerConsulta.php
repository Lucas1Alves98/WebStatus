<?php

//Chamando a classe de conexao

require_once '../model/modelDao/Conexao.php';

//Criando objeto a partir da classe de conexao

$con = new Conexao();

//Pegando as informações do input

$Pesquisa = filter_input(INPUT_POST,'Pesquisa');

//Comunicação com o SGBD

$query = $con->conectar()->prepare("select * from adm where cpf = :cpf");

$query->bindValue(":cpf" , $Pesquisa);
 
 //Execução da query
 $query->execute();  

$result = $query->fetchAll();//convertendo querry em strinfg

foreach ($result as $value ){
    echo "Nome: ".$value['nome']."<br>";
    echo "Cpf: ".$value['cpf']."<br>";
    echo "Nascimento: ".$value['nascimento']."<br>";
    echo "Sexo: ".$value['sexo']."<br>";
    echo "Endereco: ".$value['endereco']."<br>";
    echo "Cep: ".$value['cep']."<br>";
    echo "Telefone: ".$value['telefone']."<br>";
    echo "Celular: ".$value['celular']."<br>";
    echo "Email: ".$value['email']."<br>";
    echo "Senha: ".$value['senha']."<br>";
    echo "Comentarios: ".$value['comentarios']."<br>";
    
}