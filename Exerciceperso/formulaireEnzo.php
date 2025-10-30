<!-- Crée moi une fonction qui génère un nombre random entre 0 et 1000 ///////
Stoque ce nombre dans une variables et vérifie si il est pair ou impair ///////

Si il est pair alors passe une variable que tu aura crée en true, sinon en False.//////

Si la variable est True alors tu va afficher un tableau (entier)//////

Si la variable est fausse alors tu va afficher un objet random dans le tableau //////
-->




<?php 


function random(){

    $nombre = rand(0,1000);

    $tableaux = ["Pikachu ", " Particularité", " Papillution", " Généralité", "Asuna", "Kirito", "Nezuko"];

    $table = array_rand($tableaux);

    $infos = $tableaux[$table];
    
    
    if ($nombre % 2 == 0){

        echo "Nombre est pair " . $nombre . "! <br>" ;
        $isTrue = true;

        echo(implode("<br>",$tableaux));
        

    }else {
        
        echo "Nombre est impair " . $nombre . "! <br>";
        $isTrue = false;

        echo $infos;
    }
    
    
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
    <?php echo random(); ?>
</body>
</html>