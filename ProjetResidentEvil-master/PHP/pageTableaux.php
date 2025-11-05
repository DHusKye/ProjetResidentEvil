<?php   
include 'header.php';

   if(!isset($_SESSION['id'])) {
    header('location: pageInscription2.php');
    exit;
}
?>

<main class="bodyTableaux min-vh-100 ">

    
<div class="titre text-body-secondary d-flex justify-content-center align-items-center m-4">
    <h1 class="titre">Tableaux de stockage des enfants</h1>
</div>


<table class="d-flex justify-content-center align-items-center fs-5 m-5 ">
    <tr class="titreHeader ">
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

    <tr class="opacity-50 fw-bolder">
        <td class="px-3 pt-1 pb-1 bg-white border-end border-black">1</td>
        <td class="px-3 pt-1 pb-1 bg-white border-end border-black ">Tete de neux</td>
        <td class="px-3 pt-1 pb-1 bg-white border-end border-black">Tete d'oeuf</td>
        <td class="px-3 pt-1 pb-1 bg-white border-end border-black">17/08/6699</td>
        <td class="px-3 pt-1 pb-1 bg-white border-end border-black">185cm</td>
        <td class="px-3 pt-1 pb-1 bg-white border-end border-black">50kg</td>
        <td class="px-3 pt-1 pb-1 bg-white border-end border-black">Garçon</td>
        <td class="px-3 pt-1 pb-1 bg-white border-end border-black">23/08/2000 20h36</td>
        <td class="px-3 pt-1 pb-1 bg-white border-end border-black">Souvenirs</td>
        <td class="px-3 pt-1 pb-1 bg-white">Serpentar</td>
    </tr>

    <tr class="opacity-50 fw-bolder">
        <td class="px-3 pt-1 pb-1 bg-secondary border-end border-black">10</td>
        <td class="px-3 pt-1 pb-1 bg-secondary border-end border-black">Tete a poids </td>
        <td class="px-3 pt-1 pb-1 bg-secondary border-end border-black">Tete de glands</td>
        <td class="px-3 pt-1 pb-1 bg-secondary border-end border-black">17/08/6698</td>
        <td class="px-3 pt-1 pb-1 bg-secondary border-end border-black">180cm</td>
        <td class="px-3 pt-1 pb-1 bg-secondary border-end border-black">300kg</td>
        <td class="px-3 pt-1 pb-1 bg-secondary border-end border-black">Fille</td>
        <td class="px-3 pt-1 pb-1 bg-secondary border-end border-black">23/08/2000 20h36</td>
        <td class="px-3 pt-1 pb-1 bg-secondary border-end border-black">Souvenirs</td>
        <td class="px-3 pt-1 pb-1 bg-secondary">Serpentar</td>
    </tr>


</table>




<audio id="myCrie" src="/Projet/Audio/MontageAudio/ResidentEvilCrieBebe.mp4" autoplay loop ></audio>
<script src="/Projet/Audio/ParametreAudio/parametreAudioTableauxEnfant.js"></script>

</main>
</html>