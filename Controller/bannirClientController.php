<?php session_start();

include "../View/base/header.php";
include "../View/base/footer.php";
include '../Model/database.php';
include '../Model/requeteClient.php';

if (isset($_POST['oui'])) {
    // code pour bannir un client voir bdd liste noir
}
else if (isset($_POST['non'])) {
    header("location: gestionClientController.php");
} include '../View/base/bannirClient.php';
?>
