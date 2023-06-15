<?php

    include('db.php');

    $req = $connexion->prepare("DELETE FROM passions WHERE ID='". $_GET["id"] ."'");
    $req->execute();
    $deleteGoTo = "listePassions.php?OK";
    echo "<script> location.href='".$deleteGoTo."';</script>";

?>