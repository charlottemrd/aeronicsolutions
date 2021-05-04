<!DOCTYPE html>
<html>

<head>
    <title>Profil</title>

    <meta charset="utf-8" />
    <link rel="stylesheet" href="../assets/profilGestionnaire.css" />
    

</head>

<body>
    
<?php include 'header.php'; ?>
<?php include 'footer.php'; ?>

    <form action="connexion.php" method="POST" class="contentconnexion">
        <div class="title_container">
            <h3>Données personnelles</h3>
        </div class>
        <div class="superform_container">
            <div class="form_container">
                <div class="information">
                    <h4>Prenom</h4>
                    <p>George</p>
                </div>
                <div class="information">
                    <h4>E-mail</h4>
                    <p>email@adresse.fr</p>
                </div>
                <div class="information">
                    <h4>Diplôme</h4>
                    <p>C'est un  medecin</p>
                </div>

            </div>
            <div class="form_container">
                <div class="information">
                    <h4>Nom</h4>
                    <p>Dupont</p>
                </div>
                <div class="information">
                    <h4>Centre médical</h4>
                    <p>Toulouse Matin bio</p>
                </div>
                <div class="information">
                    <h4> I-C</h4>
                    <p> P45D25A </p>
                </div>
            </div>
        </div>
        <div class="changement">
            <div class="bt3">
                <input class="change" name="log" type="submit" value="Modifier Mot de Passe"></input>
            </div>
            <div class="bt4">
                <input class="change" name="log" type="submit" value="Modifier Profil"></input>
            </div>
        </div>
    </form>

    </div>
</body>

</html>