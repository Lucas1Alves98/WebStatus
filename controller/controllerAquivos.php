<?php

include_once '../model/modelBean/Arquivo_Bean.php';
include_once '../model/modelDao/Conexao.php';
include_once '../model/modelDao/Arquivo_Dao.php';

$arquivo = isset($_FILES['arquivo'])?$_FILES['arquivo']:"";
$arquivo1 = isset($_FILES['arquivo1'])?$_FILES['arquivo1']:"";
        
if(isset($_FILES['arquivo'])){
    $nome = $arquivo['name'];
    $tiposPermitidos = ['jpg',' jpeg','png','doc','pdf'];
    $tamanho = $arquivo['size'];
    
    $extensao = explode('.',$nome);
    $extensao = end($extensao);
    
    $novoNome = rand(). "-$nome". '.' . $extensao;  
    
    if(in_array($extensao , $tiposPermitidos)){
        
        if ($tamanho > 1000000){
            print_r("O tamanho do arquivo não é permitido!");
        } else {
            $mover = move_uploaded_file($_FILES['arquivo'] ['tmp_name'],'uploaded/' . $novoNome);
            //print "<br>";
            //print "<img src='uploaded/$novoNome' width='200'>";
        }
    } else {
        print 'tipos de arquivos não é permitidos!';
    }
    
}

if(isset($_FILES['arquivo1'])){
    $nome = $arquivo1['name'];
    $tiposPermitidos = ['jpg',' jpeg','png','doc','pdf'];
    $tamanho = $arquivo1['size'];
    
    $extensao = explode('.',$nome);
    $extensao = end($extensao);
    
    $novoNome1 = rand(). "-$nome". '.' . $extensao;  
    
    if(in_array($extensao , $tiposPermitidos)){
        
        if ($tamanho > 1000000){
            print_r("O tamanho do arquivo não é permitido!");
        } else {
            $mover = move_uploaded_file($_FILES['arquivo1'] ['tmp_name'],'uploaded1/' . $novoNome1);
            //print "<br>";
            //print "<img src='uploaded/$novoNome' width='200'>";
        }
    } else {
        print 'tipos de arquivos não é permitidos!';
    }
    
}


$obj = new Arquivo_Bean();
$con = new Conexao();
$sql = new Arquivo_Dao();

$obj->setNovoNome($novoNome);
$obj->setNovoNome1($novoNome1);


$sql->Insert($obj,$con);


