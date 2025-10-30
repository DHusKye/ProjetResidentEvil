<?php 
require 'dbResidentEvil.php';
//  var_dump($_POST);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $id = $_POST['id'] ;
    $nom = $_POST['nom'] ;
    $prenom = $_POST['prenom'];
    $age = $_POST['age'] ;
    $sexe = $_POST['sexe'];
    $email = $_POST['email'];
    
    if (!empty($id) && !empty($nom) && !empty($prenom) && !empty($age) && !empty($sexe) && !empty($email)){

        try {
    
            $sql = "UPDATE utilisateur SET nom = ?, prenom = ?, age = ?, sexe = ?, email = ? WHERE id = ?";

            $stmt = $pdo->prepare($sql);
            
            $stmt->execute([$nom, $prenom, $age, $sexe, $email, $id]);
                header('Location: pageInscription.php');
                exit;
            } 
            catch (PDOException $e){
                 echo "Ton Erreur " . $e. " !";
            }     
          
    }else{

        echo "Y te manque des champs non remplie";
    }
        }
?>