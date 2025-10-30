<!-- Fait:

Une fonction qui génère un chiffre random entre 0 et 100 / 

Crée une variable  / 

Si le chiffre random est entre 0 et 50 alors la variable est vrai, sinon elle est fausse


Si c'est vrai alors tu crée une boucle qui va parcourir un tableau grâce au chiffre random de ta fonction -->


<?php

$nombre = 0 ; 
$resultat ;

function random($nombre){

    $nombre = rand(0,100);
    return "Voici : " . $nombre . " !";
    
}

if (random($nombre) <= 50) {

    echo "Ta bon";
    

}else {

    echo "Trop haut";
}





?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<p><?php echo random() ;?></p>


</body>
</html>





