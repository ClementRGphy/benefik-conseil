<?php include('inc/header-root.php');?>
<?php include('inc/contact-mail.php');?>
<meta name="category" content="contact">

<?php if(isset($_SESSION['mail_sent'])){?>
<div
v class="shadow_google" style="background-color:green;color:white;padding:2%;border-radius:3px;">
Votre email a bien été envoyé, Benefik Conseil vous recontactera prochainement.
</div>
<?php unset($_SESSION['mail_sent']);} ?>
<div class="cadre_sections shadow_google" style="padding:2%;">

 
    

<div class="article2" id="article2" style="margin-left:5px;margin-right:5px;width:65%;margin:auto" >
	

<div><h2 STYLE="font-size:110%;">Contactez Benefik Conseil</h2>


</div><hr>

<form action="" method="POST" id="form_contact" style="font-size:90%" >
	<form action="#" >
 	<div class="group" style="margin-top:25px;">      
      <input type="text" name="email" style="font-size:12px" required>
      
     
      <label>Email</label>
    </div>
    <div class="group" style="margin-top:25px;">      
      <input type="text" name="nomPrenom" style="font-size:12px" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Nom & Prenom</label>
    </div>
    
    <div class="group" style="margin-top:25px;">      
      <input type="text" name="sujet" style="font-size:12px" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Sujet</label>
    </div>
	

  <textarea  name="texte" rows="8" style="width:100%" placeholder="Ecrivez votre message ici..." required></textarea>
  

	




<input type="submit" name="contact"class="submit-form" style="font-size:15px;" value="Envoyer" ></input>
</form>

</div>


</section>

<?php include('inc/footer.php');?>
  <script type="text/javascript">
     document.getElementById('article2').style.opacity='1';
   document.getElementById('article2').style.transform='translate(0px, 0px)';
  document.getElementById('image_left').style.opacity='1';
    document.getElementById('image_left').style.transform='translate(0px, 0px)';
</script>