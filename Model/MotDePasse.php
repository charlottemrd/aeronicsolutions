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

if (isset($_POST['envoi'])) {
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "solutionsaeronic@gmail.com";
    $to = $_POST['mail'];
    $subject = "Demande Aeronic Solutions";
    $message = 'vhxdjsbch';
    $headers = "De :" . $from;
    mail($to,$subject,$message, $headers);
}

    if (mail($to, $subject, $message, $headers)) // Envoi du message
    {
        echo 'Votre message a bien été envoyé ';
    }
    else // Non envoyé
    {
        echo "Votre message n'a pas pu être envoyé";


}
?>
