<?php include('header.php'); ?>
<?php include('../php/connexionBdd.php'); ?>
<script src="../js/inscription.js" type="text/javascript"></script>
<div class="row">
    <div class="col-lg-offset-4 col-lg-4">
        <h1 style="text-align: center"> Inscription </h1>

        <div class="row" style="margin-top : 50px;">   
            <div class="row">
                <div class="col-lg-offset-2 col-lg-3">
                    <label for = "login">Login: </label>
                </div>
                <div class="col-lg-2">
                    <input name="login" id="login" type="text" />

                </div>
                <div class="col-lg-4">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="row">
                <div class="col-lg-offset-2 col-lg-3">
                    <label for = "password">Mot de passe: </label>
                </div>
                <div class="col-lg-2">
                    <input name="password" id="password" type="password" />

                </div>
                <div class="col-lg-4">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="row">
                <div class="col-lg-offset-2 col-lg-3">
                    <label for = "password2">Confirmer: </label>
                </div>
                <div class="col-lg-2">
                    <input name="password2" id="password2" type="password" />
                </div>
                <div class="col-lg-4">
                </div>
            </div>
        </div>

        <div class="row">	
            <div class="row">
                <div class="col-lg-offset-2 col-lg-3">
                    <label for = "nom">Nom: </label>
                </div>
                <div class="col-lg-2">
                    <input name="nom" id="nom" type="text" />
                </div>
                <div class="col-lg-4">
                </div>
            </div>
        </div>

        <div class="row">	
            <div class="row">
                <div class="col-lg-offset-2 col-lg-3">
                    <label for = "prenom">Prénom: </label>
                </div>
                <div class="col-lg-2">
                    <input name="prenom" id="prenom" type="text" />

                </div>
                <div class="col-lg-4">
                </div>
            </div>
        </div>

        <div class="row">	
            <div class="row">
                <div class="col-lg-offset-2 col-lg-3">
                    <label for = "age">Age: </label>
                </div>
                <div class="col-lg-2">
                    <input name="age" id="age" type="number" />

                </div>
                <div class="col-lg-4">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="row">
                <div class="col-lg-offset-2 col-lg-3">
                    <label for = "email">Email: </label>
                </div>
                <div class="col-lg-2">
                    <input name="email" id="email" type="text" />

                </div>
                <div class="col-lg-4">
                </div>
            </div>
        </div>  

        <div class="row">	
            <div class="row">
                <div class="col-lg-offset-2 col-lg-3">
                    <label for = "telephone">Téléphone: </label>
                </div>
                <div class="col-lg-2">
                    <input name="telephone" id="telephone" type="tel" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" />

                </div>
                <div class="col-lg-4">
                </div>
            </div>
        </div>   

        <div class="row">
            <div class="row">
                <div class="col-lg-offset-2 col-lg-3">
                    <label for = "adresse">Adresse: </label>
                </div>
                <div class="col-lg-4 " id= "numerobouton"> 
                    <input name="numero" id="numero" type="number" step="1" placeholder="n° " style="width: 40px;"/>                             
                    <input name="rue" id="rue" type="text" placeholder="rue " style="width: 140px;">
                    <input name="CP" id="cp" type="text" placeholder="Code postal " style="width: 140px;">
                    <input name="ville" id="ville" type="text" placeholder="ville " style="width: 140px;">
                </div>
            </div>
        </div>

        <div class="row">	
            <div class="row">
                <div class="col-lg-offset-2 col-lg-3">
                    <label for = "description">Description: </label>
                </div>
                <div class="col-lg-2">
                    <input name="description" id="description" type="text" />

                </div>
                <div class="col-lg-4">
                </div>
            </div>
        </div>

        <div class="row">	
            <div class="row">
                <div class="col-lg-offset-2 col-lg-3">
                    <label for = "nom_artiste">Nom d'artiste : </label>
                </div>
                <div class="col-lg-2">
                    <input name="nom_artiste" id="nom_artiste" type="text" />   
                </div>
                <div class="col-lg-4">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-offset-2 col-lg-3">	
                <button class="valider" style="width: 350px; margin-top: 30%; margin-left: -8%">Valider</button>
            </div>
        </div>
    </div>
</div>

<div id="test"></div>
