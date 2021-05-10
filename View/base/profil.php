<!DOCTYPE html>
<html>

<head>
    <title>Profil</title>

    <meta charset="utf-8" />
    <link rel="stylesheet" href="../assets/profil/profil.css" />
    

</head>

<body>
    
<?php 
//include 'includes/session.php';
include 'header.php';
include 'footer.php'; 
include 'includes/database.php';
global $db;

if ($_SESSION['utilisateur'] == 'client') {
    $q = $db->query("SELECT * FROM clients WHERE icode = '$_SESSION[icode]'");
    $user = $q->fetch();
}

if ($_SESSION['utilisateur'] == 'gestonnaire') {
    $r = $db->query("SELECT * FROM gestonnaires WHERE icode = '$_SESSION[icode]'");
    $user = $r->fetch();
}

if ($_SESSION['utilisateur'] == 'administrateur') {
    $s = $db->query("SELECT * FROM administrateurs WHERE icode = '$_SESSION[icode]'");
    $user = $s->fetch();
}

?>
    <form action="connexion.php" method="POST" class="contentconnexion">
        <div class="title_container">
            <h3>Données personnelles</h3>
        </div class>
        <div class="superform_container">
            <div class="form_container">
                <div class="information">
                    <h4>Prenom</h4>
                    <p><?php echo $user['firstName'] ?></p>
                </div>
                <div class="information">
                    <h4>Date de naissance</h4>
                    <p><?php echo $user['birthDate'] ?></p>
                </div>
                <div class="information">
                    <h4>E-mail</h4>
                    <p><?php echo $user['mail'] ?></p>
                </div>
                <div class="information">
                    <h4>Médecin</h4>
                    <p>Dr. Themedic</p>
                </div>
            </div>
            <div class="form_container">
                <div class="information">
                    <h4>Nom</h4>
                    <p><?php echo $user['name'] ?></p>
                </div>
                <div class="information">
                    <h4>Genre</h4>
                    <p><?php echo $user['kind'] ?></p>
                </div>
                <div class="information">
                    <h4>Compagnie aérienne</h4>
                    <p><?php echo $user['company'] ?></p>
                </div>
                <div class="information">
                    <h4> I-C</h4>
                    <p> <?php echo $user['icode'] ?> </p>
                </div>
            </div>
        </div>
        <div class="changement">
            <div class="bt1">
                <a href="modifierMdp.php">Modifier mot de passe</a>
            </div>
            <div class="bt1">
                <p><a href="modifierProfil.php">Modifier le profil</a></p>
            </div>
        </div>
    </form>

    </div>
</body>

</html>