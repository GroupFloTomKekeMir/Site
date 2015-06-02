<?php
session_start();
include('../php/connexionBdd.php');

$id_offre = $_GET['id_offre'];
$id_util = $_SESSION['id'];


if (isset($_SESSION['id'])) {
    
    $query = $bdd->prepare('SELECT `id_offre`, `id_util` FROM `postuler` WHERE id_offre = ? and id_util = ?');
    $query->execute(array($id_offre, $id_util));
  
    if (!empty($query->fetch())) {
        echo "Vous avez déjà postuler pour cette offre.";
    } else {
        $query2 = $bdd->prepare('INSERT INTO `postuler`(`id_offre`, `id_util`) VALUES (?,?)');
        $query2->execute(array($id_offre, $id_util));
        echo "Vous avez bien postulé pour cette offre.";
    }

}
?>