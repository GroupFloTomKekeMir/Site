<?php include('header.php'); ?>
<?php include('../php/connexionBdd.php'); ?>

<?php if(!empty($_SESSION['panier'])) {?>

<div class="container">

    <div class="row">
        


            <?php
            foreach ($_SESSION['panier']['nom'] as $cle1 => $s_array) {

                echo "<div class='col-lg-2'>" . $s_array . "</div>";
            }
            ?>

        
    </div>

    <div class="row">
        

            <?php
            foreach ($_SESSION['panier']['prix'] as $cle1 => $s_array) {

                 echo "<div class='col-lg-2'>" . $s_array . "</div>";
            }
            ?>

        
    </div>

    <div class="row">
       

            <?php
            foreach ($_SESSION['panier']['description'] as $cle1 => $s_array) {

                echo "<div class='col-lg-2'>" . $s_array . "</div>";
            }
            ?>

        
    </div>
</div>

<?php } else { echo "panier vide";} ?>