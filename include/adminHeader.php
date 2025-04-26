<?php
session_start();

if(isset($_SESSION['adminID']))
{
    require_once 'adminHeader.php';
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Identity Issuing Service</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/admin.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>

    <body style = "background-image: url('');">    
        <div class="header">
            <ul>
                <li><a href="adminDashboard.php"><i class="fa-solid fa-house"></i> Dashboard</a></li>
                <li style="float:right;"><a href="logout.php"><i class="fas fa-sign-in-alt"></i> Logout</a></li>
            </ul>

        </div>
