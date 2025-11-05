<?php   
include 'header.php';

   if(!isset($_SESSION['id'])) {
    header('location: pageInscription2.php');
    exit;
}

require 'dbResidentEvil.php';
if(isset($_POST['envoi'])){    // lorsque l'on clique sur le bouton envoie , la fonction if commence a partie de la en eexplicquant que si on clique sur envoie la fonction commence
    if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['dateDeNaissance']) && !empty($_POST['taille']) && !empty($_POST['poids']) && !empty($_POST['sexe']) && !empty($_POST['dateArriver'])) {

        $nom = htmlspecialchars($_POST['nom']) ;
        $prenom = htmlspecialchars($_POST['prenom']);
        $dateDeNaissance = htmlspecialchars($_POST['dateDeNaissance']);
        $taille = $_POST['taille'];
        $poids = $_POST['poids'];
        $sexe = $_POST['sexe'];
        $dateArriver = $_POST['dateArriver'];
        $souvenir = $_POST['souvenir'];

        $insertionUtilisateur = $pdo->prepare('INSERT INTO enfant(nom, prenom, dateDeNaissance, taille, poids, sexe, dateArriver, souvenir) VALUES(?, ?, ?, ?, ?, ?, ?, ?)') ;
        $insertionUtilisateur->execute(array($nom, $prenom, $dateDeNaissance, $taille, $poids, $sexe, $dateArriver, $souvenir));

        $dernierId = $pdo->lastInsertId();

            header("Location: pageChoixEcole.php?id=" . $dernierId);
            exit;
        
    }}
    ?>

    // selecter id , le selecteur renvoie dans a db des ecoles tu me prend le om de la ville par rapporta id al ville via l'id , unef ois id recup tu la transforme en tant que variable $ville , insert iou 
    //$ville 

    // tout les info que tu cherhcer sur ville sd=on dans la db dans la ville a ce numero la 

    //faire un slecteur qui donne l'id , une fois fait , sotck la dans une variab le et ensuite tu demadne a la db de recup dans ecole la villle 2 en rappott avec l'id, fetchall nom des ecoles , un array 
    //recup id 2, declare variable , faire insert tou , mettre $nom variable


<main class="bodyInscriptionEnfant">


<div class="container">
    <div><h1 class="road-rage-regular darkRed fontSize" style="margin-top: 20px; margin-left: 30px;">Inscris ton enfant</h1></div>
    <div><h2 class="road-rage-regular red taille" style="margin-left: 30px; margin-bottom: 30px;">Formulaire de dépôt (sans retour possible)</h2></div>
    <div class="d-flex justify-content-center">

        <form action="" method="POST" class="row">

            <div class="d-flex justify-content-center" style="gap: 300px">
                
                <div class="d-grid gap-3">
                    <div class="d-grid">
                        <h3 class="road-rage-regular text-light taille">Nom de famille</h3>
                        <input class="form-control inputGradient inputInscription"  type="text" name="nom" placeholder="" required>
                    </div>
                    <div class="d-grid gap-2">
                        <h3 class="road-rage-regular text-light taille">Prénom</h3>
                        <input class="form-control inputInscription"  type="text" name="prenom" placeholder="" required>
                    </div>
                    <div class="d-grid gap-2">
                        <h3 class="road-rage-regular text-light taille">Date de naissance</h3>
                        <input class="form-control inputInscription"  type="date" name="dateDeNaissance" placeholder="" required>
                    </div>
                    <div class="d-grid gap-2">
                        <h3 class="road-rage-regular text-light taille">Taille en cm</h3>
                        <input class="form-control inputInscription"  type="number" name="taille" placeholder="" required>
                    </div>
                </div>

                <div class="d-grid gap-3">
                    <div class="d-grid gap-2">
                        <h3 class="road-rage-regular text-light taille">Poids en kg</h3>
                        <input class="form-control inputInscription"  type="number" name="poids" placeholder="" required>
                    </div>
                    <div class="d-grid gap-2">
                        <h3 class="road-rage-regular text-light taille">Sexe biologique</h3>
                        <input class="form-control inputInscription" type="text" name="sexe" placeholder='' required>
                    </div>
                    <div class="d-grid gap-2">
                        <h3 class="road-rage-regular text-light taille">Date d'arrivée à l'orphelinat</h3>
                        <input class="form-control inputInscription"  type="date" name="dateArriver" placeholder="" required>
                    </div>
                    <div class="d-grid gap-2">
                        <h3 class="road-rage-regular text-light taille">Souvenirs</h3>
                        <input class="form-control inputInscription"  type="text" name="souvenir" placeholder="">  
                    </div>
                     <div class="d-grid gap-2">
                        <h3 class="road-rage-regular text-light taille">Ecole</h3>
                        <select name="ecole" id="">
                            <option value="2">Heinserberg'sHouse</option>
                            <option value="3">Moreau's Lab</option>
                            <option value="4">Luiza's House</option>
                            <option value="5">Stronghold</option>
                            <option value="6">DrownedHouse</option>
                            <option value="7">ChâteauDimitrescu</option>
                        </select> 
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center" style="margin-top: 20px;">
                <p class="road-rage-regular grey taille">Vous êtes certain ? Une fois signé, le pacte est scellé</p>
            </div>

            <div class="d-flex justify-content-center" style="margin-bottom: 10px;">
                <input class="btn-image" type="submit" name="envoi">
            </div>
        </form>
    </div>

    <a href="pageIndex.php">
        <button>
            Retour
        </button>
    </a> 
    
</div>
</main>
</html>







