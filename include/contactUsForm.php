<?php
session_start();
require_once 'connectDB.php';

$date = date('Y-m-d');
$name = $_POST['name'];
$email = $_POST['email'];
$contactno = $_POST['contact'];
$message = $_POST['message'];
$user_id = $_SESSION['userID'];

$sql = "INSERT INTO contactus (date, name, email, contactNo, message, user_id) 
VALUES ('$date', '$name', '$email', '$contactno', '$message', '$user_id')";

if ($connect->query($sql) === TRUE) {
    echo '
    <script>
    alert("Your message was successfully sent!");
    window.location.href = "../index.php";
    </script>';
} else {
    echo '
    <script>
    alert("Fields can\'t be empty!");
    history.back();
    </script>';
}

?>