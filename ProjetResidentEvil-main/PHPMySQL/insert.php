<?php 

require 'dbResidentEvil.php';
//Vérifie que le formulaire a bien été soumis via POST
if ($_SERVER['REQUEST_METHOD'] === "POST") {


// on vérifie que tous les champs attendus existent Et ne sont pas vides
    if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['age']) && !empty($_POST['sexe'])&& !empty($_POST['email'])) {
        //on sécurise les données recues
        $nom = trim($_POST['nom']);
        $prenom = trim($_POST['prenom']);  // trim enleve les epsace et caractere spéciaux
        $age = $_POST['age'];
        $sexe = $_POST['sexe'];
        $email = $_POST['email'];


        try {
            // Requete préparer pour éviter les injectinons SQL
            $sql = "INSERT INTO utilisateur (nom, prenom, age, sexe, email) VALUE (?, ?, ?, ?, ?)";
            $stmt = $pdo->prepare($sql);
            $stmt ->execute([$nom, $prenom, $age, $sexe, $email]);

            // Rediction vers l'accueil si tou s'est bien passé
            header("Location: inscrit.php");
            exit;

        } catch (PDOException $e ) {
            // En cas d'erreur SQL , on affiche un message d'erreur lissible
        echo "<p style='color:red';>Erreur lors de l'ajout dans la base de données : </p>";
        echo "<p>" . htmlspecialchars($e->getMessage()) . "</p>";

        // optionnel : on peut enregister l'erreur dans un fichier log
        // file_putucontens('erreurs.log', $e->getMessage(), FILE_APPEND);

        } 

    }else {
           // si des champs sont mnquants ou vides
        echo "<p style='color:red;'> Tous les champs sont obligatoires.</p>";
        echo "<p><a href='inscrit.php'> Retour</a></p>";

        
    }

}else{
    //si quelqu'un tente d'accéder au script sans POST
    echo "<p style='color:red;'>Méthode non autorisée.</p>";
    echo "<p><a href='inscrit.php'> Retour</a></p>";
}


?>