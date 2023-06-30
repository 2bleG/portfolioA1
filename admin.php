<?php

session_start();

$bdd = new PDO('mysql:host=localhost;dbname=bduser;charset=utf8;', 'root', 'root');
if(isset($_POST['salut']) && isset($_POST['mec'])){
    $pseudo = $_POST['salut'];
    $mdp = $_POST['mec'];

    $recupUser = $bdd->prepare('SELECT * FROM admin WHERE loog = ?');
    $recupUser->execute(array($pseudo));

    if($recupUser->rowCount() > 0){
        $userInfo = $recupUser->fetch();
        $hashedPasswordFromDB = $userInfo['pass'];
        $hashedUserPassword = hash('sha256', $mdp);

        if($hashedUserPassword === $hashedPasswordFromDB){
            $_SESSION['loog'] = $pseudo;
            $_SESSION['pass'] = $mdp;
            $_SESSION['id'] = $userInfo['id'];
            header('Location: gestionnaire.php');
            exit();
        } else {
            echo "Mot de passe incorrect";
        }
    } else {
        echo "Identifiant incorrect";
    }
} else {
    echo "Veuillez remplir tous les champs";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="salut" autocomplete="off">
        <br>
        <input type="password" name="mec" autocomplete="off">
        <br>
        <br>
        <input type="submit" name="envoi" value="connexion">
    </form>
</body>
</html>
