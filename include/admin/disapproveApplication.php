<?php
require_once '../connectDB.php';

$app_id = $_GET['app_id'];
$disapproved = "Disapproved";

$sql = "UPDATE applications SET status = '$disapproved' WHERE app_id = '$app_id'";

if ($connect->query($sql) === TRUE) {
    header('Location: ../../adminDashboard.php');
}
else {
    echo '<script>alert("There was an unexpected error."); 
    window.location.href = "adminDashboard.php";</script>';
}

?>