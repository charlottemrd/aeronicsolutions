<?php session_start();
include '../View/base/header.php';
include '../View/base/footer.php';

    if (isset($_POST['log'])) {
        extract($_POST);

        include '../Model/database.php';
        global $db;
        $code=$_POST['code'];

        $q = $db->query("SELECT * FROM icodes where icode='$code'");
        $data = $q->fetch();
        
        $_SESSION['utilisateur']= $data['status'];
        $_SESSION['icode'] = $data['icode'];
        header('Location: inscriptionController.php');exit;
    }
    include '../View/base/inscriptionAccueil.php';
?>