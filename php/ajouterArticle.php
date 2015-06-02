<?php
session_start();
include('connexionBdd.php');
$id = $_GET['id'];
$nom = null;
$description = null;
$prix = null;


try {

    $query = $bdd->prepare('select nom, prix, description FROM article where id_article = ?');
    $query->execute(array($id));

    while ($row = $query->fetch()) {
        $select = array();
        $select['nom'] = $row['nom'];
        $select['prix'] = $row['prix'];
        $select['description'] = $row['description'];
    }
} catch (Exception $ex) {
    
}

$select['id'] = $id;
if (!isset($_SESSION['panier'])) {
echo "bonjour";
    $_SESSION['panier'] = array();
    $_SESSION['panier']['id_article'] = array();
    $_SESSION['panier']['nom'] = array();
    $_SESSION['panier']['description'] = array();
    $_SESSION['panier']['prix'] = array();
}

array_push($_SESSION['panier']['id_article'], $select['id']);
array_push($_SESSION['panier']['nom'], $select['nom']);
array_push($_SESSION['panier']['description'], $select['description']);
array_push($_SESSION['panier']['prix'], $select['prix']);

echo var_dump($_SESSION['panier']);
?>