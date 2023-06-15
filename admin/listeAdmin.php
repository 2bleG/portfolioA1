<?php

include('db.php');

$query_rs_admin = $connexion->prepare("SELECT * FROM admin ORDER BY ID ASC");
$query_rs_admin->execute();
$row_rs_admin = $query_rs_admin->fetch();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="hub.php">retour au hub</a>
    <br>
    <a href="ajoutAdmin.php">ajouter un bloc</a>
<?php 
 do {
    echo "<p>". $row_rs_admin ['ID'] . ' - '. $query_rs_admin ['user']. "<a href='modifAdmin.php?id=". $row_rs_admin ['ID']."'>Modifier</a> | <a href='supAdmin.php?id=". $row_rs_admin ['ID']."'>Supprimer</a></p>";
    } while ($row_rs_admin = $query_rs_admin->fetch());
?>


</body>
</html>