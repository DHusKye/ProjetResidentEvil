<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jolly+Lodger&family=Manrope:wght@200..800&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="tableaux.css">
    <title>Tableaux des gosses</title>
</head>

<body class="bodyTableauEnfants">
<div class="titre text-body-secondary d-flex justify-content-center align-items-center mt-4">
    <h1 class="titre">Tableaux de stockage des enfants</h1>
</div>
<div class="d-flex justify-content-center align-items-center">
<?php
require 'db.php';
$tableauEnfants = $pdo->query('SELECT * FROM tableauEnfants');
?>

<table class="fs-5 m-3 ">
    <thead>
        <tr class="titreHeader">
            <th class="border-end border-black px-3 pt-1 pb-1 borderID">ID</th>
            <th class="border-end border-black px-3 pt-1 pb-1">Nom de Famille</th>
            <th class="border-end border-black px-3 pt-1 pb-1">Prénom</th>
            <th class="border-end border-black px-3 pt-1 pb-1">Date de naissance</th>
            <th class="border-end border-black px-3 pt-1 pb-1">Taille en cm</th>
            <th class="border-end border-black px-3 pt-1 pb-1">Poids en KG</th>
            <th class="border-end border-black px-3 pt-1 pb-1">Sexe Biologique</th>
            <th class="border-end border-black px-3 pt-1 pb-1">Date d'arrivée à l'orphelinat</th>
            <th class="border-end border-black px-3 pt-1 pb-1">Souvenirs</th>
            <th class="border-end border-black px-3 pt-1 pb-1">Ecole</th>
            <th class="px-3 pt-1 pb-1 borderEcole">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($donnees = $tableauEnfants->fetch())
        {
        ?>
        <tr class="opacity-50 fw-bolder">
            <td class="px-3 pt-1 pb-1 bg-white border-end border-black"><?php echo $donnees["id"]; ?></td>
            <td class="px-3 pt-1 pb-1 bg-white border-end border-black"><?php echo $donnees["nom"]; ?></td>
            <td class="px-3 pt-1 pb-1 bg-white border-end border-black"><?php echo $donnees["prenom"]; ?></td>
            <td class="px-3 pt-1 pb-1 bg-white border-end border-black"><?php echo $donnees["dateDeNaissance"]; ?></td>
            <td class="px-3 pt-1 pb-1 bg-white border-end border-black"><?php echo $donnees["taille"]; ?></td>
            <td class="px-3 pt-1 pb-1 bg-white border-end border-black"><?php echo $donnees["poids"]; ?></td>
            <td class="px-3 pt-1 pb-1 bg-white border-end border-black"><?php echo $donnees["sexe"]; ?></td>
            <td class="px-3 pt-1 pb-1 bg-white border-end border-black"><?php echo $donnees["dateDarrivee"]; ?></td>
            <td class="px-3 pt-1 pb-1 bg-white border-end border-black"><?php echo $donnees["souvenirs"]; ?></td>
            <td class="px-3 pt-1 pb-1 bg-white border-end border-black"><?php echo $donnees["ecole"]; ?></td>
            <td>
                <div class="d-flex">
                    <form action="" method="">
                        <input type="hidden" name="id" value="">
                        <button type="submit" name="supprimer">Suprimer</button>
                    </form>
                    <form>
                        <input type="hidden" name="id" value="">
                        <button type="submit" name="modifier">Modifier</button>
                    </form>
                </div> 
            </td> 
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
</div>

</body>
</html>