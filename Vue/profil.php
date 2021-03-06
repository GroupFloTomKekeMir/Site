<?php include('header.php'); ?>
<?php include('../php/connexionBdd.php'); ?>
<html>
    <head>
        <title>Casting</title>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
        <meta charset="utf-8">
        <script src="../js/profil.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-4 corpsProfil">

                    <h3> Mes informations personnelles </h3>

                    <hr>
                    <?php
                    $query = $bdd->prepare('SELECT `id_util`, `login`, `password`, `nom`, `prenom`, `nom_artiste`, `age`, `mail`, `telephone`, `id_adresse`, `descr_util` FROM `utilisateur` WHERE id_util = ?');
                    $query->execute(array($_SESSION['id']));

                    while ($row = $query->fetch()) {
                        $query = $bdd->prepare('SELECT `numero`, `code_postal`, `rue`, `ville`, `latitude`, `longitude` FROM `adresse` WHERE `id_adr`= ?');
                        $query->execute(array($row['id_adresse']));
                        while ($row2 = $query->fetch()) {
                            ?>
                            <input type="hidden" id="id_util" value="<?php echo $_SESSION['id'] ?>" />
                            <input type="hidden" id="id_adr" value="<?php echo $row['id_adresse'] ?>" />
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="nom">Nom:</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" id="nom" value="<?php echo $row['nom'] ?>" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="prenom">Prenom:</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" id="prenom" value="<?php echo $row['prenom'] ?>" />
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="nom_artiste">Nom d'artiste:</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" id="nom_artiste" value="<?php echo $row['nom_artiste'] ?>"/>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="age">Age:</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" id="age" value="<?php echo $row['age'] ?>"/>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="mail">Mail:</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" id="mail" value="<?php echo $row['mail'] ?>"/>  
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="telephone">Telephone:</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" id="telephone" value="<?php echo $row['telephone'] ?>"/>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-lg-6">
                                    <label for = "adresse">Adresse: </label>
                                </div>
                                <div class="col-lg-4 " id= "numerobouton"> 
                                    <input name="numero" id="numero" type="text" step="1" placeholder="n°" value="<?php echo $row2['numero'] ?> " style="width: 40px;"/>                             
                                    <input name="adresse" id="adresse" type="text" placeholder="rue" value="<?php echo $row2['rue'] ?> " style="width: 140px;">
                                    <input name="CP" id="CP" type="text" placeholder="CP" value="<?php echo $row2['code_postal'] ?>" style="width: 140px;">
                                    <input name="ville" id="ville" type="text" placeholder="ville   " value="<?php echo $row2['ville'] ?>" style="width: 140px;">
                                </div>

                            </div>
                            <div class="row">

                                <div class="col-lg-6">
                                    <label for="password">Mot de passe:</label> 
                                </div>
                                <div class="col-lg-6">
                                    <input id ="password" type="password">
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-lg-6">
                                    <label for="password2">Confirmer:</label>
                                </div>
                                <div class="col-lg-6">
                                    <input id="password2" type="password"> 
                                </div>
                            </div>

                            <h3 class=" large">Description</h3>
                            <hr>

                            <textarea id="description" class="large" style="margin: 0px; width: 370px; height: 118px;"> <?php echo $row['descr_util'] ?></textarea>
                            <?php
                        }
                    }
                    ?>
                    <br/><br/><br/>
                    <div class="row">
                        <div class="col-lg-offset-5 col-lg-2 large">
                            <button class="valider btn-small btn-danger btn">Valider</button>
                        </div>

                    </div>



                </div>
                <div class="col-lg-4 lesoffresauquellesjaipostule">

                    <h3> Les offres auxquelles j'ai postulé</h3>

                    <?php
                    $query = $bdd->prepare('select offre.id_offre as offre , titre FROM offre INNER JOIN postuler ON postuler.id_offre = offre.id_offre WHERE postuler.id_util = ?');
                    $query->execute(array($_SESSION['id']));

                    while ($row = $query->fetch()) {
                        ?> 

                        <div class="titre" id="<?php echo $row['offre'] ?>"><?php echo $row['titre']; ?>
                            <button class="voir" id="<?php echo $row['offre'] ?>" value="<?php echo $row['offre'] ?>">Voir</button>
                            <button class="masquer" id="<?php echo $row['offre'] ?>" value="<?php echo $row['offre'] ?>" hidden="true">Masquer</button><div id="voirOffre"></div>
                            <button class="retracter" value="<?php echo $row['offre'] ?>">Se rétracter</button></div>
                        <div class="voirOffre" id="<?php echo $row['offre'] ?>" value="<?php echo $row['offre'] ?>"></div>
                        <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </body>
</html>

