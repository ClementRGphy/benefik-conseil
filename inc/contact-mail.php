<?php 
;
if(isset($_POST['contact'])){
	
	$email=$_POST['email'];
	$nomPrenom=$_POST['nomPrenom'];
	$sujet=$_POST['sujet'];
	$message=$_POST['texte'];
$_SESSION['mail_sent']=1;










 
    $to= "contact@benefik-conseil.fr";

     // Sujet
    $subject = "[benefik-conseil], Sujet:".$sujet."  Auteur:  ".$nomPrenom;

     // message
     $message = '
     <html>
      <head>
       <title>Messages envoyés à Benfik conseil</title>
      </head>
      <body>
       <div>Emetteur : '.$nomPrenom.'</div>
        <div>adresse mail : '.$email.' (si vous répondez à cette email, ce dernier sera envoyé automatiquement à ladresse mail précèdemment indiquée</div>
        <div style="margin-top:20px;">Message : '.$message.'</div>
      </body>
     </html>
     ';

     // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
     $headers[] = 'MIME-Version: 1.0';
     $headers[] = 'Content-type: text/html; charset=iso-8859-1';

     // En-têtes additionnels
     
     $headers[] = 'From: contact@benefik-conseil.fr';
 
   
     $headers[] = 'Reply-To:'.$email;
    

     // Envoi
     mail($to, $subject, $message, implode("\r\n", $headers));


     }