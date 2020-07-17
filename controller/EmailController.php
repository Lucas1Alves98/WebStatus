<?php
include_once '../model/modelDao/Conexao.php';
include_once '../src/SMTP.php';
include_once '../src/PHPMailer.php';
require_once '../src/Exception.php';
/*
//Recupera os dados enviados pelo formulário
$nome = filter_input(INPUT_POST,'nome');
$email = filter_input(INPUT_POST,'email');
$telefone = filter_input(INPUT_POST,'telefone');
$mensagem = filter_input(INPUT_POST,'mensagem');

$to = "lucas1alves98@gmail.com";
$subject ="email";
$mensagem ="<strong>Nome:</strong> $nome<br /<br /><strong>E-mail:</strong>$email <br /<br /><strong>Mensagem:</strong>$mensagem<br /> <br />";
$header = "MIME-Version: 1.0\n";
$header .= "Content-type: text/html; charset=iso-8859-1\n";
$header .= "From: $email\n";
mail ($to, $subject, $mensagem, $header);
echo "Mensagem enviada com sucesso!";
*/


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$GetPost = filter_input_array(INPUT_POST,FILTER_DEFAULT);


//Variáveis locais
$Erro = true;
$Nome = $GetPost['nome'];
$Email = $GetPost['email'];
$Telefone = $GetPost['telefone'];
$Mensagem = $GetPost['mensagem'];

//Incluir a classe PHPMailer


//Enviando o e-mail utilizado a classe PHPMail
$Mailer = new PHPMailer;
$Mailer->CharSet = "utf8";
$Mailer->IsSMTP();
$Mailer->Host ="smtp.gmail.com";
$Mailer->SMTPAuth = true;
$Mailer->Username = "lucas1alves98@gmail.com";
$Mailer->Password = "34947488L";
$Mailer->SMTPSecure = "tls";
$Mailer->Port = 587;
$Mailer->FromName = "{$Nome}";
$Mailer->From = "lucas1alves98@gmail.com";
$Mailer->AddAddress("lucas1alves98@gmail.com");
$Mailer->IsHTML(true);
$Mailer->Subject = "Novo contato -{$Nome}".date("H:i")."-".date("d/m/y");
$Mailer->Body = "Mensagem{$Mensagem}";

//Verificacao
if($Mailer->Send()){

  $Erro = false;
}
var_dump($Erro);


 header("location: ../View/contato.php");

    

