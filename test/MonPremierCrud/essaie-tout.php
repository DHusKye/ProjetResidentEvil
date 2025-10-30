(
$conn = $tableaux;

 $delete = "DELETE FROM suivie WHERE ID =$name";
 if (tableaux_query($conn, $sql)){
     tableaux_close($conn);
     exit;
 }

 test pour un bouton supprimer
)




(
 $id=$_POST['id'];
$supp=$_POST['supp'];
if($supp == "oui"){
    $del=$pdo->prepare("delete ");
    $del->execute(array($id));
}

<button <?php echo [$id]?> onClick="">Effacer </button>

)