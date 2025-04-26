<?php
session_start();
require_once 'connectDB.php';

$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$reason = $_POST['reason'];
$date = $_POST['date'];
$userid = $_SESSION['userID'];
$status = "Pending";

$sql = "INSERT INTO reservations (name, email, contact, reason, date, user_id, status)
      VALUES ('$name','$email','$contact', '$reason', '$date', '$userid', '$status')";

if ($connect->query($sql) === TRUE) {
  echo '<script>alert("Reservation was added to database."); 
  window.location.href = "../index.php";</script>';
}
else {
  echo '<script>alert("There was an unexpected error."); 
  window.location.href = "index.php";</script>';
}

?>