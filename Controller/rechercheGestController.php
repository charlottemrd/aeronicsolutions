<?php session_start();

include '../View/base/header.php';
include '../View/base/footer.php';
include '../Model/database.php';


if (isset($_POST['bouttonRechercher'])) {


    extract($_POST);

    $_SESSION['recherche'] = $_POST['search'];
    


}


include '../View/base/rechercheGest.php';

?>