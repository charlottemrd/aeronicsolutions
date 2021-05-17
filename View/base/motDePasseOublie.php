<!DOCTYPE html>
<html>

<head>
    <title>Mot de passe oublié</title>

    <meta charset="utf-8" />

    <link rel="stylesheet" href="../assets/mdpoubli.css" />

</head>

<body>

<?php include 'header.php'; ?>
<?php include 'footer.php'; ?>
<?php include 'motDePasse.php'; ?>
<?php include 'includes/database.php';?>



<form method="post" class="contentconnexion">
        <div class="title_container">
            <h3>Oubli mot de passe</h3>
        </div>
        <div class="form_container">
            <br class="instruction_container1">
            <input type="text" name="mail" id="mail" placeholder="Adresse mail" required>
            <p>Veuillez consulter vos mails une fois avoir renseigné votre adresse mail. Cette adresse mail est votre identifiant du site, elle vous permet de vous connecter. Un lien de redirection va vous être envoyé afin que vous puissez redéfinir votre nouveau mot de passe.</br>
            </p>

        </div>
         <div class="logC">
              <input class="log" name="envoi" type="submit" value="Envoyer">
         </div>
</form>
</body>
</html>

<?php
if (isset($_POST['envoi'])) {
    extract($_POST);
    global $db;
    $_SESSION['mail'] = $_POST['mail'];
    $result = 0;

    $c = $db->prepare("SELECT mail FROM administrateurs WHERE mail = :mail");
    $c->execute(['mail' => $mail]);
    $result = $c->rowCount();

    $d = $db->prepare("SELECT mail FROM clients WHERE mail = :mail");
    $d->execute(['mail' => $mail]);
    $result += $d->rowCount();

    $e = $db->prepare("SELECT mail FROM gestionnaires WHERE mail = :mail");
    $e->execute(['mail' => $mail]);
    $result += $e->rowCount();

}
?>


