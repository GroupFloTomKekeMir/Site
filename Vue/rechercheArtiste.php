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
        $artiste = $_POST["recherche_artiste"];

        if (isset($artiste) && $artiste != NULL) { // on vérifie d'abord l'existence du POST et aussi si la requete n'est pas vide.

            //$artiste = htmlspecialchars($artiste);
            $artiste = htmlspecialchars($artiste);
            ?>
            <h3>Résultats de votre recherche.</h3><br/>
            <br/><br/>

    <?php
    $query = $bdd->prepare("SELECT `id_util`, `login`, `password`, `nom`, `prenom`, `nom_artiste`, `age`, `mail`, `telephone`, `id_adresse`, `descr_util` FROM musique, utilisateur WHERE musique.id_utilisateur = utilisateur.id_util and utilisateur.nom_artiste like ? ORDER BY musique.id_utilisateur DESC");
    $query->execute(array('%' . $artiste . '%'));
    //$query->debugDumpParams();

    while ($row = $query->fetch()) {
        $query = $bdd->prepare('SELECT `numero`, `code_postal`, `rue`, `ville`, `latitude`, `longitude` FROM `adresse` WHERE `id_adr`= ?');
        $query->execute(array($row['id_adresse']));
        while ($row2 = $query->fetch()) {
            ?>  


                    <div class="row">
                        <div class="col-lg-offset-3 col-lg-6">
                            <div class="row">
                                <div class="col-lg-offset-3 col-lg-2">
                                    <label for="nom">Nom:</label>
                                </div>
                                <div class="col-lg-4">
                                    <label id="nom" ><?php echo $row['nom'] ?></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-offset-3 col-lg-2">
                                    <label for="prenom">Prenom:</label>
                                </div>
                                <div class="col-lg-4">
                                    <label id="prenom" ><?php echo $row['prenom'] ?></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-offset-3 col-lg-2">
                                    <label for="nom_artiste">Nom d'artiste:</label>
                                </div>
                                <div class="col-lg-4">
                                    <label id="nom_artiste" ><?php echo $row['nom_artiste'] ?></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-offset-3 col-lg-2">
                                    <label for="age">Age:</label>
                                </div>
                                <div class="col-lg-4">
                                    <label id="age" ><?php echo $row['age'] ?></label>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-offset-3 col-lg-2">
                                    <label for="mail">Mail:</label>
                                </div>
                                <div class="col-lg-4">
                                    <label id="mail"><?php echo $row['mail'] ?></label>  
                                </div>
                            </div>  
                            <div class="row">
                                <div class="col-lg-offset-3 col-lg-2">
                                    <label for="description">Description:</label>
                                </div>
                                <div class="col-lg-4">
                                    <textarea id="description"><?php echo $row['descr_util'] ?></textarea>   
                                </div>      
                            </div>
                        </div>
                    </div>



            <?php
        }
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