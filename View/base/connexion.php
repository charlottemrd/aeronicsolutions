<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>

    <meta charset="utf-8" />
    <link rel="stylesheet" href="../assets/connexion.css" />
    <link rel="stylesheet" href="../assets/footer.css" />

</head>

<body>

<?php include 'header.php'; ?>

<form action="connexion.php" method="post" class="contentconnexion">
  <div class="title_container">
    <h3>Connectez-vous</h3>
  </div>
    <div class="form_container">
        <input type="text" name="identifiant" id="identifiant" placeholder="Identifiant" required>
        <input type="password" name="password" id="password" placeholder="Mot de passe" required>
        <div class="mdp_oublié">
            <a href="#">Mot de passe oublié</a>
        </div>
    </div>
    <div class="logC">
        <input class="log" name="log" type="submit" value="Connexion"></input>
    </div>
</form>


<?php 
    if(isset($_POST['log'])){
        
        $identifiant = $_POST['identifiant'];
        $password = $_POST['password'];

        if(!empty($identifiant) && !empty($password)){
            echo "Votre identifiant : ".$identifiant;
            echo "Votre password : ".$password;
        }
    }
?>

<?php include 'footer.php'; ?>

</body>
</html>