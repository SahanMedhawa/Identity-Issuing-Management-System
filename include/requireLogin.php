<?php
session_start();

if(!$_SESSION) {
    header('Location: login.php');
}

else if(isset($_SESSION['userID']))
{
    require_once 'userHeader.php';
}