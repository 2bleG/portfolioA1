<?php

    include('db.php');

    $req = $connexion->prepare("DELETE FROM formations WHERE ID='". $_GET["id"] ."'");
    $req->execute();
    $deleteGoTo = "listeFormations.php?OK";
    echo "<script> location.href='".$deleteGoTo."';</script>";

?>