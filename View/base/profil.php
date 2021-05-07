<!DOCTYPE html>
<html>

<head>
    <title>Profil</title>

    <meta charset="utf-8" />

    

</head>

<body>
    
<?php include 'header.php';
include 'footer.php';
session_start;

include 'includes/database.php';
include 'includes/requeteProfil.php';

if ($_SESSION['utilisateurs']=='client'){  ?>
    <link rel="stylesheet" href="../assets/profils/profil.css"/>
<?php
}
elseif ($_SESSION['utilisateurs']=='administrateur'){ ?>
    <link rel="stylesheet" href="../assets/profils/profilAdmin.css" />
<?php
}
else{
   ?> <link rel="stylesheet" href="../assets/profils/profilGestionnaire.css" />
<?php
}

?>
    <form action="profil.php" method="POST" class="contentconnexion">
        <div class="title_container">
            <h3>Données personnelles - <?php echo $_SESSION['utilisateurs']?></h3>
        </div class>
        <div class="superform_container">
            <div class="form_container">
                <div class="information">
                    <h4>Prenom</h4>
                    <p> <?=$user['firstName']?></p>
                </div>
                <div class="information">
                    <h4>E-mail</h4>
                    <p><?=$user['mail']?></p>
                </div>
                <?php if ($_SESSION['utilisateurs']=='gestionnaire')
                {
                    ?> <div class="information">
                    <h4>Centre médical</h4>
                    <p> <?= $user['center']?> </p>
                </div>
               <?php }
               if ($_SESSION['utilisateurs']=='client')
               {   ?>
                    <div class="information">
                    <h4>Date de naissance</h4>
                    <p> <?= date("d-m-Y",strtotime($user['birthDate']));?> </p>
                </div> 
                
                <div class="information">
                    <h4>Médecin</h4>
                    <p> <?= $user['doctor']?> </p>
                </div>
              <?php  } ?>

            </div>
            <div class="form_container">
                <div class="information">
                    <h4>Nom</h4>
                    <p><?= $user['name']?></p>
                </div>

                <div class="information">
                    <h4> I-C</h4>
                    <p> <?= $user['icode']?> </p>
                </div>

                <?php if ($_SESSION['utilisateurs']=='client')
                { ?>
                <div class="information">
                    <h4>Compagnie aérienne</h4>
                    <p> <?= $user['company']?> </p>
                </div>
                
                <div class="information">
                    <h4>Genre</h4>
                   <p> <?= $user['kind']?> </p>
                </div>
                <?php
                }
                ?>

            </div>
        </div>
        <div class="changement">
            <div class="bt3">
                <input class="change" name="log" type="submit" value="Modifier Mot de Passe" >
                <?php
                if(isset($_POST['log'])){
                    header('Location: modifierMdp.php');
                }
                ?>
            </div>
            <div class="bt4">
                <input class="change" name="logprofil" type="submit" value="Modifier Profil">
                <?php
                if(isset($_POST['logprofil']))
                {
                    header('Location: modifierProfil.php');
                }
                ?>
            </div>
        </div>
    </form>

    </div>
</body>

</html>