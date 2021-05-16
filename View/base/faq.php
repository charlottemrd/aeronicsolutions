<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>

    <meta charset="utf-8" />
    <link rel="stylesheet" href="../assets/faqstyle.css" />

</head>
<body>

<?php include "header.php"; ?>
<?php include "footer.php"; ?>

<div class="contentfaq">
    <div class="title_container">
        <h3>FAQ - foire aux questions</h3>
    </div>
    <div class="faq_container">
        <div class="title_partie">
            <h3>Inscription</h3>
        </div>
    <div class="questions">
            <button class="bouton" id="buttonr1" onclick="changeVisibility('reponse1')"  >Où puis-je trouver le code I-C demandé lors de l'inscription ?</button>
    </div>
        <div class ="reponses" id="reponse1" >
            <h3>Le code I-C vous est fourni par votre entreprise lorsque celle-ci décide d'adhérer au programme Aeronic Solutions.</h3>
        </div>
        <div class="title_partie">
            <h3>Connexion</h3>
        </div>
        <div class="questions">
            <button class="bouton" id="buttonr2" onclick="changeVisibility('reponse2')"  >Je n'arrive pas à me connecter</button>
        </div>
        <div class ="reponses" id="reponse2" >
            <h3>Si vous avez oublié votre mot de passe ou que vous avez des problèmes de connexion, vous pouvez nous contacter à l'adresse mail : solutionsaeronic@gmail.com.</h3>
        </div>

        <div class="questions">
            <button class="bouton" id="buttonr3" onclick="changeVisibility('reponse3')"  >Que représente l'identifiant lors de la connexion ?</button>
        </div>
        <div class ="reponses" id="reponse3" >
            <h3>L'identifiant vous est donné par votre adresse e-mail.</h3>
        </div>

        <div class="title_partie">
            <h3>Modification - Suppression du profil</h3>
        </div>

        <div class="questions">
            <button class="bouton" id="buttonr4" onclick="changeVisibility('reponse4')"  >Puis-je changer mon mot de passe ?</button>
        </div>
        <div class ="reponses" id="reponse4" >
            <h3>Vous pouvez changer votre mot de passe, nom, prénom et date de naissance depuis la page gestion du profil.</h3>
        </div>

        <div class="questions">
            <button class="bouton" id="buttonr5" onclick="changeVisibility('reponse5')" >Je n'arrive pas à modifier mon adresse e-mail </button>
        </div>
        <div class ="reponses" id="reponse5" >
            <h3>Vous ne pouvez pas modifier votre adresse e-mail vous-même. Nous vous invitons à prendre contact avec un administrateur de Aeronic Solutions pour le faire.</h3>
        </div>

        <div class="questions">
            <button class="bouton" id="buttonr6" onclick="changeVisibility('reponse6')"  >Je souhaite supprimer mon compte</button>
        </div>
        <div class ="reponses" id="reponse6" >
            <h3>Si vous n'êtes pas satisfait des prestations offertes par Aeronic Solutions, il vous est possible d'adresser un e-mail à solutionsaeronic@gmail.com afin que votre compte et vos données associées soient supprimées.</h3>
        </div>

        <div class="title_partie">
            <h3>Tests</h3>
        </div>
        <div class="questions">
            <button class="bouton" id="buttonr7" onclick="changeVisibility('reponse7')"  >Je suis un pilote, puis-je consulter les résultats de mes tests psychotechniques ?</button>
        </div>
        <div class ="reponses" id="reponse7" >
            <h3>Vous pouvez consulter vos tests à tout moment depuis la page Résultat test.</h3>
        </div>

        <div class="questions">
            <button class="bouton" id="buttonr8" onclick="changeVisibility('reponse8')"  >Est-il possible de connaître le déroulement d'un test Aeronic Solutions?</button>
        </div>
        <div class ="reponses" id="reponse8" >
            <h3>Afin que vous ne soyez pas déstabilisé la première fois que vous passez une série de tests, nous avons mis à votre disposition un résumé des tests ainsi que l'ordre de ces derniers depuis la page information sur les tests.</h3>
        </div>
    </div>

</body>
</html>

<script>
    function changeVisibility(reponse) {

        if(document.getElementById(reponse).style.display !== "block") {
            document.getElementById(reponse).style.display = "block";
        }

        else{
            document.getElementById(reponse).style.display = "none";
        }
    }
</script>