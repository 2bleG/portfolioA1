<?php

include('db.php');

$query_rs_personnalite = $connexion->prepare("SELECT * FROM personnalite ORDER BY ID ASC");
$query_rs_personnalite->execute();
$row_rs_personnalite = $query_rs_personnalite->fetch();

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
                    <a href="ajoutPersonnalite.php" class="stuff">ajouter un bloc</a>
                <?php 
                do {
                    echo "<p>". $row_rs_personnalite ['ID'] . ' - '. $row_rs_personnalite ['titre']. "<a class=stuff href='modifPersonnalite.php?id=". $row_rs_personnalite ['ID']."'>Modifier</a> <a class=stuff href='supPersonnalite.php?id=". $row_rs_personnalite ['ID']."'>Supprimer</a></p>";
                    } while ($row_rs_personnalite = $query_rs_personnalite->fetch());
                ?>
            </div>
        </main>
</div>

</body>
</html>