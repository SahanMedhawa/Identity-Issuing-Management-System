<?php
session_start();

if(!$_SESSION) {
    require_once 'header.php';
    //echo '<script>alert("You are not logged in")</script>';
}

else if(isset($_SESSION['userID']))
{
    require_once 'userHeader.php';
}
?>