<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Inscris ton enfant">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Road+Rage&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Inscris ton enfant</title> 
</head>
<body class="bodyEnfants m-0 w-100 h-100">
<nav class="navbar main-navbar navbar-expand-lg sticky-top p-3" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center navbar-gauche" href="#">
            <img src="../ressources/logo.png" alt="Logo" class="navbar-logo">
            <span class="navbar-title ms-3">Orphelinat</span>
        </a>

        <div class="d-flex navbar-centre-links me-auto ms-5">
            <a href="#link1" class="mystery-box mx-1"><span class="box-text">Lien 1</span></a>
            <a href="#link2" class="mystery-box mx-1"><span class="box-text">Lien 2</span></a>
            <a href="#link3" class="mystery-box mx-1"><span class="box-text">Lien 3</span></a>
        </div>

        <div class="d-flex navbar-right">
            <a href="#register" class="nav-button register-btn btn me-2">Inscris toi</a>
            <a href="#login" class="nav-button login-btn btn">Login</a>
        </div>
    </div>
</nav>

<div class="container">
    <div><h1 class="road-rage-regular darkRed fontSize mt-3 ms-5">Inscris ton enfant</h1></div>
    <div><h2 class="road-rage-regular red taille ms-5 mb-4">Formulaire de dépôt (sans retour possible)</h2></div>
    <div class="d-flex justify-content-center">
        <form action="../php/insert.php" method="POST" class="row">
            <div class="d-flex justify-content-center" style="gap: 300px">
                
                <div class="d-grid gap-3 w-50">
                    <div class="d-grid">
                        <h3 class="road-rage-regular text-light taille">Nom de famille</h3>
                        <input class="form-control inputGradient w-100" type="text" name="nom" placeholder="" required>
                    </div>
                    <div class="d-grid gap-2">
                        <h3 class="road-rage-regular text-light taille">Prénom</h3>
                        <input class="form-control w-100" type="text" name="prenom" placeholder="" required>
                    </div>
                    <div class="d-grid gap-2">
                        <h3 class="road-rage-regular text-light taille">Date de naissance</h3>
                        <input class="form-control w-100" type="date" name="dateDeNaissance" placeholder="" required>
                    </div>
                    <div class="d-grid gap-2">
                        <h3 class="road-rage-regular text-light taille">Taille en cm</h3>
                        <input class="form-control w-100" type="text" name="taille" placeholder="" required>
                    </div>
                </div>

                <div class="d-grid gap-3 w-50">
                    <div class="d-grid gap-2">
                        <h3 class="road-rage-regular text-light taille">Poids en kg</h3>
                        <input class="form-control w-100" type="text" name="poids" placeholder="" required>
                    </div>
                    <div class="d-grid gap-2">
                        <h3 class="road-rage-regular text-light taille">Sexe biologique</h3>
                        <input class="form-control w-100" type="text" name="sexe" placeholder="" required>
                    </div>
                    <div class="d-grid gap-2">
                        <h3 class="road-rage-regular text-light taille">Date d'arrivée à l'orphelinat</h3>
                        <input class="form-control w-100" type="date" name="dateDarrivee" placeholder="" required>
                    </div>
                    <div class="d-grid gap-2">
                        <h3 class="road-rage-regular text-light taille">Souvenirs</h3>
                        <input class="form-control w-100" type="text" name="souvenirs" placeholder="" required>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-3"><p class="road-rage-regular grey taille">Vous êtes certain ? Une fois signé, le pacte est scellé</p></div>
            <div class="d-flex justify-content-center mb-5"><input class="btn-image" type="submit" value="Ajouter"></div>
        </form>
    </div>
    
</div>
</body>
</html>







