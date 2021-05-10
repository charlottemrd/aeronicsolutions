<?php


global $db;
$_SESSION['mail']='admin@gmail.com';
$mail=$_SESSION['mail'];
if ($_SESSION['utilisateurs']=='client'){

    $q = $db->query("SELECT * FROM clients WHERE mail='$mail'");
    $user = $q->fetch();
}
elseif ($_SESSION['utilisateurs']=='gestionnaire'){
    $q = $db->query("SELECT * FROM gestionnaires WHERE mail='$mail'");
    $user = $q->fetch();
}
elseif ($_SESSION['utilisateurs']=='administrateur'){
    $q = $db->query("SELECT * FROM administrateurs WHERE mail='$mail'");
    $user = $q->fetch();
}

























?>