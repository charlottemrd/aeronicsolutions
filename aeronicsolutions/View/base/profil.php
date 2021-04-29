<!DOCTYPE html>
<html>

<head>
    <title>Profil</title>

    <meta charset="utf-8" />
    <link rel="stylesheet" href="../assets/profil.css" />
    <link rel="stylesheet" href="../assets/footer.css" />

</head>

<body>
    <nav>
        <div class="logoC">
            <a href="index.html">
                <img src="../assets/Ressources/Images/Logo3.png" width="150" alt="logo" class="logo-image">
            </a>
        </div>
        <div class="linkC">
            <a href="#">Découvrir</a>
            <a href="faq.php">FAQ</a>
        </div>
        <div class="connexionC">
            <div class="IMGC">
                <img class="Bcon" href="index.php" src="../assets/Ressources/Images/account.png" width=30 alt="##" />
            </div>
            <div class="menuD">
                <div class="bt1">
                    <p>Inscription</p>
                </div>
                <div class="bt1">
                    <p>Connexion</p>
                </div>
            </div>
        </div>
    </nav>

    <form action="connexion.php" method="POST" class="contentconnexion">
        <div class="title_container">
            <h3>Données personnelles</h3>
        </div class>
        <div class="superform_container">
            <div class="form_container">
                <div class="information">
                    <h4>Prenom</h4>
                    <p>George</p>
                </div>
                <div class="information">
                    <h4>Date de naissance</h4>
                    <p>12 brumaire an CCXXX</p>
                </div>
                <div class="information">
                    <h4>E-mail</h4>
                    <p>email@adresse.fr</p>
                </div>
                <div class="information">
                    <h4>Médecin</h4>
                    <p>Dr. Themedic</p>
                </div>
            </div>
            <div class="form_container">
                <div class="information">
                    <h4>Nom</h4>
                    <p>Dupont</p>
                </div>
                <div class="information">
                    <h4>Genre</h4>
                    <p>Non binaire</p>
                </div>
                <div class="information">
                    <h4>Compagnie aérienne</h4>
                    <p>Aire isep</p>
                </div>
                <div class="information">
                    <h4> I-C</h4>
                    <p> P45D25A </p>
                </div>
            </div>
        </div>
        <div class="changement">
            <div class="bt1">
                <a href="modifierMdp.php">Modifier mot de passe</a>
            </div>
            <div class="bt1">
                <p><a href="modifierProfil.php">Modifier le profil</a></p>
            </div>
        </div>


    </form>


    <div class="footer bottom">
        <p> (c) Copyright tous droits réservés Aeronic Solutions Corporation 2021 </p>
        <div class="confidentialites">
            <a href="confidentialite.php">Engagement de confidentialité</a>
            <a href="cookies.php">Utilisation de cookies</a>
            <a href="conditionsUtilisation.php">Conditions d'utilisations</a>
            <a href="mentionsLegales.php">Mentions légales</a>
        </div>
    </div>
    </div>
</body>

</html>