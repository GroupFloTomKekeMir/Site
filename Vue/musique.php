<?php include('header.php'); ?>
<?php include('../php/connexionBdd.php'); ?>
<html>
    <head>
        <title>Musique</title>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
        <meta charset="utf-8">
    </head>
    <body>

        <div class="row titreMusique">
            <div class="col-lg-offset-3 col-lg-6">
                <h1>Musique</h1>
            </div>
        </div>
        <div class="row rechercheMusique">     
            <div class="col-lg-offset-7 col-lg-5">    
                <div class="row">    
                    <form method="post" action="rechercheArtiste.php">
                        <div class="col-lg-offset-3 col-lg-1">
                            <label for = "recherche_artiste">Artiste </label>                
                        </div>    
                        <div class="col-lg-1">
                            <input type="text" id="recherche_artiste" name="recherche_artiste"/>                 
                        </div>  
                        <div class="col-lg-offset-2 col-lg-1">
                            <input type="submit" id="submit" name="submit" value="Rechercher" />                 
                        </div> 
                    </form>            
                </div>
                <div class="row">
                    <form method="post" action="rechercheMusique.php">
                        <div class="col-lg-offset-3 col-lg-1">
                            <label for = "recherche_titre">Titre </label>                
                        </div>    
                        <div class="col-lg-1">
                            <input type="text" id="recherche_titre" name="recherche_titre"/>                 
                        </div> 
                        <div class="col-lg-offset-2 col-lg-1">
                            <input type="submit" id="submit" name="submit2" value="Rechercher" />                 
                        </div> 
                    </form> 
                </div>        
            </div>
        </div>
        <br/>
        <div class="container" style="background-color : red;">

            <?php
            $query = $bdd->prepare('SELECT `id_musique`, `titre`, `description`, `genre`, `date_ajout`, `lien_yt`, `id_utilisateur`, nom_artiste FROM `musique`, utilisateur WHERE utilisateur.id_util = musique.id_utilisateur');
            $query->execute();

            while ($row = $query->fetch()) {
                ?>  


                <div class="row corpsMusique">
                    <div class="col-lg-offset-2 col-lg-3">
                        <iframe src="https://<?php echo $row['lien_yt'] ?>" frameborder="0" allowfullscreen></iframe>
                    </div>

                    <div class="col-lg-6">
                        <div class="row">           
                            <div class="col-lg-offset-1 col-lg-10">
                                <p><?php echo $row['titre'] ?></p>
                            </div>                    
                        </div>
                        <div class="row">
                            <div class="col-lg-offset-1 col-lg-10">
                                <p>#<?php echo $row['genre'] ?></p>
                            </div>                    
                        </div>
                        <div class="row">
                            <div class="col-lg-offset-1 col-lg-10">
                                <p><?php echo $row['description'] ?></p>
                            </div>                    
                        </div>
                        <div class="row">
                            <div class="col-lg-offset-1 col-lg-10">
                                <p>Artiste : <?php echo $row['nom_artiste'] ?></p>
                            </div>                    
                        </div>
                        <div class="row">
                            <div class="col-lg-offset-1 col-lg-10">
                                <p>Date d'ajoût : <?php echo $row['date_ajout'] ?></p>
                            </div>                    
                        </div>


                        <div class="row">
                            <div class="col-lg-offset-3 col-lg-6 traitMusique"></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-offset-3 col-lg-6 traitMusique"></div>
                    </div>
                </div>
                <?php
            }
            ?>

        </div>
    </body>
</html>