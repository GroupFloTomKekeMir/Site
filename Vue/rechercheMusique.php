<?php include('header.php'); ?>
<?php include('../php/connexionBdd.php'); ?>
<html>
    <head>
        <title>Musique</title>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        $titre = $_POST["recherche_titre"];


        if (isset($titre) && $titre != NULL) { // on vérifie d'abord l'existence du POST et aussi si la requete n'est pas vide.

       
            $titre = htmlspecialchars($titre);
            ?>
            <h3>Résultats de votre recherche.</h3><br/>
            <br/><br/>

            <?php
            $query = $bdd->prepare('SELECT titre, genre, description, date_ajout, lien_yt FROM musique WHERE musique.titre like ? ORDER BY musique.id_musique DESC');
            $query->execute(array('%' . $titre . '%'));
            

            while ($row = $query->fetch()) {
                ?>  
                <div class="row corpsMusique">
                    <div class="col-lg-offset-2 col-lg-3">
                        <iframe src="https://<?php echo $row['lien_yt'] ?>" frameborder="0" allowfullscreen></iframe>
                    </div>

                    <div class="col-lg-6">
                        <div class="row">           
                            <div class="col-lg-offset-1 col-lg-10">
                                <p><?php echo $row['titre']; ?></p>
                            </div>                    
                        </div>
                        <div class="row">
                            <div class="col-lg-offset-1 col-lg-10">
                                <p>#<?php echo $row['genre']; ?></p>
                            </div>                    
                        </div>
                        <div class="row">
                            <div class="col-lg-offset-1 col-lg-10">
                                <p><?php echo $row['description']; ?></p>
                            </div>                    
                        </div>
                        <div class="row">
                            <div class="col-lg-offset-1 col-lg-10">
                                <p>Date d'ajoût : <?php echo $row['date_ajout']; ?></p>
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
} else {
    ?>

            <p>Vous allez faire une recherche dans notre base de données concernant les musiques sur le site. Tapez une requête pour réaliser une recherche.</p>

            <form action="rechercher.php" method="Post">

                <input type="text" name="requete" size="10">
                <input type="submit" value="Ok">

            </form>

    <?php
}
?>

    </body>
</html>