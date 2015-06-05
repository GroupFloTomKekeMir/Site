<?php
include('header.php');
include('../php/connexionBdd.php');
?>
<script src="../js/creernews.js" type="text/javascript"></script>
<link href="../style/style_index.css" rel="stylesheet" type="text/css"/>

<div style="text-align: center;">
    <h3>Création de news</h3>
</div>
<br /><br /><br />
<div id="reponse"></div>

<div class="row">
    <div class="col-lg-offset-5">
        <label for="Titre">Titre :</label><br />
        <input type="text" id="titre" value="" />
    </div>
</div>

<br />
<div class="row">
    <div class="col-lg-offset-5">
        <label>Contenu :</label>
    </div>
</div>

<br />
<div class="row">
    <div class="col-lg-offset-5">
        <textarea  id="contenu" value=""></textarea>
    </div>
</div>

<br />
<div class="row">
    <div class="col-lg-offset-5">
        <button class="creernews btn-small btn-danger btn">Poster</button>
    </div>
</div>

<script>
</script>