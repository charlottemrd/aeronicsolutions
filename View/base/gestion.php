<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>

    <meta charset="utf-8" />
    <link rel="stylesheet" href="../assets/gestion.css" />

</head>
<body>

<?php include "header.php";
include "footer.php";
include  "../../Model/gestionModel.php"?>

<div class="contentconnexion">
    <div class="title_container">
        <h3>Maintenance du site - Aeronic Solutions</h3>
    </div>
    <a class="bt3">
        <a href="gestionClient.php"><input name="modifierClient" type="submit" href="gestionClient.php" value="Gérer les clients" ></a>
        <input name="modifierGestionnaires" type="submit" href="#" value="Gérer les gestionnaires" >
    </div>
        <div class="bt3">

            <input name="modifierFAQ" type="submit" href=#" value="modifier la FAQ" >
            <input name="modifierCapteurs" type="submit" href="#" value="Gérer les capteurs" >
        </div>
</div>
</body>
</html>
