<?php
require 'connexion.php';

header("Content-type: image/jpeg");
// chargement de l'image
$carte = imagecreatefromjpeg("france.jpg");




$requete = $pdo->prepare('select * from ville');
$requete->execute();

while($ligne_tab = $requete->fetch())
{         
    $noir = imagecolorallocate($carte, mt_rand(0,255), mt_rand(0,255), mt_rand(0,255));
    //x  y   diam
    imagefilledellipse($carte, $ligne_tab['pos_x'], $ligne_tab['pos_y'], $ligne_tab['diametre'],$ligne_tab['diametre'], $noir);

    //imagettftext (image destination, taille, inclinaison, pos_x, pos_y, couleur, chemin police ttf, texte a écrire);
    imagettftext($carte, 20, 0, $ligne_tab['pos_x'] + 15, $ligne_tab['pos_y'] + 5, $noir, "./desyrel.ttf", $ligne_tab['ville']);  
    
    

}

// creation de l'image au vol
imagejpeg($carte);
?>


