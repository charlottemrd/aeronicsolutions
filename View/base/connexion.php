<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>

    <meta charset="utf-8" />
    
    <link rel="stylesheet" href="../View/assets/connexion.css" />

</head>
<body>

<form method="post" class="contentconnexion">
  <div class="title_container">
    <h3>Connectez-vous</h3>
  </div>
    <div class="form_container">
        <input type="text" name="identifiant" id="identifiant" placeholder="Identifiant" required>
        <input type="password" name="lpassword" id="lpassword" placeholder="Mot de passe" required>
        <div class="mdp_oublié">
            <a href="modifierMdpController.php">Mot de passe oublié</a>
        </div>
    </div>
    <div class="logC">
        <input class="log" name="log" type="submit" value="Connexion"></input>
    </div>
</form>

</body>
</html>