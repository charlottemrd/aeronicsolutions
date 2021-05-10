<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>

    <meta charset="utf-8" />
    
    <link rel="stylesheet" href="../assets/connexion.css" />

</head>

<body>

<?php include 'header.php';
//include 'includes/session.php';
?>

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
        
        $result = 0;

        include 'includes/database.php';
        $q = $db->prepare("SELECT * FROM clients WHERE mail =:mail");
        $q->execute(['mail' => $identifiant]);
        $data = $q->fetch();
        $result += $q->rowCount();

        $r = $db->prepare("SELECT * FROM gestionnaires WHERE mail =:mail");
        $r->execute(['mail' => $identifiant]);
        $data = $r->fetch();
        $result += $r->rowCount();

        $s = $db->prepare("SELECT * FROM administrateurs WHERE mail =:mail");
        $s->execute(['mail' => $identifiant]);
        $data = $s->fetch();
        $result += $s->rowCount();

        if($result != 0) {
             $_SESSION['mail'] = $identifiant;
             $_SESSION['utilisateur'] = $data['status'];
            echo $_SESSION['mail'];
            echo 'test';
            /*if(password_verify($lpassword, $result['password'])){
                header('Location: index.php'); 
            }*/
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