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
    $subject = "Nouveau mot de passe Aeronic Solutions";
    $message1 = "Vous trouverez dans ce mail, un lien de redirection qui vous permetra de redéfinir votre nouveau mot de passe afin que vous puissiez vous connecter sur le site. 
    Veuillez cliquer sur le lien pour le nouveau mot de passe :";
    $message2="<a href='modifierMdp.php'>MDP</a>";
    $message=$message1.$message2;
    $headers = "De :" . $from;
    $headers = "MIME-Version: 1.0"."\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
    $envoi=mail($to,$subject,$message, $headers);


}
?>
