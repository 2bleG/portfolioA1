<?php

    include('db.php');

    $req = $connexion->prepare("DELETE FROM experiences WHERE ID='". $_GET["id"] ."'");
    $req->execute();
    $deleteGoTo = "listeExperiences.php?OK";
    echo "<script> location.href='".$deleteGoTo."';</script>";

?>