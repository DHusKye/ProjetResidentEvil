<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['dateDeNaissance']) && !empty($_POST['taille']) && !empty($_POST['poids']) && !empty($_POST['sexe']) && !empty($_POST['dateDarrivee']) && !empty($_POST['souvenirs'])) {
        $nom = trim($_POST['nom']);
        $prenom = trim($_POST['prenom']);
        $dateDeNaissance = $_POST['dateDeNaissance'];
        $taille = $_POST['taille'];
        $poids = $_POST['poids'];
        $sexe = $_POST['sexe'];
        $dateDarrivee = $_POST['dateDarrivee'];
        $souvenirs = $_POST['souvenirs'];

        try {
            $sql = "INSERT INTO tableau_enfants (nom, prenom, dateDeNaissance, taille, poids, sexe, dateDarrivee, souvenirs) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$nom, $prenom, $dateDeNaissance, $taille, $poids, $sexe, $dateDarrivee, $souvenirs]);
            
            $dernierId = $pdo->lastInsertId();

            header("Location: choixEcole.php?id=" . $dernierId);
            exit;

        } catch (PDOException $e) {
            echo "<p style='color: red;'>Erreur lors de l'ajout dans la base de données :</p>";
            echo "<p>" .htmlspecialchars($e->getMessage()) . "</p>";

        }
    } else {

        echo "<p style='color:red;'>Tous les champs sont obligatoires.</p>";
        echo "<p><a href='inscristonenfant.php'>Retour</a></p>";
    }
} else {
    echo "<p style='color:red;'>Méthode non autorisée.</p>";
    echo "<p><a href='inscristonenfant.php'>Retour</a></p>";      
} 
?>