<?php

    include('db.php');

    $req = $connexion->prepare("DELETE FROM competences WHERE ID='". $_GET["id"] ."'");
    $req->execute();
    $deleteGoTo = "listeCompetences.php?OK";
    echo "<script> location.href='".$deleteGoTo."';</script>";

?>