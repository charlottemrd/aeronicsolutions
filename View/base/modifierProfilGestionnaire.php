<!DOCTYPE html>
<html>
<head>
    <title>Profil</title>

    <meta charset="utf-8" />
    <link rel="stylesheet" href="../assets/modifierProfilGestionnaire.css" />

</head>
<body>

<?php include "header.php"; ?>
<?php include "footer.php"; ?>

<form method="POST" class="contentconnexion">
  <div class="title_container">
    <h3>Modification Des Données personnelles: Gestionnaire</h3>
  </div class>
    <div class="superform_container">
        <div class="form_container">
            <div class="information">
              <h4>Prenom</h4>
              <input name= "prenom" type="text" placeholder="George" autofocus/>
            </div>
            <div class="information">
              <h4>E-mail</h4>
              <p>email@adresse.fr</p>
            </div>
            <div class="information">
              <h4> I-C</h4>
              <p> P45D25A </p>
            </div>
        </div>
        <div class="form_container">
            <div class="information">
                <h4>Nom</h4>
                <input name= "nom" type="text" placeholder="Dupont" autofocus/>
            </div>
            <div class="information">
              <h4>Cabinet</h4>
              <input name= "Cabinet" type="text" placeholder="Toulouse matin Bio" autofocus/>
            </div>
        </div>
    </div>
    <div class="changement">
            <div class="bt3">
                <input class="change" name="log" type="submit" value="Confirmer"></input>
            </div>
            <div class="bt4">
                <input class="change" name="log" type="submit" value="Annuler"></input>
            </div>
      </div>
</div>
</form>
</body>
</html>
