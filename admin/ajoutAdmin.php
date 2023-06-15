<?php

include('db.php');

if(isset($_POST['user'])){

        $insertSQL = $connexion->prepare("INSERT INTO `admin`(`user`, `password`) VALUES (:user, :passwd)");


        $insertSQL -> bindParam(':user', $_POST['user']);
        $insertSQL -> bindParam(':passwd', md5($_POST['passwd']));


        $insertSQL->execute();

        $insertGoTo = "listeAdmin.php?OK";
        echo "<script> location.href='".$insertGoTo."';</script>";

    }


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
    <form action="" method="POST">
        <label for="user">ecrire user</label>
        <input type="text" name="user" id="user" required>
        <label for="texte">ecrire mdp</label>
        <input type="text" name="password" id="password" required>
        <input type="submit" value="ajouter">
    </form>
</body>
</html>