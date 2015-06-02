<?php
include('header.php');
include('../php/connexionBdd.php');

$id_metier = $_GET['id_metier'];

$query = $bdd->prepare('select id_offre , titre , reference , date_debut_publi , fin_publi , nbr_poste , descr_poste , descr_profil, duree_contrat , offre.id_contrat, contrat.libelle as nom_contrat, id_annonceur , diffuseur.id_diffuseur, metier.libelle as nom_metier, diffuseur.nom as nom_diffuseur FROM offre INNER JOIN contrat ON contrat.id_contrat = offre.id_contrat INNER JOIN metier ON metier.id_metier = offre.id_metier INNER JOIN diffuseur ON diffuseur.id_diffuseur = offre.id_diffuseur WHERE metier.id_metier = ?');
$query->execute(array($id_metier));

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
                        <p><?php echo $row['nom_metier'] ?></p>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-lg-offset-1 col-lg-2">
                        <p>Contrat </p>
                    </div>
                    <div class="col-lg-offset-1 col-lg-7">
                        <p><?php echo $row['nom_contrat'] ?></p>
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
                        <p>Diffuseur </p>
                    </div>
                    <div class="col-lg-offset-1 col-lg-7">
                        <p><?php echo $row['nom_diffuseur'] ?></p>
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

<script>

    $(document).ready(function () {

        $(".postuler").click(function () {
            
            var id_offre = $(this).val();
            
            $.ajax({
                method: "GET",
                url: "../php/postuler.php",
                data: {id_offre: id_offre},
                dataType: 'html',
                success: function (data) {
                    alert(data);
                }

            });

        })
    });


</script>



