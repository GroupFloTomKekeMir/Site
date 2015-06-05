<?php

include('../php/connexionBdd.php');

session_start();

$id_offre = $_GET['id_offre'];

if (isset($id_offre)) {

    try {
        $query = $bdd->prepare('DELETE FROM `postuler` WHERE `id_offre` = ? AND `id_util` = ?');
        $query->execute(array($id_offre, $_SESSION['id']));
    } catch (Exception $ex) {
        
    }
}
    
    

