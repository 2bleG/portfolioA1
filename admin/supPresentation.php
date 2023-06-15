<?php

    include('db.php');

    $req = $connexion->prepare("DELETE FROM presentation WHERE ID='". $_GET["id"] ."'");
    $req->execute();
    $deleteGoTo = "listePresentation.php?OK";
    echo "<script> location.href='".$deleteGoTo."';</script>";

?>