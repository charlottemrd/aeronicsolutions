<?php
if( $_GET['link']=='1' ) {
    session_destroy();
    session_unset();
    header("location:index.php");
}


    ?>