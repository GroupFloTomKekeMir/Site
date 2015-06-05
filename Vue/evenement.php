<!DOCTYPE html>
<?php include('header.php'); ?>
<?php include('../php/connexionBdd.php'); ?>
<html>
    <head>
        <title>Evènements</title>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
        <meta charset="utf-8">
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
        <script src="../js/evenement.js" type="text/javascript"></script>
    </head>
    <body>
        <!-- <div clas="row">-->
        <div class="col-lg-offset-1 col-lg-5">

            <?php
            $query = $bdd->prepare('SELECT `id_evenement`, `nom`, `description`, `date`, `id_adresse`, `id_annonceur` FROM `evenement`');
            $query->execute();

            while ($row = $query->fetch()) {
                ?>


                <h4><?php echo $row['nom'] ?> </h4>
                <h6><?php echo $row['description'] ?> </h6>
                <h6><?php echo $row['date'] ?> </h6>

                <div class="row">
                    <div class="col-lg-offset-4 col-lg-4 ">
                        <button class="eve btn-small btn-danger btn" value="<?php echo $row['id_evenement'] ?>">Voir</button>
                    </div>
                </div> 

                <div class="row">
                    <div class="col-lg-offset-1 col-lg-8 ">
                        <div class="traitEvenement"></div>
                    </div>
                </div>        
                <?php
            }
            ?>

        </div>


        <div class="col-lg-5" id="map-canvas"></div>
        <!-- </div>-->
    </body>
</html>
<script>

</script>  
<style>
    html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
    }
</style>