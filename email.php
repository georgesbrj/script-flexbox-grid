<?php

 if(isset($_POST['email']) && !empty($_POST['email'])) {


  $nome = addslashes($_POST['nome']);
  $email = addslashes($_POST['email']);
  $mensagem = addslashes($_POST['mensagem']);



  $to = "george@hotmail.com";
  $subject = "Contato - Programador";
  $body = "Nome:".$nome. "\r\n".
           "Email:".$email."\r\n".
           "Mensagem:".$mensagem;
  $header = "From:contato@suporte.com"."\r\n".
           "Reply-to: ".$email."\e\n".
           "X=Mailer:PHP/".phpversion();
           
  if(mail($to,$subject,$body,$header)) {
    
    echo ("Email enviado com sucesso");
  }else{
      echo ("Erro ao enviar email");
      }

 }

?>