<?php 

require 'dbResidentEvil.php';

if($_SERVER['REQUEST_METHOD'] === "POST") {

$id_del = $_POST['id'];

    $delete = $pdo->prepare('DELETE  FROM utilisateur WHERE id=?'); 
    $delete->execute([$id_del]);
    header('Location: inscrit.php');

    exit;

}





?>