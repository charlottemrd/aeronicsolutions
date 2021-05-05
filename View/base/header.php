<link rel="stylesheet" href="../assets/header.css" />
<?php
session_start();

?>
<nav>
    <div class="logoC">
        <a href="index.php">
            <img src="../assets/Ressources/Images/Logo3.png" width="150" alt="logo" class="logo-image">
        </a>
    </div>
    <div class="linkC">
        <a href="#">Nous découvrir</a>
        <a href="presentationTest.php">Nos tests</a>
        <a href="faq.php">FAQ</a>
        <a href="messagerie.php">Nous contacter</a>
    </div>
    <div class="connexionC">
        <div class="IMGC">
            <a href="profil.php">
                <img class="Bcon" href="index.php" src="../assets/Ressources/Images/account.png" width=30 alt="##" />
            </a>
        </div>
        <?php  if (!isset($_SESSION['utilisateurs'])){ ?>
        <div class="menuDPasConnecte">
                <div class="bt1">
                <a href="inscription.php">Inscription</a>
                </div>
            <div class="bt2">
                <a href="connexion.php">Connexion</a>
            </div>
        </div>
            <?php }
            else{  ?>
            <div class="menuDConnecte">
                <div class="bt1">
                    <a href="profil.php">Mon profil</a>
                </div>
                <div class="bt1">
                    <a href="#">Faire un test</a>
                </div>
                <div class="bt1">
                <?php    if ($_SESSION['utilisateurs']=='client'){ ?>
                    <a href="#">Historique</a>
                 <?php } else if($_SESSION['utilisateurs']=='gestionnaire'){ ?>
                    <a href="#">Rechercher</a>
                <?php } else if($_SESSION['utilisateurs']=='administrateur'){ ?>
                    <a href="#">Maintenance du site</a>
                    <?php } ?>
                </div>
                <div class="bt2" >
                    <a href="?link=1" name="logout">Deconnexion</a>
                </div>
            </div>>
            <?php
                include 'includes/deconnexion.php';
            }
            ?>

        </div>
    </div>
</nav>