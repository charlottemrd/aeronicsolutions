<?php

if (isset($_POST['modifier'])) {
        extract($_POST);
        global $db;
        $_SESSION['mail']='admin@gmail.com';
        $mail=$_SESSION['mail'];
        $prenom=$_POST['prenom'];
        $nom=$_POST['nom'];


        if ($_SESSION['utilisateurs']=='client'){
        $date=$_POST['date'];
        $compagnie=$_POST['compagnie'];

        $sql = "UPDATE clients SET firstName = '$prenom', name='$nom', birthDate='$date',company='$compagnie' 
                WHERE mail = '$mail'";
        $reponse = $db->exec($sql);
        header("location:profil.php");}




else if ($_SESSION['utilisateurs']=='administrateur'){


    $sql = "UPDATE administrateurs SET firstName = '$prenom', name='$nom' 
                WHERE mail = '$mail'";
    $reponse = $db->exec($sql);
    header("location:profil.php");

}

else if ($_SESSION['utilisateurs']=='gestionnaire'){
    $cabinet=$_POST['cabinet'];

    $sql = "UPDATE gestionnaires SET firstName = '$prenom', name='$nom', center='$cabinet' 
                WHERE mail = '$mail'";
    $reponse = $db->exec($sql);
    header("location:profil.php");

}
    }
else if (isset($_POST['annuler'])) {

        header('Location: Profil.php');
}
?>