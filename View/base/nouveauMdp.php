<!DOCTYPE html>
<html>
<head>
    <title>Profil</title>

    <meta charset="utf-8" />
    <link rel="stylesheet" href="../assets/nouveauMdp.css" />

</head>
<body>

<?php include "header.php";
include "footer.php";
include 'includes/database.php';

?>

<form method="POST" class="contentconnexion">
    <div class="title_container">
        <h3> Mot De Passe</h3>
    </div class>
    <div class="superform_container">
        <div class="form_container">
            <div class="information">
                <h4>Nouveau mot de passe</h4>
                <input name= "password" id="password" type="password" />
            </div>
            <div class="information">
                <h4>Confirmer nouveau mot de passe</h4>
                <input name= "cpassword" id="cpassword" type="password" />
            </div>
        </div>
    </div>
    <div class= "changement">
            <input class="bt2" name="confirmation" type="submit" value="Confirmer"></input>
    </div>

</form>
</body>
</html>

<?php
if (isset($_POST['confirmation'])) {

    extract($_POST);
    if ($password == $cpassword) {
        echo $password;
        echo $passhash=password_hash("$password", PASSWORD_BCRYPT, $options);
        header('Location:connexion.php');
    }
}
?>