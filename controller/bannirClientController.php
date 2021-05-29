<?php session_start();

include "../view/header.php";
include "../view/footer.php";
include '../model/database.php';
include '../model/requeteClient.php';

if (isset($_POST['oui'])) {
    // code pour bannir un client voir bdd liste noir
}

else if (isset($_POST['non'])) {
    header("Location: gestionClientController.php");exit;
} 

include '../view/bannirClient.php';
?>