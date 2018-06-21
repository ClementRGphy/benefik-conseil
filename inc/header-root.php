<?php session_start();
if(!isset($_SESSION['id'])){

    $_SESSION['id']=rand(1,10000);
    $effect2="1";
   
}else{
    $effect2="0";
}
?>
<!DOCTYPE html>

<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.7.7, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
<meta name="title" content="Benefik Conseil">

  <meta name="generator" content="Mobirise v4.7.7, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
 <meta name="keywords" content="Benefik, Entreprise, services, projet, logistique, marketing, communication, gestion, Administration, suivi, fidélisation, relation, client, accompagnement, formation, recherche, développement, stock, import, société, prestations personnalisées, web, marketing, métiers, charte, graphique, contrat, administratif, après vente, valeur, produit, marché">
 <meta name="reply-to" content="conseil@benefik-conseil.fr">
  <meta name="description" content="Benefik Conseil propose des services personnalisés aux entreprises.">
  
<meta name="author" lang="fr" content="Benjamin DELPECH, Clément Risso">
<meta name="identifier-url" content="https://www.benefik-conseil.fr/">
  <link rel="icon" type="image/png" href="images/logo.png" />

    
<link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
 
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

 


<link rel="stylesheet" href="assets/dropdown/css/style.css">

<link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
  
  
</head>
<?php if($effect2=="1"){?>
<body onload="effect2();"> <?php }else{
    ?><body onload="effect3();"><?php 
} ?>
  <section class="menu cid-qTkzRZLJNu" once="menu" id="menu1-0">

 

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm" style="background-color:black">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                
                  
                
                <span class="navbar-caption-wrap">
                  <a href="index.php" style="color:white"> <img  src="images/logo.png" style="width:55px;max-height:55px;margin-right:7px" />
                    
                        Benefik Conseil    
                           
                    </a>
                </span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                <li class="nav-item" >
                    <a class="nav-link link  display-4 color-menu" href="logistique.php" >
                       <img class="icone"src="images/icones/build.png" />
                        Logistique
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link  display-4 color-menu" href="marketing.php">
                        <img class="icone"src="images/icones/money.png" />
                        Marketing/Com
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link  display-4 color-menu" href="gestion-administration.php">
                         <img class="icone"src="images/icones/group.png" />
                        Administration
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link  display-4 color-menu" href="fidelisation-client.php">
                         <img class="icone"src="images/icones/clientcontent.png" />
                        Gestion clients
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link  display-4 color-menu" href="accompagnement-formation.php">
                        <img class="icone"src="images/icones/teacher.png" />
                        Formation
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link  display-4 color-menu" href="recherche-developpement.php">
                        <img class="icone"src="images/icones/dev.png" />
                        Recherche & Dev
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link  display-4 color-menu" href="about.php">
                        <span class="mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                        A propos
                    </a>
                </li>
            </ul>
            
        </div>
    </nav>
</section>


<style>
video#bgvid {
    position:fixed;right:0;bottom;0;
    min-width:100%;min-height:100%;
    width:auto;height:auto;z-index:-100;
    background: url(font-base.jpg) no-repeat;
    background-size: cover;
}
</style>




<video autoplay loop poster="images/font-base.jpg" id="bgvid">
    <source src="video/video1.mp4" type="video/mp4">
</video>
    





    

    <div class="container2 align-center" style="margin-top:65px;margin-bottom:25px;">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-12" >