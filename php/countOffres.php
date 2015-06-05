<?php

//session_start(); 
include('connexionBdd.php');

function countMusiciens($bdd) {

    $sql = "select count(*) from offre INNER JOIN metier ON metier.id_metier = offre.id_metier WHERE offre.id_metier = 1";
    $response = $bdd->query($sql);
    while ($donnees = $response->fetch()) {
        echo $donnees['count(*)'];
    }

    $response->closeCursor();
}

function countDanseurs($bdd) {

    $sql = "select count(*) from offre INNER JOIN metier ON metier.id_metier = offre.id_metier WHERE offre.id_metier = 2";
    $response = $bdd->query($sql);
    while ($donnees = $response->fetch()) {
        echo $donnees['count(*)'];
    }

    $response->closeCursor();
}

function countRealisateurs($bdd) {

    $sql = "select count(*) from offre INNER JOIN metier ON metier.id_metier = offre.id_metier WHERE offre.id_metier = 3";
    $response = $bdd->query($sql);
    while ($donnees = $response->fetch()) {
        echo $donnees['count(*)'];
    }

    $response->closeCursor();
}

function countChoregraphes($bdd) {

    $sql = "select count(*) from offre INNER JOIN metier ON metier.id_metier = offre.id_metier WHERE offre.id_metier = 4";
    $response = $bdd->query($sql);
    while ($donnees = $response->fetch()) {
        echo $donnees['count(*)'];
    }

    $response->closeCursor();
}

function countCompositeurs($bdd) {

    $sql = "select count(*) from offre INNER JOIN metier ON metier.id_metier = offre.id_metier WHERE offre.id_metier = 5";
    $response = $bdd->query($sql);
    while ($donnees = $response->fetch()) {
        echo $donnees['count(*)'];
    }

    $response->closeCursor();
}

function countPhotographes($bdd) {

    $sql = "select count(*) from offre INNER JOIN metier ON metier.id_metier = offre.id_metier WHERE offre.id_metier = 6";
    $response = $bdd->query($sql);
    while ($donnees = $response->fetch()) {
        echo $donnees['count(*)'];
    }

    $response->closeCursor();
}
