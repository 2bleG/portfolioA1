<?php

include('db.php');

$query_rs_admin = $connexion->prepare("SELECT * FROM admin WHERE ID =".$_GET['id']." ORDER BY ID ASC");
$query_rs_admin->execute();
$row_rs_admin = $query_rs_admin->fetch();

if(isset($_POST['titre'])){

    $updateSQL = $connexion->prepare("UPDATE experiences SET Titre='".$_POST['user']."', Texte='".htmlspecialchars($_POST['password'])."' WHERE ID = '". $_GET["id"] ."'");

        $updateSQL->execute();

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
        <label for="user">user</label>
        <input type="text" name="user" id="user" value="<?php echo $row_rs_admin['user']; ?>" required>
        <label for="password">mdp</label>
        <textarea name="password" id="passwd" cols="30" rows="10" required><?php echo $row_rs_admin['password']; ?></textarea>
        <input type="submit" value="ajouter">
    </form>
</body>
</html>