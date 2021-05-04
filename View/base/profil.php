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
if ($_SESSION['utilisateurs']=='client'){
    echo '<link rel="stylesheet" href="../assets/profils/profil.css" />';
}
elseif ($_SESSION['utilisateurs']=='administrateur'){
    echo '<link rel="stylesheet" href="../assets/profils/profilAdmin.css" />';
}
else{
    echo '<link rel="stylesheet" href="../assets/profils/profilGestionnaire.css" />';
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
                    <p>George</p>
                </div>
                <div class="information">
                    <h4>E-mail</h4>
                    <p>email@adresse.fr</p>
                </div>
                <?php if ($_SESSION['utilisateurs']=='gestionnaire')
               {
                echo'<div class="information">
                    <h4>Diplôme</h4>
                    <p>C\'est un  medecin</p>
                </div>';
                }?>
               <?php if ($_SESSION['utilisateurs']=='client')
               {
                echo'<div class="information">
                    <h4>Date de naissance</h4>
                    <p>12 brumaire an CCXX</p>
                </div> 
                
                <div class="information">
                    <h4>Médecin</h4>
                    <p>Dr. Themedic</p>
                </div>';
                }?>

            </div>
            <div class="form_container">
                <div class="information">
                    <h4>Nom</h4>
                    <p>Dupont</p>
                </div>
                <div class="information">
                    <h4> I-C</h4>
                    <p> P45D25A </p>
                </div>
                <?php if ($_SESSION['utilisateurs']=='gestionnaire')
                {
                    echo' <div class="information">
                    <h4>Centre médical</h4>
                    <p>Toulouse</p>
                </div>';
                }?>

                <?php if ($_SESSION['utilisateurs']=='client')
                {echo'
                <div class="information">
                    <h4>Compagnie aérienne</h4>
                    <p>Aire isep</p>
                </div>
                <div class="information">
                    <h4>Genre</h4>
                    <p>Masculin</p>
                </div>';
                }?>
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
                if(isset($_POST['logprofil'])){
                    header('Location: modifierProfil.php');
                }
                ?>
            </div>
        </div>
    </form>

    </div>
</body>

</html>