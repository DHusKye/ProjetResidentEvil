<?php 
include 'header.php';
include 'dbResidentEvil.php';

if (!isset($_GET['id'])) {
    die("Erreur : aucun ID d'enfant reçu.");
}

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['ecole'])) {
    $ecole = $_POST['ecole'];

    $stmt = $pdo->prepare("UPDATE ville SET  ecole = (SELECT enfant FROM ecole WHERE  ville.id = enfant.id");
    $stmt->execute([$ecole, $id]);

    $message = "<p style='color: green;'>École attribuée avec succès !</p>";
}
?>

<?php $tableaux = $pdo->query('SELECT ecole FROM enfant');
while ($donnes = $tableaux->fetch())
{
?>

<main>

        <div class="d-flex">
        <form method="POST">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>"> 
            <div><button type="submit" name="ecole" value="Heisenberg's House" class="mt-4 ms-4"><?php echo $donnes['ecole'];?></button></div>
        </form>
        </div>
        <?php 
            }
        ?>
    <div class="mt-5">

        <?php if (!empty($message)) {
            echo $message; 
        }
        ?>
    </div>

    <div class="mt-5">
        <a href='tableaux.php'>Voir la liste des enfants</a><br>
    </div>

    <div class="mt-2">
        <a href='inscristonenfant.php'>Retourner à la page d'inscription</a>
    </div>

</main>
</html>     