<?php
include('db.php');
session_start();
if(issetif (isset($_POST['login']) && isset($_POST['passwd'])) {
    $query_rs_admin = $connexion->prepare("SELECT * FROM admin WHERE user ='".$_POST['login']."' ORDER BY ID ASC");
    $query_rs_admin->execute();
    $row_rs_admin = $query_rs_admin->fetch();
    if ($row_rs_admin != NULL){
        echo 'ok';
    }
} ) 
?>

<html>
<head>
<title>Formulaire d'identification</title>
</head>
<body>
    <form action="login.php" method="post">
        <label for=""> Votre login : </label>
        <input type="text" name="login">
        <label for="">Votre mot de passe : </label>
        <input type="password" name="pwd"><br />
        <input type="submit" value="Connexion">
    </form>

</body>
</html>