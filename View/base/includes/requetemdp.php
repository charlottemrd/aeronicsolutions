<?php
include ('../motDePasse.php');
include ('requeteProfil.php');

if (isset($_POST['envoi'])) {
        extract($_POST);
        global $db;
        $_SESSION['mail']=$_POST['mail'];
        $mail=$_SESSION['mail'];
        $password=$_POST['password'];
        $options = ['cost' => 12,];


    if ($_SESSION['utilisateur']=='client'){
        $sql = "UPDATE clients SET password = '$mdp' => password_hash('$mdp', PASSWORD_BCRYPT, $options)
                WHERE mail = '$mail'";
        $reponse = $db->exec($sql);
        }

else if ($_SESSION['utilisateur']=='administrateur'){


    $sql = "UPDATE administrateurs SET password = '$mdp'=> password_hash('$mdp', PASSWORD_BCRYPT, $options)
                WHERE mail = '$mail'";
    $reponse = $db->exec($sql);

}

else if ($_SESSION['utilisateur']=='gestionnaire'){
    $cabinet=$_POST['cabinet'];

    $sql = "UPDATE gestionnaires SET password = '$mdp'=> password_hash('$mdp', PASSWORD_BCRYPT, $options)
                WHERE mail = '$mail'";
    $reponse = $db->exec($sql);


}
    }

?>
