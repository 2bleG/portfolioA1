<?php

include('db.php');

$query_rs_passions = $connexion->prepare("SELECT * FROM passions ORDER BY ID ASC");
$query_rs_passions->execute();
$row_rs_passions = $query_rs_passions->fetch();

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
                    <a href="ajoutPassions.php" class="stuff">ajouter un bloc</a>
                <?php 
                do {
                    echo "<p>". $row_rs_passions ['ID'] . ' - '. $row_rs_passions ['titre']. "<a class=stuff href='modifPassions.php?id=". $row_rs_passions ['ID']."'>Modifier</a> <a class=stuff href='supPassions.php?id=". $row_rs_passions ['ID']."'>Supprimer</a></p>";
                    } while ($row_rs_passions = $query_rs_passions->fetch());
                ?>
            </div>
        </main>
</div>

</body>
</html>