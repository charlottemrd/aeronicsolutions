<!DOCTYPE html>
<html>

<head>
    <title>Connexion</title>

    <meta charset="utf-8" />

    <link rel="stylesheet" href="../assets/inscriptionType.css" />

</head>

<body>

<?php 
//session_start();
include 'header.php';
include 'footer.php';
//include 'includes/session.php'; ?>

<form method="post" class="contentInscription">
    <div class="title_container">
        <h3>Inscrivez-vous</h3>
    </div>
    <div class="form_container">
        <div class="instruction_container1">
            <h3>Code d'identification</h3>
        </div>
        <div class="IC_container">

            <div class="input_container">
                <input name="code" type="code" id="code" placeholder="I-C" required>
            </div>
    </div>
    </div>
    <div class="logC">
        <input class="log" name="log" type="submit">
    </div>
    
<?php
    if (isset($_POST['log'])) {
        extract($_POST);

        include 'includes/database.php';
        global $db;
        $code=$_POST['code'];

        $q = $db->query("SELECT * FROM icodes where icode='$code'");
        $data = $q->fetch();
        
        $_SESSION['utilisateur']= $data['status'];
        $_SESSION['icode'] = $data['icode'];
        header('Location: inscriptionUtilisateur.php');exit;
    }
    ?>
</form>
</body>
</html>