<?php
    // connection a la base de données
    $pdo = new PDO("mysql:host=localhost;dbname=residentevil", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>