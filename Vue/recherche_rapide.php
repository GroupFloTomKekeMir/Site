<script src="../js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="../js/postuler_offre.js" type="text/javascript"></script>
<?php
include('header.php');
include('../php/connexionBdd.php');


$offre = $_POST['offre_recherche'];


$query = $bdd->prepare('SELECT `id_offre`, `titre`, `reference`, `date_debut_publi`, `fin_publi`, `nbr_poste`, `descr_poste`, `descr_profil`, `duree_contrat`,contrat.libelle as contrat, annonceur.nom as annonceur, diffuseur.nom as diffuseur, metier.libelle as metier FROM `offre` INNER JOIN contrat ON contrat.id_contrat = offre.id_contrat INNER JOIN annonceur ON annonceur.id_annonceur = offre.id_annonceur INNER JOIN diffuseur ON diffuseur.id_diffuseur = offre.id_diffuseur INNER JOIN metier ON metier.id_metier = offre.id_metier WHERE `titre` LIKE ?');
$query->execute(array('%' . $offre . '%'));

while ($row = $query->fetch()) {
    ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-offset-3 col-lg-6 detailCasting">

                <div class="row">
                    <div class="col-lg-offset-1 col-lg-2">
                        <p>Titre </p>
                    </div>
                    <div class="col-lg-offset-1 col-lg-7">
                        <p><?php echo $row['titre'] ?></p>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-lg-offset-1 col-lg-2">
                        <p>Métier </p>
                    </div>
                    <div class="col-lg-offset-1 col-lg-7">
                        <p><?php echo $row['metier'] ?></p>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-lg-offset-1 col-lg-2">
                        <p>Contrat </p>
                    </div>
                    <div class="col-lg-offset-1 col-lg-7">
                        <p><?php echo $row['contrat'] ?></p>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-lg-offset-1 col-lg-2">
                        <p>Référence </p>
                    </div>
                    <div class="col-lg-offset-1 col-lg-7">
                        <p><?php echo $row['reference'] ?></p>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-lg-offset-1 col-lg-2">
                        <p>Nombre de poste </p>
                    </div>
                    <div class="col-lg-offset-1 col-lg-7">
                        <p><?php echo $row['nbr_poste'] ?></p>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-lg-offset-1 col-lg-2">
                        <p>Description du poste </p>
                    </div>
                    <div class="col-lg-offset-1 col-lg-7">
                        <p><?php echo $row['descr_poste'] ?></p>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-lg-offset-1 col-lg-2">
                        <p>Description du profil </p>
                    </div>
                    <div class="col-lg-offset-1 col-lg-7">
                        <p><?php echo $row['descr_profil'] ?></p>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-lg-offset-1 col-lg-2">
                        <p>Annonceur </p>
                    </div>
                    <div class="col-lg-offset-1 col-lg-7">
                        <p><?php echo $row['annonceur'] ?></p>
                    </div>                    
                </div>

                <div class="row">
                    <div class="col-lg-offset-1 col-lg-2">
                        <?php if (isset($_SESSION['id'])) { ?>
                            <button class="postuler" value="<?php echo $row['id_offre'] ?>">Postuler</button>
                        <?php } ?>
                    </div>
                </div>
                <div class="trait"></div>
            </div>
        </div> 
    </div>

    <?php
}
?>

