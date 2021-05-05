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
        <a href="#">Découvrir</a>
        <a href="faq.php">FAQ</a>
    </div>
    <div class="connexionC">
        <div class="IMGC">
            <a href="profil.php">
                <img class="Bcon" href="index.php" src="../assets/Ressources/Images/account.png" width=30 alt="##" />
            </a>
        </div>
        <div class="menuD">
            <?php  if (!isset($_SESSION['utilisateurs'])){
                echo'<div class="bt1">
                <a href="inscription.php">Inscription</a>
                </div>
            <div class="bt2">
                <a href="connexion.php">Connexion</a>
            </div>';}
            else{
                echo'
                <div class="bt1">
                    <a href="profil.php">Mon profil</a>
                </div>
                <div class="bt1">
                    <a href="#">Faire un test</a>
                </div>
                <div class="bt2" >
                    <a href="?link=1"" name="logout">Deconnexion</a>
                </div>';
                include 'includes/deconnexion.php';
            }
            ?>










        </div>
    </div>
</nav>