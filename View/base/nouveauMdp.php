<!DOCTYPE html>
<html>
<head>
    <title>Mot de passe</title>

    <meta charset="utf-8" />
    <link rel="stylesheet" href="../View/assets/nouveauMdp.css" />

</head>
<body>

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

