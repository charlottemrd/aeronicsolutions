<!DOCTYPE html>
<html>
<head>
    <title>Profil</title>

    <meta charset="utf-8" />
    <link rel="stylesheet" href="../assets/editProfils/modifierProfil.css" />

</head>
<body>

<?php include 'header.php';
include 'footer.php';
session_start;

include 'includes/database.php';
include 'includes/requeteProfil.php';
if ($_SESSION['utilisateurs']=='client'){  ?>
    <link rel="stylesheet" href="../assets/editProfils/modifierProfil.css"/> <?php
}
elseif ($_SESSION['utilisateurs']=='administrateur'){ ?>
    <link rel="stylesheet" href="../assets/editProfils/modifierProfilAdmin.css" />
    <?php
}
else{ ?>
    <link rel="stylesheet" href="../assets/editProfils/modifierProfilGestionnaire.css"  />
    <?php
}


?>

<form method="POST" class="contentconnexion">
    <div class="title_container">
        <h3>Modification du profil - <?php echo $_SESSION['utilisateurs']?></h3>
    </div class>
    <div class="superform_container">
        <div class="form_container">
            <div class="information">
                <h4>Prenom</h4>
                <input name= "prenom" id="prenom" type="text" value="<?= $user['firstName']?>" autofocus/>
            </div>
            <?php if ($_SESSION['utilisateurs']=='client'){  ?>
                <div class="information">
                    <h4>Date de naissance</h4>
                    <input name="date" type="date" value="<?=$user['birthDate']?>" autofocus/>
                </div>
                <div class="information">
                    <h4>Médecin</h4>
                    <input name= "medecin" id= "medecin"type="text"  disabled="disabled" value=<?= $user['doctor']?> autofocus/>

                </div>
            <?php } ?>
            <div class="information">
                <h4>E-mail</h4>
                <input name= "mail" id= "mail"type="text"  disabled="disabled" value=<?=$user['mail']?> autofocus/>
            </div>
        </div>
        <div class="form_container">
            <div class="information">
                <h4>Nom</h4>
                <input name= "nom" id="nom" type="text" value="<?= $user['name']?>" autofocus/>
            </div>
            <?php if ($_SESSION['utilisateurs']=='gestionnaire') { ?>
                <div class="information">
                    <h4>Cabinet</h4>
                    <input name= "cabinet" id= "cabinet" type="text" value= <?= $user['center']?> autofocus/>
                </div>
            <?php } ?>
            <?php if ($_SESSION['utilisateurs']=='client'){  ?>
                <div class="information">
                    <h4>Genre</h4>
                    <select name="genre" id="genre">
                        <option value="zero"><?= $user['kind']?></option>
                        <option value="un">Féminin</option>
                        <option value="deux">NA</option>

                    </select>
                </div>
                <div class="information">
                    <h4>Compagnie aérienne</h4>
                    <input name= "compagnieAerienne" id= "compagnieAerienne"type="text" value=<?= $user['company']?> autofocus/>
                </div>
            <?php } ?>
            <div class="information">
                <h4> I-C</h4>
                <input name= "icode" id= "icode"type="text"  disabled="disabled" value=<?= $user['icode'] ?> autofocus/>
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

