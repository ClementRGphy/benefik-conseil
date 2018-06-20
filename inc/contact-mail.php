<?php 
;
if(isset($_POST['contact'])){
	
	$email=$_POST['email'];
	$nomPrenom=$_POST['nomPrenom'];
	$sujet=$_POST['sujet'];
	$texte=$_POST['texte'];
$_SESSION['mail_sent']=1;



	
$from = $email;
$to='benjamin.delpech66@gmail.com';
  $bcc = $email;

  $header = "FROM: " . $from . "\r\n".
	"Reply-To: " . $from . "\r\n".
	"Return-Path: " . $from . "\r\n".
	"Message-ID: <" . time() . "." . $from . ">\r\n".
	"BCC: " . $bcc;

  mail($to, $sujet, $texte, $header);
}