

<!DOCTYPE html>
<html>
<head>
    <title>Supprimer client</title>

    <meta charset="utf-8" />
    <link rel="stylesheet" href="../assets/supprimerClient.css" />

</head>
<body>

<?php
include "header.php";
include "footer.php"; 

include 'includes/database.php';
include '../../Model/requeteClient.php';?>

<div class="contentGestion">

    <div class="title_container">
        <h3>Supprimer le client</h3>
    </div>
    <div class="gestion_container">
        <p>Confirmez-vous la suppresion du client <?=$client['firstName'],' ',$client['name'],' ?'?> </p>
        <form method="post" class="form_message" action="../../Controller/supprimerClientController.php">

    </div>


<div class="gestionnaireM">
    <button type="submit" id="oui" name="oui">Confirmer</button>

    <button type="submit" id="non" name="non">Annuler</button></div>
</form>
</div>

</body>
</html>


