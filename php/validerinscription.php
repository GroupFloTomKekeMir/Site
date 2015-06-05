<?php

include('connexionBdd.php');

$login = $_GET['login'];
$password = $_GET['password'];
$password2 = $_GET['password2'];
$nom = $_GET['nom'];
$prenom = $_GET['prenom'];
$age = $_GET['age'];
$email = $_GET['email'];
$telephone = $_GET['telephone'];
$numero = $_GET['numero'];
$rue = $_GET['rue'];
$cp = $_GET['cp'];
$ville = $_GET['ville'];
$description = $_GET['description'];
$nom_artiste = $_GET['nom_artiste'];

if ($login != "" && $password != "" && $password2 != "" && $nom != "" && $prenom != "" && $email != "" && $telephone != "" && $description != "" && $nom_artiste != "" && $ville != "" && $cp != "" && $rue != "") {

    if ($password != "" && $password2 != "" && $password == $password2) {
        if (is_string($numero)) {
            $query = $bdd->prepare("INSERT INTO `adresse` (`numero`, `code_postal`, `rue`, `ville`) VALUES (?,?,?,?)");
            $query2 = $bdd->prepare("INSERT INTO `utilisateur`(`login`, `password`, `nom`, `prenom`, `nom_artiste`, `age`, `mail`, `telephone`, `descr_util`, `id_adresse`) VALUES (?,?,?,?,?,?,?,?,?,?)");

            try {
                $query->execute(array($numero, $cp, $rue, $ville));

                $UID = $bdd->lastInsertId();
                $query2->execute(array($login, $password, $nom, $prenom, $nom_artiste, $age, $email, $telephone, $description, $UID));
                echo "Inscription réussie";
            } catch (Exception $ex) {
                echo 'Échec de l\'inscription';
            }
        } else {
            echo 'Veuillez entrer un nombre. Le champs Numéro ou Rue est mal remplie.';
        }
    } else {
        echo 'Vos mots de passe ne correspondent pas.';
    }
} else {
    echo "Un des champs est vide !";
}
    
