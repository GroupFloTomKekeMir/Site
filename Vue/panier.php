<?php include('header.php'); ?>
<?php include('../php/connexionBdd.php'); ?>

<?php if (!empty($_SESSION['panier'])) { ?>
    <h1 class="panier">PANIER</h1>
    <div class="container">
        <div class="row corpsProfil">
            <div class="nomPanier">NOM</div>
            <div class="row titreProfil">



                <?php
                foreach ($_SESSION['panier']['nom'] as $cle1 => $s_array) {

                    echo "<div class='col-lg-2'>" . $s_array . "</div>";
                }
                ?>


            </div>
            <div class="row">
                <div class='col-lg-12'>
                    <div class="traitEvenement"></div>
                </div>
            </div>
            <div class="nomPanier">DESCRIPTION</div>
            <div class="row corpProfil">


                <?php
                foreach ($_SESSION['panier']['description'] as $cle1 => $s_array) {

                    echo "<div class='col-lg-2'>" . $s_array . "</div>";
                }
                ?>


            </div>
            <div class="row">
                <div class='col-lg-12'>
                    <div class="traitEvenement"></div>
                </div>
            </div>
            <div class="nomPanier">PRIX</div>
            <div class="row piedProfil">



                <?php
                foreach ($_SESSION['panier']['prix'] as $cle1 => $s_array) {

                    echo "<div class='col-lg-2'>" . $s_array . "€</div>";
                }
                ?>

            </div>
        </div>
    </div>

<?php
} else {
    echo "<div class='col-lg-offset-4 col-lg-4'><h1>Votre panier est vide</h1></div><div class='col-lg-offset-4 col-lg-4'><img src='http://www.google.fr/url?source=imglanding&ct=img&q=http://blogs.voyance-astrologie.wengo.fr/files_experts/content/experts/10514/smiley.gif&sa=X&ei=1MdvVd6pH4i3UdCpgPAH&ved=0CAkQ8wc&usg=AFQjCNGDk6tmWHHHy6x6OKWC-EcSlDYXGw' alt='Smiley face' height='242' width='242'></img></div>";
}
?>


