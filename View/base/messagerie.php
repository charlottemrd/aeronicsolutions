<!DOCTYPE html>
<html>
<head>
    <title>Nous contacter</title>

    <meta charset="utf-8" />
    <link rel="stylesheet" href="../assets/mesagerieStyle.css" />

</head>
<body>

<?php include "header.php"; ?>
<?php include "footer.php";
include 'includes/session.php'; ?>

<div class="contentmessage">
    <div class="title_container">
        <h3>Nous contacter</h3>
    </div>
    <div class="message_container">
       <p> Vous souhaitez avoir plus d'informations sur Aeronic Solutions. Envoyez-nous un courriel à l'adresse : solutionsaeronic@gmail.com ou remplissez les champs ci-dessous </p>

    <form method="post" class="form_message">

            <input name="prenom" type="text" id="prenom_message" placeholder="Prénom" required>
            <input name="nom" type="text" id="nom_message" placeholder="Nom" required>
            <input name="mail" type="mail" id="email" placeholder="Adresse e-mail" required>
             <textarea name="contenu" type="text" id="contenu" placeholder="Votre message" required  >
             </textarea>
    </div>
        <div class="envoyer_messageM">
            <input class="envoyer_message" name="envoi" type="submit"></input>
        </div>
   </form>


</div>
<?php
if (isset($_POST['envoi'])) {

    extract($_POST);
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = $_POST['mail'];
    $to = "solutionsaeronic@gmail.com";
    $subject = "Demande Aeronic Solutions";
    $message = $_POST['contenu'];
    $headers = "De :" . $from;
    mail($to,$subject,$message, $headers);
}
?>
</body>
</html>
