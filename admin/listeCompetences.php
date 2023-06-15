<?php

include('db.php');

$query_rs_competences = $connexion->prepare("SELECT * FROM competences ORDER BY ID ASC");
$query_rs_competences->execute();
$row_rs_competences = $query_rs_competences->fetch();

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
                    <a href="ajoutCompetences.php" class="stuff">ajouter un bloc</a>
                <?php 
                do {
                    echo "<p>". $row_rs_competences ['ID'] . ' - '. $row_rs_competences ['titre']. "<a class=stuff href='modifCompetences.php?id=". $row_rs_competences ['ID']."'>Modifier</a> <a class=stuff href='supCompetences.php?id=". $row_rs_competences ['ID']."'>Supprimer</a></p>";
                    } while ($row_rs_competences = $query_rs_competences->fetch());
                ?>
            </div>
        </main>
</div>

</body>
</html>