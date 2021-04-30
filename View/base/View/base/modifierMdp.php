<!DOCTYPE html>
<html>
<head>
    <title>Profil</title>

    <meta charset="utf-8" />
    <link rel="stylesheet" href="../assets/modifierMdp.css" />

</head>
<body>

<?php include "header.php" ?>
<?php include "footer.php" ?>

<form method="POST" class="contentconnexion">
  <div class="title_container">
    <h3>Modifier Mot De Passe</h3>
  </div class>
    <div class="superform_container">
      <div class="form_container">
        <div class="information">
          <h4>Mot de passe actuel</h4>
          <input name= "mdp" type="password" />
        </div>
        <div class="information">
          <h4>Nouveau mot de passe</h4>
          <input name= "mdp" type="password" />
        </div>
        <div class="information">
          <h4>Confirmer nouveau mot de passe</h4>
          <input name= "mdp" type="password" />
        </div>
      </div>
    </div>
    <div class= "changement">
          <div class="bt1">
            <a href="profil.php">Confirmer</a>
          </div>
          <div class="bt2">
            <a href="profil.php">Annuler</a>
           </div>
    </div>

</form>
</body>
</html>