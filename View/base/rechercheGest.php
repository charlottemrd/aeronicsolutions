<!DOCTYPE html>
<html>
<head>
    <title>RechercheGest</title>

    <meta charset="utf-8" />
    <link rel="stylesheet" href="../View/assets/rechercheGest.css" />

</head>
<body>



<div class ="container">

    <form class="search_bar_container" method="post" >
        <div id="barreRecherche" name="barreRecherche" class="barre"  >
            <input class="searchbar" type="text" id="search" name="search" aria-label="Search through site content">
        </div>
        <div class="barre_boutton">
            <input type="submit" value="rechercher" name="bouttonRechercher" id="bouttonRechercher">
        </div>
    </form>


    <table class="tableau_container">
      <thead>


    <tr>

        <th>I-Code</th>
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
    if(isset($_SESSION['recherche'])){ ?>

      <?php  $nomRecherche = $_SESSION['recherche'];
    $q = $db->query("SELECT * FROM clients where name like '%$nomRecherche%' order by icode asc ");
    // Creation et envoi de la requete
    }
    else{
    $q = $db->query("SELECT * FROM clients order by icode asc");
    }
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
</div>
</form>
</body>
</html>