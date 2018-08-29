<?php
session_start();
header("Content-type: image/jpeg");

// nombre de lettres
$nb=mt_rand(5,7);

//$im=mt_rand(1,6);
// chargement de l'image
//$dest = imagecreatefromjpeg("fond_" . $im .  ".jpg");

$tab=['fond_1.jpg','fond_2.jpg','fond_3.jpg','fond_4.jpg','fond_5.jpg','fond_6.jpg'];
$im=mt_rand(0,5);
$dest = imagecreatefromjpeg($tab[$im]);


$i=0;
$debutx=20;
$debuty=45;

$code = '';

while($i<$nb)
{
	// tirage de la lettre
	$tirage=chr(mt_rand(65,90));
    
    $code = $code . $tirage;

	// couleur du texte
	$text_color = imagecolorallocate ($dest, mt_rand(0,255), mt_rand(0,255), mt_rand(0,255));

	// taille de la lettre			
	$taille =mt_rand(27,30); 

	// inclinaison de lal ettre
	$rotation=mt_rand(-25,28);

	// pour déplacer horizontalement ou verticalment chaque lettre
	$posx = $debutx + ($i * 15) + mt_rand(-4,4);
	$posy = $debuty + mt_rand(-10,10);

	// on choisi une fonte parmi 6 (nommées f1.ttf, f2.ttf ...)
	$font="./f" .mt_rand(1,6) . ".ttf";

	//imagettftext (image destination, taille, inclinaison, pos_x, pos_y, couleur, chemin police ttf, texte a écrire);
	imagettftext ($dest, $taille, $rotation, $posx, $posy, $text_color , $font, $tirage);

	$i++;
}

$_SESSION['captcha'] = $code;

// creation de l'image au vol
imagejpeg($dest);

imagedestroy($dest);


?>

