<?php

include('db.php');

if(isset($_POST['titre'])){

        $insertSQL = $connexion->prepare("INSERT INTO `avenir`(`titre`, `texte`) VALUES (:titre, :texte)");


        $insertSQL -> bindParam(':titre', $_POST['titre']);
        $insertSQL -> bindParam(':texte', $_POST['texte']);


        $insertSQL->execute();

        $insertGoTo = "listeAvenir.php?OK";
        echo "<script> location.href='".$insertGoTo."';</script>";

    }


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
            <form action="" method="POST" class="formul">
            <label for="titre" class="stuff">ecrire titre</label>
            <input type="text" class="stuff" name="titre" id="titre" required>
            <label for="texte" class="stuff">ecrire texte</label>
            <textarea name="texte" class="stuff" id="texte" cols="30" rows="10" required></textarea>
            <input type="submit" class="stuff" value="ajouter">
        </form>
    </main>
</div>
</body>
</html>