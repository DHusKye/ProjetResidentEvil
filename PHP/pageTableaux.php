<?php   
include 'header.php';

   if(!isset($_SESSION['id'])) {
    header('location: pageInscription2.php');
    exit;
}

require 'dbResidentEvil.php';

?>

<main class="bodyTableaux min-vh-100 ">

    
<div class="titre text-body-secondary d-flex justify-content-center align-items-center m-4">
    <h1 class="titre">Tableaux de stockage des enfants</h1>
</div>

<table class="d-flex flex-column justify-content-center align-items-center fs-5 m-5 ">
    <thead>
        <tr class="titreHeader">
            <th class="border-end border-black px-3 pt-1 pb-1 borderID">ID</th>
            <th class="border-end border-black px-3 pt-1 pb-1">Nom de Famille</th>
            <th class="border-end border-black px-3 pt-1 pb-1">Prénom</th>
            <th class="border-end border-black px-3 pt-1 pb-1">Date de naissance</th>
            <th class="border-end border-black px-3 pt-1 pb-1">Taille en cm</th>
            <th class="border-end border-black px-3 pt-1 pb-1">Poids en KG</th>
            <th class="border-end border-black px-3 pt-1 pb-1">Sexe Biologique</th>
            <th class="border-end border-black px-3 pt-1 pb-1">Date d'arriver à l'orphelinat</th>
            <th class="border-end border-black px-3 pt-1 pb-1">Souvenirs</th>
            <th class="px-3 pt-1 pb-1 borderEcole">Ecole</th>
        </tr>
    </thead>
<?php
$tableaux = $pdo->query('SELECT * FROM enfant');
while ($donnes = $tableaux->fetch())
{
?>
    <tbody >
        <tr class="opacity-50 fw-bolder">
            <td class="px-3 pt-1 pb-1 bg-white border-end border-black"><?php echo $donnes['id'];?></td>
            <td class="px-3 pt-1 pb-1 bg-white border-end border-black "><?php echo $donnes['nom'];?></td>
            <td class="px-3 pt-1 pb-1 bg-white border-end border-black"><?php echo $donnes['prenom'];?></td>
            <td class="px-3 pt-1 pb-1 bg-white border-end border-black"><?php echo $donnes['dateDeNaissance'];?></td>
            <td class="px-3 pt-1 pb-1 bg-white border-end border-black"><?php echo $donnes['taille'];?></td>
            <td class="px-3 pt-1 pb-1 bg-white border-end border-black"><?php echo $donnes['poids'];?></td>
            <td class="px-3 pt-1 pb-1 bg-white border-end border-black"><?php echo $donnes['sexe'];?></td>
            <td class="px-3 pt-1 pb-1 bg-white border-end border-black"><?php echo $donnes['dateArriver'];?></td>
            <td class="px-3 pt-1 pb-1 bg-white border-end border-black"><?php echo $donnes['souvenir'];?></td>
            <td class="px-3 pt-1 pb-1 bg-white border-end border-black" name="ecole"><?php echo $donnes['ecole'];?></td>  
            <!-- Ecole -->
        </tr>
    </tbody>
    
    <?php
}
$tableaux->closeCursor();
?>

</table>
<audio id="myCrie" src="/Projet/Audio/MontageAudio/ResidentEvilCrieBebe.mp4" autoplay loop ></audio>
<script src="/Projet/Audio/ParametreAudio/parametreAudioTableauxEnfant.js"></script>

</main>
</html>