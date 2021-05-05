<!DOCTYPE html>
<html>
<head>
    <title>Profil</title>

    <meta charset="utf-8" />
    <link rel="stylesheet" href="../assets/modifierProfil.css" />

</head>
<body>

<?php include "header.php"; ?>
<?php include "footer.php"; ?>

<form method="POST" class="contentconnexion">
  <div class="title_container">
    <h3>Modification Des Données personnelles</h3>
  </div class>
    <div class="superform_container">
      <div class="form_container">
        <div class="information">
          <h4>Prenom</h4>
          <input name= "prenom" type="text" placeholder="George" autofocus/>
        </div>
        <div class="information">
            <h4>Date de naissance</h4>
              <input name="date" type="date" value="20/12/2000" autofocus/>
          </div>
          <div class="information">
              <h4>Médecin</h4>
              <p>Dr. Themedic</p>
          </div>
            <div class="information">
              <h4>E-mail</h4>
              <p>email@adresse.fr</p>
            </div>
      </div>
      <div class="form_container">
        <div class="information">
            <h4>Nom</h4>
          <input name= "nom" type="text" placeholder="Dupont" autofocus/>
        </div>
        <div class="information">
            <h4>Genre</h4>
            <select name="chiffredeux" id="chiffredeux">
                        <option value="zero">Masculin</option>
                        <option value="un">Féminin</option>
                        <option value="deux">NA</option>

                    </select>
                  </div>
        <div class="information">
          <h4>Compagnie aérienne</h4>
          <input name= "compagnieAerienne" type="text" placeholder="Air isep" autofocus/>
        </div>

        <div class="information">
          <h4> I-C</h4>
          <p> P45D25A </p>
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
