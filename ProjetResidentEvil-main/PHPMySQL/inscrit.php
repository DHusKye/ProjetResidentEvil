<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tableaux.css">
    <title>Page D'inscription</title>
</head>
<body class="flex">


<?php
    require 'dbResidentEvil.php';

?>


<div>

    
    <form action="insert.php" method="POST">
        
        <input type="text" name="nom" placeholder="Nom">
        <input type="text" name="prenom" placeholder="Prenom">
        <input type="number" name="age" placeholder="Age">
        <select name="sexe" id="">
            <option value="">Sexe</option>
            <option value="Homme">Homme</option>
            <option value="Femme">Femme</option>
            <option value="Autre">Autre</option>
        </select>
        <input type="text" name="email" placeholder="Email">
        <input type="date" name="dateAJour">
        <input type="submit" value="Ajouter">
        
    </form>
    
</div>


<?php 

$tableaux = $pdo->query('SELECT * FROM utilisateur');




while ($donnes = $tableaux->fetch())

 //foreach($tableaux as $tableau) {
//     echo "<p>$tableau</p>";

{
 ?>

<div class="margin">

    
    
    <table class="table-style">
        
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Age</th>
                <th>Sexe</th>
                <th>Email</th>
                <th>DateAJour</th>
                <th>Bouton</th>
            </tr>
        </thead>  
        <!-- remonter th -->
        
        
        <tbody>
            <tr>
                <td><?php echo $donnes['id']?></td>
                <td><?php echo $donnes['nom'];?></td>
                <td><?php echo $donnes['prenom'];?></td>
                <td><?php echo $donnes['age'];?></td>
                <td><?php echo $donnes['sexe'];?></td>
                <td><?php echo $donnes['email'];?></td>
                <td><?php echo $donnes['dateAJour'];?></td>
                <td>

                    <form action="modifierForm.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $donnes['id'] ?>">
                        <input type="submit" value="Modifier">
                    </form>

                    <form action="deleteUser.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $donnes['id'] ?>">
                        <input type="submit" value="Supprimer">
                    </form>
                </td>
            </tr>
        </tbody>
        
    </table>
    
</div>

<?php

}

$tableaux->closeCursor();

?>


</body>
</html>