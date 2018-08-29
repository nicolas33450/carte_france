<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
        <title> affiche ville </title>
    </head>

    <body>
        <div class="container">
           <h1 class="display-4 text-center p-3"> Carte de france interactive LOL !!!! </h1>
           <div class="row">
               <div class="col-12">
                   <a href="session_captcha.php"><button class="btn btn-warning float-right mr-5"> Connexion </button></a>
               </div>
           </div>
            <div class="row">
                <div class="col-12 text-center p-4">
                    <img src="carte_france.php" alt="france" title="france" usemap="#plan"/>
                </div>
            </div>
        </div>       

        <map id="plan" name="plan">

            <?php
            require 'connexion.php';
            $requete = $pdo->prepare('select * from ville');
            $requete->execute();

            while($ligne_tab = $requete->fetch())
            {
            ?>

            <area shape="circle" coords="<?=$ligne_tab['pos_x']?>,<?=$ligne_tab['pos_y']?>,<?=$ligne_tab['diametre']?>"
                  href="<?= $ligne_tab['url']?>"
                  target="_blank" alt="MDN" />

            <?php
            }
            ?>
        </map>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    </body>
</html>














































