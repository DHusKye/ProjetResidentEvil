<!-- Exercice : Table de multiplication

Objectif : Créer un programme qui affiche les tables de multiplication de 1 à 10.

Consignes :

Utilisez des boucles imbriquées (une boucle dans une autre)
Affichez le résultat sous forme de tableau formaté
Chaque ligne doit montrer : X x Y = -->

<?php 

$tableOnes = ["1x1=1","1x2=2","1x3=3","1x4=4","1x5=5","1x6=6","1x7=7","1x8=8","1x9=9","1x10=10"];
$tableTwos = ["2x1=2","2x2=4","2x3=6","2x4=8","2x5=10","2x6=12","2x7=14","2x8=16","2x9=18","2x10=20"];
$tableThrees = ["3x1=3","3x2=6","3x3=9","3x4=12","3x5=15","3x6=18","3x7=21","3x8=24","3x9=27","3x10=30"];
$tableFours = ["4x1=4","4x2=8","4x3=12","4x4=16","4x5=20","4x6=24","4x7=28","4x8=32","4x9=36","4x10=40"];
$tableFives = ["5x1=4","5x2=10","5x3=15","5x4=20","5x5=25","5x6=30","5x7=35","5x8=40","5x9=45","5x10=50"];
$tableSixs = ["6x1=6","6x2=12","6x3=18","6x4=24","6x5=30","6x6=36","6x7=42","6x8=48","6x9=54","6x10=60"];
$tableSevens = ["7x1=7","7x2=14","7x3=21","7x4=28","7x5=35","7x6=42","7x7=49","7x8=56","7x9=63","7x10=70"];
$tableEights = ["8x1=8","8x2=16","8x3=24","8x4=32","8x5=40","8x6=48","8x7=56","8x8=64","8x9=72","8x10=80"];
$tableNines = ["9x1=9","9x2=18","9x3=27","9x4=36","9x5=45","9x6=54","9x7=63","9x8=72","9x9=81","9x10=90"];
$tableTens = ["10x1=10","10x2=20","10x3=30","10x4=40","10x5=50","10x6=60","10x7=70","10x8=80","10x9=90","10x10=100"];

$nombre = 9 ;

if($nombre === 1) { 
    foreach ( $tableOnes as $tableOne){
        echo "" . $tableOne . "<br>";
    }
} if ($nombre === 2) {
    foreach ( $tableTwos as $tableTwo){
    echo "" . $tableTwo . "<br>";
}
}if ($nombre === 3) {
    foreach ( $tableThrees as $tableThree){
    echo "" . $tableThree . "<br>";
}
}
if ($nombre === 4) {
    foreach ( $tableFours as $tableFour){
    echo "" . $tableFour . "<br>";
}
}
if ($nombre === 5) {
    foreach ( $tableFives as $tableFive){
    echo "" . $tableFive . "<br>";
}
}if($nombre === 6) { 
    foreach ( $tableSixs as $tableSix){
        echo "" . $tableSix . "<br>";
    }
} if ($nombre === 7) {
    foreach ( $tableSevens as $tableSeven){
    echo "" . $tableSeven . "<br>";
}
}if ($nombre === 8) {
    foreach ( $tableEights as $tableEight){
    echo "" . $tableEight . "<br>";
}
}
if ($nombre === 9) {
    foreach ( $tableNines as $tableNine){
    echo "" . $tableNine . "<br>";
}
}
if ($nombre === 10) {
    foreach ( $tableTens as $tableTen){
    echo "" . $tableTen . "<br>";
}
};


?> 






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>