<!DOCTYPE html>
<html>

<head>
    <title>Inscription client</title>

    <meta charset="utf-8" />

    <link rel="stylesheet" href="../assets/inscriptionStyle.css" />

</head>

<body>

<?php include 'header.php';
include 'footer.php'; ?>

    <form method="post" class="contentInscription">
        <div class="title_container">
            <h3>Inscription - <?php echo $_SESSION['utilisateur']; ?> </h3>
        </div>
        <div class="form_container">

            <input name="prenom" type="text" id="prenom" placeholder="Prénom" required pattern=".{3,}" title="Le champ doit contenir au moins 3 lettres">
            <input name="nom" type="text" id="nom" placeholder="Nom" required pattern=".{3,}" title="Le champ doit contenir au moins 3 lettres">

            <?php
            if ($_SESSION['utilisateur'] == 'client') { ?>
                <input name="birthDate" type="date" id="birthDate" placeholder="Date de naissance">
                <div class="genre">
                    <select name="genre" id="genre">
                        <option value="-" selected="selected" disabled="disabled">Genre</option>
                        <option value="Homme">Homme</option>
                        <option value="Femme">Femme</option>
                    </select>
                </div>
                <input name="compagnie" type="text" id="compagnie" placeholder="Compagnie aérienne" required>
            <?php }  
            if ($_SESSION['utilisateur'] == 'gestionnaire') { ?>
                <input name="center" type="text" id="center" placeholder="Centre médical" required pattern=".{3,}" title="Le champ doit contenir au moins 3 lettres">
            <?php }
            ?>

            <input name="mail" type="text" id="mail" placeholder="Adresse-mail" required>
            <input name="password" type="password" id="password" placeholder="Mot de passe" required>
            <!--<input name="password" type="password" id="password" placeholder="Mot de passe" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Le mot de passe doit contenir au moins un chiffre, une majuscule, une minuscule et être composé d'au moins 8 charactères">-->
            <input name="cpassword" type="password" id="cpassword" placeholder="Confirmer mot de passe" required>
            <!-- <input name="cpassword" type="password" id="cpassword" placeholder="Confirmer mot de passe" required pattern="password" title="Les mots de passes ne correspondent pas"> -->

            <div class="CondUtilisations">
                <input class="inp-cbx" id="cbx" type="checkbox" style="display: none" required>

                <label class="cbx" for="cbx"><span>
                        <svg width="12px" height="10px" viewbox="0 0 12 10">
                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                        </svg></span><span>Valider les
                        <a href="ConditionsUtilisation.php" target="_blank">Conditions générales d'utilisations</a>
                    </span></label>
            </div>
        </div>
        <div class="logC">
            <input class="log" name="log" type="submit"></input>
        </div>
    </form>

<?php
    if (isset($_POST['log'])) {

        extract($_POST);

        // condition à mettre dans un fichier à part, à appeler également dans modifierMdp.php
        if ($password == $cpassword) {

            include 'includes/database.php';
            global $db;

            $options = ['cost' => 12,];

            $result = 0;

            $c = $db->prepare("SELECT mail FROM administrateurs WHERE mail = :mail");
            $c->execute(['mail' => $mail]);
            $result = $c->rowCount();

            $d = $db->prepare("SELECT mail FROM clients WHERE mail = :mail");
            $d->execute(['mail' => $mail]);
            $result += $d->rowCount();

            $e = $db->prepare("SELECT mail FROM gestionnaires WHERE mail = :mail");
            $e->execute(['mail' => $mail]);
            $result += $e->rowCount();

            // A SIMPLIFIER
            if ($result == 0) {
                if ($_SESSION['utilisateur'] == 'client') {
                    
                    $q = $db->prepare("INSERT INTO clients(firstName,name,birthDate,kind,company,mail,password,doctor,icode) VALUES (:firstName,:name,:birthDate,:kind,:company,:mail,:password,:doctor,:icode)");
                
                    $q->execute([
                        'firstName' => $prenom,
                        'name' => $nom,
                        'birthDate' => $birthDate,
                        'kind' => $genre,
                        'company' => $compagnie,
                        'mail' => $mail,
                        'password' => password_hash("$password", PASSWORD_BCRYPT, $options),
                        'doctor' => 'Smith',
                        'icode' => $_SESSION['icode']
                    ]); 
                    $_SESSION['mail'] = $mail;
                    header('Location: profil.php');exit;      
                }

                if ($_SESSION['utilisateur'] == 'gestionnaire') {
                    $r = $db->prepare("INSERT INTO gestionnaires(firstName,name,center,mail,password,icode) VALUES (:firstName,:name,:center,:mail,:password,:icode)");

                    $r->execute([
                        'firstName' => $prenom,
                        'name' => $nom,
                        'center' => $center,
                        'mail' => $mail,
                        'password' => password_hash("$password", PASSWORD_BCRYPT, $options),
                        'icode' => $_SESSION['icode']
                    ]); 
                    $_SESSION['mail'] = $mail;
                    header('Location: profil.php');exit;
                }

                if ($_SESSION['utilisateur'] == 'administrateur') {
                    $s = $db->prepare("INSERT INTO administrateurs(firstName,name,mail,password,icode) VALUES (:firstName,:name,:mail,:password,:icode)");

                    $s->execute([
                        'firstName' => $prenom,
                        'name' => $nom,
                        'mail' => $mail,
                        'password' => password_hash("$password", PASSWORD_BCRYPT, $options),
                        'icode' => $_SESSION['icode']
                    ]);
                    $_SESSION['mail'] = $mail; 
                    header('Location: profil.php');exit;
                }
            }
            /*
            $q2 = $db->query("SELECT * FROM clients WHERE prenom = 'Thibault'");
            while ($user = $q2->fetch()) { ?>
                <p>Le prénom de l'utilisateur est : <?= $user['prenom']; ?><p>
            <?php }
            
            else {
                faire un message pour l'utilisateur
            }
           
        if(!empty($prenom) && !empty($nom)){
            echo "Votre prenom : ".$prenom;
            echo "Votre nom : ".$nom;
        }
        */
        }
    }
?>

</body>
</html>