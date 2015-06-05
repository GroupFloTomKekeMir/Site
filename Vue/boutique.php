<?php
include('header.php');
include('../php/connexionBdd.php');
?>
<html>
    <head>
        <title>Boutique</title>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
        <meta charset="utf-8">
        <script src="../js/boutique.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="test"></div>
        <div class="container" style="margin-left: auto; margin-right: auto;">
            <div class="row">
                <?php
                $query = $bdd->prepare('select article.id_article , article.nom, article.prix, article.description FROM article');
                $query->execute();

                while ($row = $query->fetch()) {

                    $query2 = $bdd->prepare('select count(id_article) FROM article WHERE id_article = ? GROUP BY id_article');
                    $query2->execute(array($row['id_article']));
                    while ($row2 = $query2->fetch()) {
                        //echo $row2['count(id_article)'];
                        ?>
                        <div class="col-lg-4 casting">
                            <div class="thumbnail" class ="col-lg-3">
                                <img data-src="holder.js/300x300" >
                                <div class="caption">
                                    <div id="nom" value="<?php echo $row['nom']; ?>"><?php echo $row['nom']; ?></div>
                                    <p id="description" value="<?php echo $row['description']; ?>"><?php echo $row['description']; ?></p>
                                    <p id="prix" value="<?php echo $row['prix']; ?>">Prix : <?php echo $row['prix']; ?>€</p>           
                                    <p>

                                        <button class="ajouter btn-small btn-danger btn" value="<?php echo $row['id_article']; ?>">Ajouter au panier</button>

                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
            <a href="./panier.php">Voir panier</a>
        </div>
    </body>
</html>


