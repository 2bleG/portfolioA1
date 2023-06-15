<?php

    include('db.php');

    $req = $connexion->prepare("DELETE FROM personnalite WHERE ID='". $_GET["id"] ."'");
    $req->execute();
    $deleteGoTo = "listePersonnalite.php?OK";
    echo "<script> location.href='".$deleteGoTo."';</script>";

?>