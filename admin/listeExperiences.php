<?php

include('db.php');

$query_rs_experiences = $connexion->prepare("SELECT * FROM experiences ORDER BY ID ASC");
$query_rs_experiences->execute();
$row_rs_experiences = $query_rs_experiences->fetch();

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
                <a href="ajoutExperiences.php" class="stuff">ajouter un bloc</a>
                <?php 
                do {
                    echo "<p>". $row_rs_experiences ['ID'] . ' - '. $row_rs_experiences ['titre']. "<a class=stuff href='modifExperiences.php?id=". $row_rs_experiences ['ID']."'>Modifier</a> <a class=stuff href='supExperiences.php?id=". $row_rs_experiences ['ID']."'>Supprimer</a></p>";
                    } while ($row_rs_experiences = $query_rs_experiences->fetch());
                ?>
            </div>
        </main>
</div>

</body>
</html>