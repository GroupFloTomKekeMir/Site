
<?php

include('../php/connexionBdd.php');

$id_offre = $_GET['id_offre'];

if (isset($id_offre)) {

    $query = $bdd->prepare('SELECT `titre`, `reference`, `date_debut_publi`, `fin_publi`, `nbr_poste`, `descr_poste`, `descr_profil`, `duree_contrat`,contrat.libelle as contrat, annonceur.nom as annonceur, diffuseur.nom as diffuseur, metier.libelle as metier FROM `offre` INNER JOIN contrat ON contrat.id_contrat = offre.id_contrat INNER JOIN annonceur ON annonceur.id_annonceur = offre.id_annonceur INNER JOIN diffuseur ON diffuseur.id_diffuseur = offre.id_diffuseur INNER JOIN metier ON metier.id_metier = offre.id_metier WHERE `id_offre` = ?');
    $query->execute(array($id_offre));

    while ($row = $query->fetch()) {

        echo "<br/>";
        echo "Référence : " . $row['reference'];
        echo "<br/>";
        echo "Date de début de publication : " . $row['date_debut_publi'];
        echo "<br/>";
        echo "Date de fin de publication :" . $row['fin_publi'];
        echo "<br/>";
        echo "Nombre de poste : " . $row['nbr_poste'];
        echo "<br/>";
        echo "Description du poste : " . $row['descr_poste'];
        echo "<br/>";
        echo "Description du profil : " . $row['descr_profil'];
        echo "<br/>";
        echo "Durée du contrat :" . $row['duree_contrat'];
        echo "<br/>";
        echo "Contrat : " . $row['contrat'];
        echo "<br/>";
        echo "Annonceur : " . $row['annonceur'];
        echo "<br/>";
        echo "Diffuseur : " . $row['diffuseur'];
        echo "<br/>";
        echo "Métier : " . $row['metier'];
        echo "<br/>";
        echo "<br/>";
    }
}
?>

