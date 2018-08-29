<?php
function afficheForm(){
?>
<form action="session_captcha.php" method="post">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center p-5">
                <img src="imagecaptcha.php" alt="captcha">
            </div>
            <div class="col-12 text-center">
                <label for=""> CAPTCHA </label>                                
            </div>
            <div class="col-12 text-center">
                <input class="form" type="text" name="code">
            </div>
            <div class="col-12 text-center p-3">
                <button class="btn btn-secondary" type="submit"> Envoyer </button>
            </div>
        </div>
    </div>
</form>
<?php                                                                 
}
?>    


<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
        <title> session captcha</title>
    </head>

    <body>


        <?php
        session_start();
        //on verifie que l'on a recu par la methode post une variable envoyer (bouton)
        if(isset($_POST['code']))
        {
            $code = $_POST['code'];

            if($code == $_SESSION['captcha']) //empty remplace le == ''
            {

                echo 'BRAVO';
            }
            else
            {
                afficheForm();
            }
        }

        else
        {
            afficheForm();
        }
        ?>



        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

    </body>
</html>



