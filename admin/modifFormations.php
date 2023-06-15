<?php

include('db.php');

$query_rs_formations = $connexion->prepare("SELECT * FROM formations WHERE ID =".$_GET['id']." ORDER BY ID ASC");
$query_rs_formations->execute();
$row_rs_formations = $query_rs_formations->fetch();

if(isset($_POST['titre'])){

    $updateSQL = $connexion->prepare("UPDATE formations SET Titre='".$_POST['titre']."', Texte='".htmlspecialchars($_POST['texte'])."' WHERE ID = '". $_GET["id"] ."'");

        $updateSQL->execute();

        $insertGoTo = "listeFormations.php?OK";
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
        <input type="text" class="stuff" name="titre" id="titre" value="<?php echo $row_rs_formations['titre']; ?>" required>
        <label for="texte" class="stuff">ecrire texte</label>
        <textarea name="texte" class="stuff" id="texte" cols="30" rows="10" required><?php echo $row_rs_formations['texte']; ?></textarea>
        <input type="submit" class="stuff" value="ajouter">
        </form>
    </main>
</div>
</body>
</html>