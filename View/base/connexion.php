<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>

    <meta charset="utf-8" />
    
    <link rel="stylesheet" href="../assets/connexion.css" />

</head>

<body>

<?php include 'header.php'; ?>

<form method="post" class="contentconnexion">
  <div class="title_container">
    <h3>Connectez-vous</h3>
  </div>
    <div class="form_container">
        <input type="text" name="identifiant" id="identifiant" placeholder="Identifiant" required>
        <input type="password" name="lpassword" id="lpassword" placeholder="Mot de passe" required>
        <div class="mdp_oublié">
            <a href="modifierMdp.php">Mot de passe oublié</a>
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

<?php include 'footer.php'; ?>

</body>
</html>

<script>
    function alert2(texte){
        windows.alert(texte);
        return false;
    }
</script>