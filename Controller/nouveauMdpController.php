<?php session_start();
include '../View/base/header.php';
include '../View/base/footer.php';
include '../Model/database.php';
include '../View/base/nouveauMdp.php';



if (isset($_POST['confirmation'])) {
    extract($_POST);
    global $db;
    $_SESSION['mailoublie'] = $mail;
    $password = $_POST['password'];
    $options = ['cost' => 12,];
    $passhash = password_hash("$password", PASSWORD_BCRYPT, $options);


        if ($password == $cpassword) {

            if ($_SESSION['utilisateur'] == 'client') {
                $sql = "UPDATE clients SET password ='$passhash'WHERE mail = '$mail'";
                $reponse = $db->exec($sql);
            } else if ($_SESSION['utilisateur'] == 'administrateur') {
                $sql = "UPDATE administrateurs SET password ='$passhash'WHERE mail = '$mail'";
                $reponse = $db->exec($sql);

            } else if ($_SESSION['utilisateur'] == 'gestionnaire') {
                $sql = "UPDATE gestionnaires SET password ='$passhash'WHERE mail = '$mail'";
                $reponse = $db->exec($sql);
            }
            header('Location:accueilController.php');
        }
        if  ($password != $cpassword) {
            echo '<script language="Javascript">
            alert("Les mots de passes sont différents !\nVeuillez recommencer l\'opération en saisissant des mots de passes identique.");
        </script>';

    }


}


?>