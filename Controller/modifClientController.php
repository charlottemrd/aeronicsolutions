<?php

session_start();
include '../View/base/includes/database.php';
if (isset($_POST['modifier'])) {

    extract($_POST);
    global $db;
    $code=$_SESSION['modifclient'];
    $prenom=$_POST['prenom'];
    $nom=$_POST['nom'];
    $date=$_POST['date'];
    $kind=$_POST['genre'];
    $compagnie=$_POST['compagnie'];
    $mail=$_POST['mail'];


$sql = "UPDATE clients SET firstName = '$prenom'
                WHERE icode = '$code'";
$reponse = $db->exec($sql);
header("location:../View/base/modifierClient.php");
}
else if (isset($_POST['modifier'])) {
    header("location:../View/base/gestion.php");
}
?>
