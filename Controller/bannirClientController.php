<?php

session_start();
include '../View/base/includes/database.php';
if (isset($_POST['oui'])) {
    // code pour bannir un client voir bdd liste noir
}
else if (isset($_POST['non'])) {

    header("location:../View/base/gestionClient.php");
}
?>
