<?php
include('header.php');
include('../php/connexionBdd.php');
?>
<script src="../js/creernews.js" type="text/javascript"></script>
<div class="row">
    <div class="col-lg-offset-6">
        <h3>Création de news</h3>
    </div>
</div>
<div id="reponse"></div>

<div class="row">
    <div class="col-lg-6">
        <label for="Titre">Titre:</label>
    </div>
    <div class="col-lg-6">
        <input type="text" id="titre" value="" />
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <label for="Contenu">Contenu</label>
    </div>
    <div class="col-lg-6">
        <textarea  id="contenu" value="" style="margin: 0px; width: 370px; height: 118px;" ></textarea>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <button class="creernews">Poster</button>
    </div>
</div>


<script>





</script>