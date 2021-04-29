<!DOCTYPE html>
<html>
<head>
    <title>Profil</title>

    <meta charset="utf-8" />
    <link rel="stylesheet" href="../assets/modifierMDP.css" />
    <link rel="stylesheet" href="../assets/footer.css" />

</head>
<body>

<?php include "header.php" ?>

<form method="POST" class="contentconnexion">
  <div class="title_container">
    <h3>Modifier Mot De Passe</h3>
  </div class>
    <div class="superform_container">
      <div class="form_container">
        <div class="information">
          <h4>Mots de passe actuel</h4>
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
            <a href="#">Confirmer</a>
          </div>
          <div class="bt1">
            <p><a href="#">Annuler</a></p>
           </div>
    </div>

</form>

<div class="footer bottom">
<div class="footer">
    <p> (c) Copyright tous droits réservés Aeronic Solutions Corporation 2021 </p>
    <div class="confidentialites">
      <a href="confidentialite.php">Engagement de confidentialité</a>
      <a href="cookies.php">Utilisation de cookies</a>
      <a href="conditionsUtilisations.php">Conditions d'utilisations</a>
      <a href="mentionsLegales.php">Mentions légales</a>
    </div>
</div>
</body>
</html>

