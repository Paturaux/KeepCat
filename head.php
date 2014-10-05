
<?php 
if(isset($_SESSION['screen']) and $_SESSION['screen'] == 'phone'){
?>
<!DOCTYPE html>
<html>
    <head>
        <title>KeepCat</title>
        <link rel="stylesheet" type="text/css" href="CSS/common.css"/>
    </head>
    <body>
        <a href="index.php" id="index"></a>
        
<?php 
}else{   
?>
    <html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="CSS/bootstrap/bootstrap.min.css" rel="stylesheet">
        <link href="CSS/commonWS.css" rel="stylesheet" media="screen">
        <link rel="icon" href="../../favicon.ico">
        <title><?php echo((isset($title))? $title : ""); ?> - KeepCat</title>
  </head>

  <body id="home">
    <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand title_logo" href="index.php"><img src="resources/logo.png"></a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php?page=rechercher"><button type="button" class="btn btn-xs btn-primary">Rechercher</button></a></li>
            <li><a href="index.php?page=proposer"><button type="button" class="btn btn-xs btn-success">Se proposer</button></a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
          
          <ul class="nav navbar-nav navbar-right">
              <?php if(!isset($_SESSION['name'])){ ?>
               <li class="login" onclick="activeMe(this, 'signin');"><a href="#">Se connecter</a></li> 
               <li class="login" onclick="activeMe(this, 'signup');"><a href="#">S'inscrire</a></li>
              
              <?php } else{
                  echo '<li><a href="index.php?page=deconnexion"><img src="resources/site/shutdown.png"/> Déconnexion</a></li> ';
              }
              ?>
          
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </div><!-- /.navbar -->

    <div class="container main_contain">

<?php
}
?>