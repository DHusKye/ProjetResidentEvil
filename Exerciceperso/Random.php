<?php 


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $prenom = trim($_POST["prenom"]); // retire les espaces
    $prenom = htmlspecialchars($prenom); // protège le HTML
    if (!empty($prenom)) {
        echo "<p>👋 Bonjour, <strong>$prenom</strong> !</p>";
    } else {
        echo "<p style='color:red'>Veuillez entrer votre prénom.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Enzo</title>
</head>
<body>

    <form action="" method="post">
        <label>Votre prénom :</label><br>
        <input type="text" name="prenom"><br><br>
        <button type="submit">Envoyer</button>
    </form>
    
</body>
</html> 



<?php




function random(){
    
    $tableaux = ["Pikachu ", "Particularité", "Papillution", "Généralité"];

    $table = array_rand($tableaux);

    $infos = $tableaux[$table];



    $nombre = rand(0,100);

   
    
    
        if ($nombre <= 50 AND $nombre == true) {

           
            echo $infos;

            echo " Vrai ";

            return  "le résultat est ". $nombre ." donc il est en dessous / Trop petit  !!!";
        
        
        } else {
            
            echo 'Faux ';

            return  "le résultat est ". $nombre ." donc il est au-dessus / Il est Super Grand Celui là!!!";

        
    };

};

echo random();


// function random(){  // Fonction (Nom)
//     $nombre = rand(0, 100); // Nombre Random (entre 0 et 100)
//     $isTrue = $nombre <= 50; // Variable isTrue (qui est en soit inutile, mais la pour l'exo on le fait) 
//     return $isTrue; // On retourne la variable isTrue
// }



// function afficherTableau(){
    
//     // Appelle la fonction random() et stocke son résultat (true ou false) dans $isTrue
//     $isTrue = random();
    
//     // Vérifie si $isTrue est égal à true
//     if ($isTrue == true){
        
//         // Permet d'accéder à la variable $tableaux définie en dehors de la fonction
//         global $tableaux;
        
//         // Boucle qui parcourt chaque élément du tableau $tableaux
//         foreach ($tableaux as $value){
            
//             // Affiche la valeur actuelle (le br sert a retourner a la ligne)
//             echo $value . "<br>";
            
//         }
        
//     // Si $isTrue est false (donc nombre > 50)
//     } else {
//         echo "Le tableau ne sera pas affiché (nombre > 50)";
        
//     }


