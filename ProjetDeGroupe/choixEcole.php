<?php
require 'db.php';

if (!isset($_GET['id'])) {
    die("Erreur : aucun ID d'enfant reçu.");
}

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['ecole'])) {
    $ecole = $_POST['ecole'];

    $sql = "UPDATE tableau_enfants SET ecole = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$ecole, $id]);

    $message = "<p style='color: green;'>École attribuée avec succès !</p>";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Choix de l'école">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Road+Rage&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Choix de l'école</title> 
</head>

<body>
<nav class="navbar main-navbar navbar-expand-lg sticky-top p-3" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center navbar-gauche" href="#">
            <img src="logo.png" alt="Logo" class="navbar-logo">
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

<div class="d-flex">
    <form method="POST">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
        <div><button type="submit" name="ecole" value="Heisenberg's House" class="mt-4 ms-4">Heisenberg's House</button></div>
        <div><button type="submit" name="ecole" value="Moreau's Lab" class="mt-4 ms-4">Moreau's Lab</button></div>
        <div><button type="submit" name="ecole" value="Luiza's House" class="mt-4 ms-4">Luiza's House</button></div>
        <div><button type="submit" name="ecole" value="Stronghold" class="mt-4 ms-4">Stronghold</button></div>
        <div><button type="submit" name="ecole" value="Drowned Houses" class="mt-4 ms-4">Drowned Houses</button></div>
        <div><button type="submit" name="ecole" value="Château Dimitrescu" class="mt-4 ms-4">Château Dimitrescu</button></div>
    </form>
</div>

<div class="mt-5">
<?php if (!empty($message)) {
    echo $message; 
}?>
</div>

<div class="mt-5">
    <a href='tableaux.php'>Voir la liste des enfants</a><br>
</div>
<div class="mt-2">
    <a href='inscristonenfant.php'>Retourner à la page d'inscription</a>
</div>

</body>
</html>