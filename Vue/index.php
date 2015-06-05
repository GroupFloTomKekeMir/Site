<?php
include('header.php');
include('../php/connexionBdd.php');
?>

<header class="masthead">
    <div class="container">
        <div class="row">
            <h1><a href="#" title="scroll down for your viewing pleasure">MegaCasting</a>
                <p class="lead">Le leader dans le recrutement d'artistes</p></h1>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col col-sm-12">

                <div class="panel">
                    <div class="panel-body" style="text-align: center;">
                        MegaCasting vous permet de découvrir de nombreuses offres et de vous forger un vrai parcours professionnel.
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col col-sm-3">
            <div id="sidebar">
                <ul class="nav nav-stacked">
                    <li><h3 class="highlight">A propos</h3></li>
                    <a class="twitter-timeline" href="https://twitter.com/MegaProd53" data-widget-id="606733809321713665">Tweets de @MegaProd53</a>
                    <script>!function (d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                            if (!d.getElementById(id)) {
                                js = d.createElement(s);
                                js.id = id;
                                js.src = p + "://platform.twitter.com/widgets.js";
                                fjs.parentNode.insertBefore(js, fjs);
                            }
                        }(document, "script", "twitter-wjs");</script>
                </ul>
            </div>
        </div>
        <?php
        if (isset($_SESSION['id'])) {
            $id = $_SESSION['id'];
            ?> 
    <?php if ($id == 2) { ?>
                <form method="post" action="./creernews.php">
                    <button>Creer une news</button>
                </form>
                    <?php } ?>
                <?php }
                ?>
        <div class="col col-sm-9">
            <div class="panel">
                <?php
                $query = $bdd->prepare('SELECT `id_news`, `titre`, `contenu` FROM `news` ');
                $query->execute();
                while ($row = $query->fetch()) {
                    ?>
                    <h1 id="titre"><?php echo $row['titre'] ?></h1>
                    <div id="contenu"><?php echo $row['contenu'] ?></div>
<?php } ?>
            </div>
        </div>
    </div>
</div>