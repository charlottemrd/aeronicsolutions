<!DOCTYPE html>
<html>
<head>
    <title>RechercheGest</title>

    <meta charset="utf-8" />
    <link rel="stylesheet" href="../assets/rechercheGest.css" />

</head>
<body>



<div class ="container">
    <div class="search_bar_container">
        <input class="searchbar" type="search" id="site-search" name="q" aria-label="Search through site content">
    </div>
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
        <td><a href="../base/profil.php?code=$icode"><?=$icode?></a></td>
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

</div>
<?php include "footer2.php"; ?>
</body>
</html>
