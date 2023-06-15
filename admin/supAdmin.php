<?php

    include('db.php');

    $req = $connexion->prepare("DELETE FROM admin WHERE ID='". $_GET["id"] ."'");
    $req->execute();
    $deleteGoTo = "listeAdmin.php?OK";
    echo "<script> location.href='".$deleteGoTo."';</script>";

?>