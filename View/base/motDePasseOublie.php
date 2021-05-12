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
<?php include 'includes/requeteProfil.php';?>



<form method="post" class="contentconnexion">
        <div class="title_container">
            <h3>Oubli mot de passe</h3>
        </div>
        <div class="form_container">
            <br class="instruction_container1">
            <input type="text" name="mail" id="mail" placeholder="Adresse mail" required>
            <p>Veuillez consulter vos mails une fois avoir renseigné votre adresse mail à laquelle vous souhaité recevoir votre nouveau mot de passe. Un nouveau mot de passe va vous être envoyé d'ici peu.</br>
            Si vous souhaitez modifier ce nouveau mot de passe, vous pourrez le faire une fois connecté au site sur la page de modification du mot de passe.</p>

        </div>
         <div class="logC">
              <input class="log" name="envoi" type="submit" value="Envoyer">
         </div>
</form>
</body>
</html>


