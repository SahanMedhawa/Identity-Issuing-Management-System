<?php
session_start();

include("connectDB.php");

    if (isset($_SESSION['userID'])) {
        $user_id = $_SESSION['userID'];

        // Delete user account from the database
        $query = "DELETE FROM users WHERE user_id = '$user_id'";
        $result = mysqli_query($connect, $query);

        if ($result) {
            // Account deleted successfully, redirect to login page
            header("Location: ../login.php");
            exit();
        } else {
            // Error occurred while deleting account
            echo "Error deleting account. Please try again.";
        }
    } 
    else {
        // User is not logged in
        echo "You are not logged in.";
    }
