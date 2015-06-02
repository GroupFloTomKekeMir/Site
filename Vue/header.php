<?php session_start(); ?>
<html>
    <head>
        <meta charset="UTF-8">
       <link href="../bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
       <script src="../bootstrap-3.3.4-dist/js/jquery.js"></script>
       <link href="../style/style_index.css" rel="stylesheet" type="text/css"/>
       <script src="../js/jquery-1.11.2.min.js" type="text/javascript"></script>
        <script src="../bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../js/js.js"></script>
    </head>
           
    <body>
                <nav class="navbar navbar-static">
    <div class="container">
      <a class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
        <span class="glyphicon glyphicon-chevron-down"></span>
      </a>
      <div class="nav-collapse collase">
        <ul class="nav navbar-nav">  
            <li><a href="./index.php"><i class="glyphicon glyphicon-home"></i>  Megacasting</a></li>
            <li><a href="./musique.php">Musique</a></li>
            <li><a href="./evenement.php">Evenement</a></li>
          <li><a href="./casting2.php">Casting</a></li>
          <li><a href="./boutique.php">Boutique</a></li>
        </ul>
        <ul class="nav navbar-right navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-search"></i></a>
            <ul class="dropdown-menu" style="padding:12px;">
                <form class="form-inline">
     				<button type="submit" class="btn btn-default pull-right"><i class="glyphicon glyphicon-search"></i></button><input type="text" class="form-control pull-left" placeholder="Search">
                </form>
              </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> <i class="glyphicon glyphicon-chevron-down"></i></a>
            <ul class="dropdown-menu">
               
               <?php if(!isset($_SESSION['id'])){ ?> 
              <li><a href="./connexion.php">Connexion</a></li>
              <li><a href="./inscription.php">Inscription</a></li>
               <?php } else { ?>
              <li><a id="profil" href="./profil.php">Profil</a></li>
              <li><a id="deco2" href="#">Deconnexion</a></li>
            <!-- <li><button id="deco2" value="test">Deconnexion</button></li>-->
               <?php } ?>
             </ul>
          </li>  
        </ul>
      </div>		
    </div>
</nav><!-- /.navbar -->
<!------------------------------------------------------------->
<!------------------NAVBAR------------------------------------->
<!------------------------------------------------------------->