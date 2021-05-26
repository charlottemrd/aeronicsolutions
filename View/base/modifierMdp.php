<!DOCTYPE html>
<html>
<head>
    <title>Profil</title>

    <meta charset="utf-8" />
    <link rel="stylesheet" href="../View/assets/modifierMdp.css" />

</head>
<body>

<form method="POST" class="contentconnexion">
  <div class="title_container">
    <h3>Modifier Mot De Passe</h3>
  </div class>
    <div class="superform_container">
      <div class="form_container">
        <div class="information">
          <h4>Nouveau mot de passe</h4>
          <input name= "password" type="password" />
        </div>
        <div class="information">
          <h4>Confirmer nouveau mot de passe</h4>
          <input name= "cpassword" type="password" />
        </div>
      </div>
    </div>
    <div class="changement">
        <div class="bt3">
            <input class="modifier" name="modifier" type="submit" value="Confirmer" onclick="return mdpDifferent();" >

        </div>
        <div class="bt4">
            <input class="annuler" name="annuler" type="submit" value="Annuler">
        </div>
    </div>


</form>
</body>
</html>