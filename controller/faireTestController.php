<?php session_start();
include 'redirectionSession.php';
include '../model/database.php';
include '../model/requeteProfil.php';
include '../view/header.php';
include '../view/footer.php';
if(isset($_POST['start'])) {
    include '../model/requeteLog.php';
    //include '../model/faireTestModel.php';
}
include '../view/faireTest.php';
?>