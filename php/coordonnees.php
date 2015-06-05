<?php

include('connexionBdd.php');

$id_evenement = $_GET['query'];
//echo $id_evenement;

$query = $bdd->prepare('select latitude , longitude from evenement where id_evenement = ?');
$query->execute(array($id_evenement));
while ($row = $query->fetch()) {
    echo $row['latitude'];
    echo" ";
    echo $row['longitude'];
}