
<!DOCTYPE html>
<html>
<head>
    <title>Gestion client</title>

    <meta charset="utf-8" />
    <link rel="stylesheet" href="../assets/gestionClient.css" />

</head>
<body>

<?php include "header.php"; ?>
<?php include "footer.php"; ?>

<body>
<div class="contentGestion">
    <div class="title_container">
        <h3>Gestion - clients</h3>
    </div>
    <div class="gestion_container">
    <table class="tableau_container">
        <thead>

    <tr>

        <th>I-code</th>
        <th>E-mail</th>
        <th>Prenom</th>
        <th>Nom</th>
        <th>Date de naissance</th>
        <th>Genre</th>
        <th>Compagnie aérienne</th>
        <th>Médecin</th>
    </tr>
        </thead>
        <tbody>
    <?php
    include "includes/database.php";

    // Creation et envoi de la requete
    $q = $db->query("SELECT * FROM clients order by icode asc");
    // Recuperation des resultats
    while($row = $q ->fetch()){
        $icode=$row[10];
        $mail=$row[6];
        $firstName = $row[1];
        $name = $row[2];
        $birthDate = date("d-m-Y",strtotime($row[3]));
        $kind = $row[4];
        $company = $row[5];
        $doctor = $row[8];
       ?><tr>
        <td><?=$icode?></td>
        <td><?=$mail?></td>
        <td><?=$firstName?></td>
        <td><?=$name?></td>
        <td><?=$birthDate?></td>
        <td><?=$kind?></td>
        <td><?=$company?></td>
        <td><?=$doctor?></td>
</tr> <?php
    }
    ?>
    </tr>
        </tbody>
</table>
    <form method="post" class="form_message" action="../../Controller/gestionClientControl.php">
    </div>
    <div class="ajout_client">
        <a href="ajoutClient.php">Ajouter un nouveau client</a>
    </div>
    <div class="gestionnaireM">
        <select name="gestionClient" id="gestionClient" required>
            <option value="" >Que souhaitez-vous faire ?</option>
            <option value="mofifier">Je souhaite modifier des informations</option>
            <option value="supprimer">Je souhaite supprimer un client</option>
            <option value="modifier">Je souhaite bannir un client</option>
        </select>
        <input name="code" type="code" id="code" placeholder="I-C"  required>
        <button type="submit" id="buttonAdd" name="buttonAdd">Soumettre</button></div>
    </form>
</div>




</body>

</html>