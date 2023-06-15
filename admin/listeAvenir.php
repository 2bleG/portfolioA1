<?php

include('db.php');

$query_rs_avenir = $connexion->prepare("SELECT * FROM avenir ORDER BY ID ASC");
$query_rs_avenir->execute();
$row_rs_avenir = $query_rs_avenir->fetch();

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
                    <a href="ajoutAvenir.php" class="stuff">ajouter un bloc</a>
                <?php 
                do {
                    echo "<p>". $row_rs_avenir ['ID'] . ' - '. $row_rs_avenir ['titre']. "<a class=stuff href='modifAvenir.php?id=". $row_rs_avenir ['ID']."'>Modifier</a> | <a class=stuff href='supAvenir.php?id=". $row_rs_avenir ['ID']."'>Supprimer</a></p>";
                    } while ($row_rs_avenir = $query_rs_avenir->fetch());
                ?>
            </div>
        </main>
</div>

</body>
</html>