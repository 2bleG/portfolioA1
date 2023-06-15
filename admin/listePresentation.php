<?php

include('db.php');

$query_rs_presentation = $connexion->prepare("SELECT * FROM presentation ORDER BY ID ASC");
$query_rs_presentation->execute();
$row_rs_presentation = $query_rs_presentation->fetch();

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
                <a href="ajoutPresentation.php" class="stuff">ajouter un bloc</a>
                <?php 
                do {
                    echo "<p>". $row_rs_presentation ['ID'] . ' - '. $row_rs_presentation ['titre']. "<a class=stuff href='modifPresentation.php?id=". $row_rs_presentation ['ID']."'>Modifier</a> <a class=stuff href='supPresentation.php?id=". $row_rs_presentation ['ID']."'>Supprimer</a></p>";
                    } while ($row_rs_presentation = $query_rs_presentation->fetch());
                ?>
            </div>
        </main>
</div>

</body>
</html>