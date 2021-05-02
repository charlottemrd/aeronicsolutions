<!DOCTYPE html>
<html>

<head>
    <title>Connexion</title>

    <meta charset="utf-8" />
    
    <link rel="stylesheet" href="../assets/inscriptionStyle.css" />

</head>

<body>

    <?php include 'header.php'; ?>
    <?php include 'footer.php'; ?>

    <form method="post" class="contentInscription">
        <div class="title_container">
            <h3>Inscrivez-vous</h3>
        </div>
        <div class="form_container">

            <input name="prenom" type="text" id="prenom" placeholder="Prénom" required pattern=".{3,}" title="Le champ doit contenir au moins 3 lettres">
            <input name="nom" type="text" id="nom" placeholder="Nom" required pattern=".{3,}" title="Le champ doit contenir au moins 3 lettres">
            <input name="birthDate" type="date" id="birthDate" placeholder="Date de naissance" >
            <input name="mail" type="text" id="mail" placeholder="Adresse-mail" required >
            <input name="password" type="password" id="password" placeholder="Mot de passe" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Le mot de passe doit contenir au moins un chiffre, une majuscule, une minuscule et être composé d'au moins 8 charactères">
            <input name="cpassword" type="password" id="cpassword" placeholder="Confirmer mot de passe" required pattern="password" title="Les mots de passes ne correspondent pas">
            <input name="code" type="code" id="code" placeholder="I-C" required>

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

        if ($password == $cpassword) {

            include 'includes/database.php';
            global $db;

            $options = ['cost' => 12,];

            $c = $db->prepare("SELECT mail FROM clients WHERE mail = :mail");
            $c->execute(['mail' => $mail]);
            $result = $c->rowCount();

            $q = $db->prepare("INSERT INTO clients(prenom,nom,birthDate,mail,password,code) VALUES (:prenom,:nom,:birthDate,:mail,:password,:code)");

            /*
            $q2 = $db->query("SELECT * FROM clients WHERE prenom = 'Thibault'");
            while ($client = $q2->fetch()) { ?>
                <p>Le prénom de l'utilisateur est : <?= $client['prenom']; ?><p>
            <?php }
            */

            if ($password == $cpassword) {

                $q->execute([
                    'prenom' => $prenom,
                    'nom' => $nom,
                    'birthDate' => "2000-08-03",
                    'mail' => $mail,
                    'password' => password_hash("$password", PASSWORD_BCRYPT, $options),
                    'code' => $code
                ]);

                header('Location: index.php');
            }

            /*
            else {
                faire un message pour l'utilisateur
            }
            */
            /*
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
