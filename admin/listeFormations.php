<?php

include('db.php');

$query_rs_formations = $connexion->prepare("SELECT * FROM formations ORDER BY ID ASC");
$query_rs_formations->execute();
$row_rs_formations = $query_rs_formations->fetch();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylephp.css">
    <title>Document</title>
</head>
<body>
<div class="container">
        <main class="hexgrid">
            <div class="grid"></div>
            <div class="light"></div>
            <div class="formul">
                    <a href="hub.php" class="stuff">retour au hub</a>
                    <br>
                    <a href="ajoutFormations.php" class="stuff">ajouter un bloc</a>
                <?php 
                do {
                    echo "<p>". $row_rs_formations ['ID'] . ' - '. $row_rs_formations ['titre']. "<a class=stuff href='modifFormations.php?id=". $row_rs_formations ['ID']."'>Modifier</a> <a class=stuff href='supFormations.php?id=". $row_rs_formations ['ID']."'>Supprimer</a></p>";
                    } while ($row_rs_formations = $query_rs_formations->fetch());
                ?>
            </div>
        </main>
</div>

</body>
</html>