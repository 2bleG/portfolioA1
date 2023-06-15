<?php

include('db.php');

$query_rs_personnalite = $connexion->prepare("SELECT * FROM personnalite WHERE ID =".$_GET['id']." ORDER BY ID ASC");
$query_rs_personnalite->execute();
$row_rs_personnalite = $query_rs_personnalite->fetch();

if(isset($_POST['titre'])){

    $updateSQL = $connexion->prepare("UPDATE personnalite SET Titre='".$_POST['titre']."', Texte='".htmlspecialchars($_POST['texte'])."' WHERE ID = '". $_GET["id"] ."'");

        $updateSQL->execute();

        $insertGoTo = "listePersonnalite.php?OK";
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
        <input type="text" name="titre" class="stuff" id="titre" value="<?php echo $row_rs_personnalite['titre']; ?>" required>
        <label for="texte" class="stuff">ecrire texte</label>
        <textarea class="stuff" name="texte" id="texte" cols="30" rows="10" required><?php echo $row_rs_personnalite['texte']; ?></textarea>
        <input type="submit" value="ajouter" class="stuff">
        </form>
    </main>
</div>
</body>
</html>