<?php

    include('db.php');

    $req = $connexion->prepare("DELETE FROM avenir WHERE ID='". $_GET["id"] ."'");
    $req->execute();
    $deleteGoTo = "listeAvenir.php?OK";
    echo "<script> location.href='".$deleteGoTo."';</script>";

?>