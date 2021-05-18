<?php session_start();
include '../View/base/header.php';
include '../View/base/footer.php';
include '../Model/database.php';
include '../View/base/modifierMdp.php';
include '../Model/requeteProfil.php';

if (isset($_POST['modifier'])) {
    extract($_POST);
    global $db;
    $mail= $_SESSION['mail'];
        if ($password == $cpassword) {
            $options = ['cost' => 12,];

            if ($_SESSION['utilisateur'] == 'client') {
                $r = $db->prepare("UPDATE clients SET password=:password WHERE mail=:mail");
                $r->execute([
                    'password' => password_hash("$password", PASSWORD_BCRYPT, $options),
                    'mail' => "$mail"
                ]);
                header('Location:accueilController.php');
            } else if ($_SESSION['utilisateur'] == 'administrateur') {


                $r = $db->prepare("UPDATE administrateurs SET password=:password WHERE mail=:mail");
                $r->execute([
                    'password' => password_hash("$password", PASSWORD_BCRYPT, $options),
                    'mail' => "$mail"
                ]);
                header('Location:accueilController.php');
            } else if ($_SESSION['utilisateur'] == 'gestionnaire') {
                echo "bonjour";
                $r = $db->prepare("UPDATE gestionnaires SET password=:password WHERE mail=:mail");
                $r->execute([
                    'password' => password_hash("$password", PASSWORD_BCRYPT, $options),
                    'mail' => $mail
                ]);
                header('Location:accueilController.php');
            }

        }
        if ($password != $cpassword) {
            echo '<script language="Javascript">
            alert("Les mots de passes sont différents !\nVeuillez recommencer l\'opération en saisissant des mots de passes identique.");
        </script>';

        }


}

?>