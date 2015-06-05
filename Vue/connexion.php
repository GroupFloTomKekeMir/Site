<?php include('header.php'); ?>


<div class="contain" style="margin-top : 60px;">



    <form method="POST" action="../php/connect.php">

        <div class="row" style ="margin-bottom: 70px; margin-top: 150px; margin-left: 100px; ">
            <div class="col-lg-5">
                <div class="row">
                    <div class="col-lg-offset-10 col-lg-2">
                        <h1> Connexion</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">	
            <div class="col-lg-offset-4 col-lg-9" style ="margin-bottom: 40px">
                <div class="col-lg-1">
                    <label for = "identifiant">Login : </label>
                </div>
                <div class="col-lg-2">
                    <input name="identifiant" id="identifiant" type="text" />
                </div>			
            </div>
        </div>

        <div class="row">
            <div class="col-lg-offset-4 col-lg-9" style ="margin-bottom: 40px">			
                <div class="col-lg-1">
                    <label for = "password">Mot de passe  : </label>                                    
                </div>
                <div class="col-lg-2">
                    <input name="password" id="password" type="password" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-offset-5">			
                <input name="valider" id="valider" type="submit" />
            </div>
        </div>


    </form>

</div>