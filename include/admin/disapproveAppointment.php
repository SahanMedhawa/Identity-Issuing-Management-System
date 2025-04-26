<?php
require_once '../connectDB.php';

$res_id = $_GET['res_id'];
$disapproved = "Disapproved";

$sql = "UPDATE reservations SET status = '$disapproved' WHERE res_id = '$res_id'";

if ($connect->query($sql) === TRUE) {
    header('Location: ../../adminDashboard.php');
}
else {
    echo '<script>alert("There was an unexpected error."); 
    window.location.href = "adminDashboard.php";</script>';
}

?>