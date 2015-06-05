<?php

include('connexionBdd.php');

$titre = $_GET['titre'];
$contenu = $_GET['contenu'];



try {

    if ($titre != "" && $contenu != "") {

        $query = $bdd->prepare("INSERT INTO `news`(`titre`, `contenu`) VALUES (?,?)");
        $query->execute(array($titre, $contenu));
        echo "Création réussie";
    }
} catch (Exception $ex) {
    echo "Création échouée";
}

