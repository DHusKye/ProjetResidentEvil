<?php
    require 'dbResidentEvil.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {

    if (!empty($_POST['id'])){

        $id = $_POST['id'] ;

    $tableaux = $pdo->query('SELECT * FROM utilisateur WHERE id = '. $id .'');
    
    $donnes = $tableaux->fetch(PDO::FETCH_ASSOC);
   

    }
}

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Modifier</title>
    </head>
    <body>     
        
        <form action="modifUser.php" method="POST">
            
            <input type="hidden" name="id" value="<?php  echo $donnes['id']; ?>">
            <input type="text" name="nom" placeholder="Nom" value="<?php echo $donnes['nom'] ;?>">
            <input type="text" name="prenom" placeholder="Prenom" value='<?php echo $donnes['prenom']; ?>'>
            <input type="number" name="age" placeholder="Age" value='<?php echo $donnes['age'];?>'>
            <select name="sexe" id="sexe" value='<?php echo $donnes['sexe']; ?>'>
                <option value="Homme" <?= $donnes['sexe'] === 'Homme' ? 'selected' : '' ?>>Homme</option>   <!-- ici donnes see ,si cette donnes sexe egale a homme tu le met automatique en slected = selectionner  -->
                <option value="Femme" <?= $donnes['sexe'] === 'Femme' ? 'selected' : '' ?>>Femme</option>    <!-- condiition ténaire -->
                <option value="Autre" <?= $donnes['sexe'] === 'Autre' ? 'selected' : '' ?>>Autre</option>
            </select>
            <input type="text" name="email" placeholder="Email" value=" <?php echo $donnes["email"]; ?>">
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
