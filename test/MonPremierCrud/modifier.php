<?php
    require 'db.php';
    
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
    
    
    if (!empty($_POST['id']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['age']) && !empty($_POST['sexe']) && !empty($_POST['dateAJour'])){
 
        
    $id = $_POST['id'] ;
    $nom = $_POST['nom'] ;
    $prenom = $_POST['prenom'] ;
    $age = $_POST['age'] ;
    $sexe = $_POST['sexe'] ;

    $stmt  = $pdo->prepare('UPDATE utilisateurs SET  nom = ?, prenom = ?, age = ?, sexe = ? WHERE id=?'); 
    
    $stmt->execute([
        $nom,
        $prenom,
        $age,
        $sexe,
        $id
    ]);
        
try {
    
    $tableaux = $pdo->prepare('SELECT * FROM utilisateurs WHERE id= ?');
    
    $tableaux->execute([$id]);
    
    $donnes = $tableaux->fetch(PDO::FETCH_ASSOC);
    
    
    var_dump($donnes);

}catch(PDOExeption) {
    echo "Pue la merde enfaite";
}



   
    var_dump($stmt);

    header('Location: index.php');

    exit;


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

        
        
        
        <form action="modifier.php" method="POST">
            
            <input type="hidden" name="id" value='<?php  echo $donnes['id']; ?>'>
            <input type="text" name="nom" placeholder="Nom" value='<?php echo $donnes['nom']; ?>'>
            <input type="text" name="prenom" placeholder="Prenom" value='<?php echo $donnes['prenom']; ?>'>
            <input type="number" name="age" placeholder="Age" value='<?php echo $donnes['age'];?>'>
            <select name="sexe" id=" value='<?php echo $donnes['sexe']; ?>'">
                <option value="">Sexe</option>
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
                <option value="Autre">Autre</option>
            </select>
            <input type="submit" value="Modifier">
            
    </form>

    </body>
</html>







<?php   
// cmment grace a quelel variable on envoie des informatio a uun fchier a une atre de index a delete.php

















// $stmt = $pdo->prepare($sql);

// $stmt->execute([
//     $nom,
//     $prenom,
//     $age,
//     $sexe,
//     $id

// ]);

//  header('Location: index.php');
?>
