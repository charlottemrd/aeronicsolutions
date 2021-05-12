<?php

if (isset($_POST['gestionClient'])) {
    extract($_POST);
    $_SESSION['modifclient'] = $_POST['code'];
    if ($_POST['gestionClient'] = 'modifier') {
        header("location:../View/base/modifierClient.php");
    } else if ($_POST['gestionClient'] = 'bannir') {
        header("location:../View/base/bannirClient.php");
    } else if ($_POST['gestionClient'] = 'supprimer') {
        header("location:../View/base/supprimerClient.php");
    }
}
?>