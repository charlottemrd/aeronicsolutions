<!DOCTYPE html>
<html>

<head>
    <title>Inscription client</title>

    <meta charset="utf-8" />

    <link rel="stylesheet" href="../assets/inscriptionStyle.css" />

</head>

<body>

<?php include 'header.php'; ?>
<?php include 'footer.php'; ?>

<form method="post" class="contentInscription">
    <div class="title_container">
        <h3>Inscription : client</h3>
    </div>
    <div class="form_container">
        <p>Veuillez choisir votre statut</p>
        <div>
            <input type="radio" id="client"
                   name="utilisateur" value="client">
            <label for="client">client</label>

            <input type="radio" id="gestionnaire"
                   name="utilisateur" value="gestionnaire">
            <label for="gestionnaire">gestionnaire</label>

            <input type="radio" id="admin"
                   name="utilisateur" value="admin">
            <label for="admin">admin/label>
        </div>

        <input name="code IC" type="text" id="code IC" placeholder="code IC" required  >

    <div class="logC">
        <input class="log" name="log" type="submit">
    </div>
</form>
<?php

if (isset($_POST['log'])) {

    extract($_POST);
    session_start();
    $_SESSION['utilisateur']=$_POST['utilisateur'];
    header('Location: inscriptionClient.php');

}
?>

</body>
</html>
