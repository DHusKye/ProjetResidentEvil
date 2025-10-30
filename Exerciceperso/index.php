<?php
$fruits = ["pomme", "banane", "fraise"];


foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}
?>


<?php 

$age = 18;

if($age >= 18) {
    echo "Tu es majeur.";
}else {
    echo"Tu es mineur.";
}

?>



<?php 

$note = 1; 

if($note >= 16 ){
    echo "Excellent !!";
}elseif ($note >= 10) {
    echo"Bien jouer !";
}else {
    echo "A retravailler.";
}

?>

<br>

<?php 

for ($i = 1; $i <= 5 ; $i++) {
    echo"Ligue" . $i . "<br>";
}

?>

<?php 
$i = 1 ; 

while ($i <= 3){
    echo "Compteur : $i<br>";
    $i++;
}

?>

<?php
$animaux = ["chat", "Chien" , "poisson"];
foreach ($animaux as $animal) {
    echo"Animal : $animal<br>";
}

?>


<?php 

function direBonjour($nom) {
    return "Bonjour, " . $nom . " !";
}

echo direBonjour("Alice");

?>



<?php
$estAdmin = False;
?>


<p>Admin ? <?php echo $estAdmin ? "Oui" : "Non"; ?></p>






