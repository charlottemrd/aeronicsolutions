<?php

session_start();
include '../View/base/includes/database.php';
if (isset($_POST['oui'])) {

    $code=$_SESSION['modifclient'];
    $sql = "DELETE from clients 
                WHERE icode = '$code'";
    $reponse = $db->exec($sql);

    header("location:../View/base/gestionClient.php");
}
else if (isset($_POST['non'])) {

    header("location:../View/base/gestionClient.php");
}
?>
