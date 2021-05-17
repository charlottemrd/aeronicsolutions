<?php
include ('requeteProfil.php');
include ('../nouveauMdp.php');
include('../motDePasseOublie.php');

if (isset($_POST['confirmation'])) {
        extract($_POST);
        global $db;
        $mail=$_POST['mail'];
        $password=$_POST['password'];
        $options = ['cost' => 12,];
        $passhash = password_hash("$password", PASSWORD_BCRYPT, $options);


    if ($_SESSION['utilisateur']=='client'){
        $sql = "UPDATE clients SET password ='$passhash'WHERE mail = '$mail'";
        $reponse = $db->exec($sql);
        }

else if ($_SESSION['utilisateur']=='administrateur'){
    $sql = "UPDATE administrateurs SET password ='$passhash'WHERE mail = '$mail'";
    $reponse = $db->exec($sql);

}

else if ($_SESSION['utilisateur']=='gestionnaire'){
    $sql = "UPDATE gestionnaires SET password ='$passhash'WHERE mail = '$mail'";
    $reponse = $db->exec($sql);


}
    }

?>
