<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orphelinat du Château Dimitrescu</title>
    <link href='../CSS/css.css'>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Creepster&family=Cinzel:wght@400;700&display=swap" rel="stylesheet">
    
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.0.1/model-viewer.min.js"></script>
</head>

<body class="bodyIndex d-flex flex-column min-vh-100">

    <?php include 'header.php' ?>

    <img class="Bebe position-fixed" src="../ImageResidentEvil/freepik__a-childs-broken-porcelain-doll-with-vacant-black-e__26280-removebg-preview.png">
    <img class="lady position-fixed z-5" src="../ImageResidentEvil/DameBlanche.png" alt="dame_blanche">
    <img class="bebe_pendu position-fixed  w-20 h-20 z-5" src="../ImageResidentEvil/bebe pendue.png" alt="Bébé pendu">
    
    
    <div class="text-bulle shadow-lg position-fixed z-5 rounded-5 p-3 ">
        <span class="typewriter-text">
        Au-delà de la rouille et des brumes du Château Dimitrescu, le véritable accueil s'attend pas dans le hall. Il réside dans le silence glacial de ses couloirs. Chut. Vous êtes enfin chez vous.
        </span>
    </div>

    <div class='d-flex justify-content-center marginTopIndex'>
        <div class='d-flex align-items-center'>
            <div>
                <a href="pageInscriptionEnfant.php"class='text-danger' >Inscrit ton Enfant</a>
            </div>
            <div class='fleche-gauche'>
                <img class='imageFleche' src="../ImageResidentEvil/Fleche-removebg-preview.png" alt="Flèche directionnelle" >
            </div>
        </div>

        <div class='d-flex flex-column'>
            <div>
                <a href="pageTableaux.php">Enfant pris à charge</a>
            </div> 

            <div class='fleche-haut'>
                <img class='imageFleche' src="../ImageResidentEvil/Fleche-removebg-preview.png"  alt="Flèche directionnelle">
            </div>
            
            <div class='fleche-bas'>
                <img class='imageFleche' src="../ImageResidentEvil/Fleche-removebg-preview.png"  alt="Flèche directionnelle">
            </div>

            <div>
                <a href="pageProf.php" >Information Prof</a>
            </div>

        </div>   

        <div class='d-flex align-items-center'>
            <div class='fleche-droit'>
                <img class='imageFleche' src="../ImageResidentEvil/Fleche-removebg-preview.png" alt="Flèche directionnelle">
            </div>
            <div>
                <a href="pageRestauration.php" class='text-danger'>Restauration</a>
            </div>
        </div>
    </div>

</body>
</html>
