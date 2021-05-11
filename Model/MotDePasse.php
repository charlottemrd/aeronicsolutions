<?php


function mdpAleatoire($taille)
{
    $cars="azertyiopqsdfghjklmwxcvbn0123456789";
    $mdp='';
    $long=strlen($cars);

    srand((double)microtime()*1000000);

    for($i=0;$i<$taille;$i++)$mdp=$mdp.substr($cars,rand(0,$long-1),1);

    return $mdp;
}

if (isset($_POST['log'])) {

    extract($_POST);
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    $to =$_POST['mail'] ;
    $from = "solutionsaeronic@gmail.com";
    $subject = "Nouveau mot de passe";
    $message = "Votre nouveau mot de passe est : .Ce nouveau mot de passe remplace l'ancien.";
    $headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
    $headers .= 'From: "Nom_de_expediteur"<'.$from.'>'."\n"; // Expediteur
    $headers .= 'Delivered-to: '.$to."\n"; // Destinataire
    echo $_POST['mail'];

    mail($to, $subject, $message, $headers);
    if (mail($to, $subject, $message, $headers)) // Envoi du message
    {
        echo 'Votre message a bien été envoyé ';
    }
    else // Non envoyé
    {
        echo "Votre message n'a pas pu être envoyé";
    }
}
?>
