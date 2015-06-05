<?php

session_start();
include('connexionBdd.php');

if (empty($_POST['identifiant']) || empty($_POST['password'])) { //Oublie d'un champ
    $message = '<p>une erreur s\'est produite pendant votre identification.
	Vous devez remplir tous les champs</p>
	<p>Cliquez <a href="./connexion.php">ici</a> pour revenir</p>';
} else { //On check le mot de passe
    $query = $bdd->prepare('SELECT *
        FROM utilisateur WHERE login = ? AND password = ?');
    $query->execute(array($_POST['identifiant'], $_POST['password']));
    $data = $query->fetch();
    if ($data['password'] == $_POST['password']) { // Acces OK !
        $_SESSION['pseudo'] = $data['nom_artiste'];
        $_SESSION['id'] = $data['id_util'];

        header('location: ../Vue/index.php');
    } else { // Acces pas OK !
        $message = '<p>Une erreur s\'est produite 
	    pendant votre identification.<br /> Le mot de passe ou le pseudo 
            entré n\'est pas correcte.</p><p>Cliquez <a href="../Vue/connexion.php">ici</a> 
	    pour revenir à la page précédente
	    <br /><br />Cliquez <a href="../Vue/index.php">ici</a> 
	    pour revenir à la page d accueil</p>';
    }
    $query->CloseCursor();
}
echo $message . '</div></body></html>';
?>


