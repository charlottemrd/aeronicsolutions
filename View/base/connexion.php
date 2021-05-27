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
        <input type="text" name="identifiant" id="identifiant" value="<?=$_POST['identifiant']?>"required pattern="[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+.[a-zA-Z.]{2,15}" placeholder="Identifiant" title="Veuillez rentrer un mail correct">
        <input type="password" name="lpassword" id="lpassword" placeholder="Mot de passe" required>
        <div class="mdp_oublié">
            <a href="motDePasseOublieController.php">Mot de passe oublié</a>
        </div>
        <div class="erreurM">
            <p><?=$_GET['connexionError']?></p>
        </div>
    </div>
    <div class="logC">
        <input class="log" name="log" type="submit" value="Connexion"></input>
    </div>
</form>

</body>
</html>