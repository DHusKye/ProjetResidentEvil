<?php 
session_start();
$pdo = new PDO("mysql:host=localhost;dbname=residentEvil", "root", "root");
if(isset($_POST['envoi'])){    // lorsque l'on clique sur le bouton envoie , la fonction if commence a partie de la en eexplicquant que si on clique sur envoie la fonction commence
    if(!empty($_POST['nomUtilisateur']) && !empty($_POST['mdp'])){

        $pseudo = htmlspecialchars($_POST['nomUtilisateur']) ;
        $mdp = sha1($_POST['mdp']);

        $insertionUtilisateur = $pdo->prepare('INSERT INTO utilisateur(nomUtilisateur, mdp) VALUES(?, ?) ') ;
        $insertionUtilisateur->execute(array($pseudo, $mdp));

        $recupUtilisateur = $pdo->prepare('SELECT * FROM utilisateur WHERE nomUtilisateur = ? AND mdp = ?');
        $recupUtilisateur->execute(array($pseudo, $mdp));
        if($recupUtilisateur->rowCount() > 0){   
            $_SESSION['nomUtilisateur'] = $pseudo;
            $_SESSION['mdp'] = $mdp;
            $_SESSION['id'] = $recupUtilisateur->fetch()['id'];     //on recuperer user et on recupr tout les donnes de cette utilsiateur et la on veut que l'id de lutilisateur
        }

            echo $_SESSION['id'];
    }else {
        echo "Veuillez remplir tout les champs d'inscription";
    }
}

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Château de Dimitrescu - Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    
    <link rel="stylesheet" href="inscrit.css"> 

    <link href="https://fonts.googleapis.com/css2?family=Nosifier&display=swap" rel="stylesheet">
</head>
<body>

    <img class="background-image" src="Resident-Evil-Villagehomme.jpg">

     <h1>Inscription</h1> 
    <div class="page-container d-flex flex-column align-items-center justify-content-center vh-100">
    <div class="background_encadrement"></div> 
      <img class="encadrement" src="Gemini_Generated_Image_7pkgtx7pkgtx7pkg-removebg-preview.png">
    
   
        <form action="" method="POST"> 
            <div class="mb-3">
                <label for="username" class="login-label">Nom d'utilisateur</label>
                <input type="text" class="form-control login-input" name="nomUtilisateur" required>
            </div>
                
            <div class="mb-3">
                <label for="password" class="login-label1">Mot de passe</label>
                <input type="password" class="form-control login-input1" name="mdp" required>
            </div>
                
            <div class="d-grid mt-4">
                <input type="submit" name='envoi' class="btn btn-danger text-uppercase login-btn">
                    valider mon Inscription
                </input>
            </div>
        </form>
       
    </div>


  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</body>
</html>