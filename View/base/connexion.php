<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>

    <meta charset="utf-8" />
    <link rel="stylesheet" href="../assets/header.css" />
    <link rel="stylesheet" href="../assets/connexion.css" />
    <link rel="stylesheet" href="../assets/footer.css" />

</head>

<body>

<?php include 'header.php'; ?>
<?php include 'footer.php'; ?>

<form method="post" class="contentconnexion">
  <div class="title_container">
    <h3>Connectez-vous</h3>
  </div>
    <div class="form_container">
        <input type="text" name="identifiant" id="identifiant" placeholder="Identifiant" required>
        <input type="password" name="lpassword" id="lpassword" placeholder="Mot de passe" required>
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
        
        extract($_POST);
        
        include 'includes/database.php';
        $q = $db->prepare("SELECT * FROM clients WHERE mail =:mail");
        $q->execute(['mail' => $identifiant]);
        $result = $q->fetch();

        if($result == true){
            if(password_verify($lpassword, $result['password'])){
                header('Location: index.php'); 
            }
        }
    }
?>

</body>
</html>