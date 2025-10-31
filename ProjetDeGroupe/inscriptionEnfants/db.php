<?php

$pdo = new PDO("mysql:host=localhost;dbname=resident_evil", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>