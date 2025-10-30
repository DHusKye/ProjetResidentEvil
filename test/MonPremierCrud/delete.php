<?php


    require 'db.php';
   // var_dump($_POST['id']);
//Vérifie que le formulaire a bien été soumis via POST
if ($_SERVER['REQUEST_METHOD'] === "POST") {


    $id_del = $_POST['id'];

    $delete = $pdo->prepare('DELETE  FROM utilisateurs WHERE id=?'); 
    $delete->execute([$id_del]);
    header('Location: index.php');

    exit;

}


?>