
<!DOCTYPE html>
<html>

<head>
    <title>Inscription client</title>

    <meta charset="utf-8" />

    <link rel="stylesheet" href="../View/assets/inscriptionStyle.css" />

</head>

<body>

<form method="post" class="contentInscription" >
    <div class="title_container">
        <h3>Inscription - <?=$_SESSION['utilisateur']; ?> </h3>
    </div>
    <div class="form_container">
        <input name="prenom"   type="text" id="prenom" placeholder="Prénom" required pattern="[a-zA-ZÀ-ÿ]+[^0-9]" maxlength="20" minlength="3"  title="Veuillez rentrer un prénom correct" value="<?=$_POST['prenom']?>">
        <input name="nom"   type="text" id="nom" placeholder="Nom"  required pattern="[a-Z]"  title="Le champ doit contenir au moins 3 lettres" title="Veuillez rentrer un nom correct" value="<?=$_POST['nom']?>">


        <?php
        if ($_SESSION['utilisateur'] == 'gestionnaire') { ?>
            <input name="center"  type="text" id="center" placeholder="Centre médical" required pattern="[a-Z]" pattern="[a-zA-ZÀ-ÿ]+[^0-9]" maxlength="20" minlength="3" title="Veuillez rentrer une valeur correct" value="<?=$_POST['center']?>">
        <?php }
        ?>

        <input name="mail" type="text" id="mail" placeholder="Adresse-mail" required pattern="[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+.[a-zA-Z.]{2,15}" value="<?=$_POST['mail']?>" title="Veuillez rentrer un mail correct">
        <input name="password" type="password" id="password" placeholder="Mot de passe" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Le mot de passe doit contenir au moins un chiffre, une majuscule, une minuscule et être composé d'au moins 8 charactères">
        <input name="cpassword" type="password" id="cpassword" placeholder="Confirmer mot de passe" required  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Le mot de passe doit contenir au moins un chiffre, une majuscule, une minuscule et être composé d'au moins 8 charactères">

        <?php
        if ($_SESSION['utilisateur'] == 'client') { ?>
            <input name="compagnie" type="text" id="compagnie" placeholder="Compagnie aérienne" title="Veuillez rentrer une valeur correcte" required pattern="[a-Z]" pattern="[a-zA-ZÀ-ÿ]+[^0-9]" maxlength="20" minlength="3" value="<?=$_POST['compagnie']?>">

            <input name="birthDate"  type="date" id="birthDate" required placeholder="Date de naissance"  value="<?=$_POST['birthDate']?>" >
            <div class="genre">
                <select name="genre" id="genre" required value="<?=$_POST['genre']?>">
                    <option value="" selected="selected" disabled="disabled">Genre</option>
                    <option value="Homme">Homme</option>
                    <option value="Femme">Femme</option>
                </select>
            </div
             <?php }?>
        <div class="CondUtilisations">
            <input class="inp-cbx" id="cbx" type="checkbox" style="display: none" required>

            <label class="cbx" for="cbx"><span>
                       <svg width="12px" height="10px" viewbox="0 0 12 10">
                           <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                       </svg></span><span>Valider les
                       <a href="../View/base/ConditionsUtilisation.php" target="_blank">Conditions générales d'utilisations</a>
                   </span></label>
        </div>
    </div>
    <div class="erreurM">
        <p><?=$_GET['inscriptionError']?></p>
    </div>
    <div class="logC">
        <input class="log" name="log" type="submit"></input>
    </div>
</form>
</body>
</html>

