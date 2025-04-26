<?php
require_once 'connectDB.php';
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

if(!empty($email) && !empty($password))
{
    $sql = "SELECT * FROM admin WHERE email = '$email'";
    $result = $connect->query($sql);

    if($result->num_rows == 1)
    {
        $password = md5($password);
        $mainSql = "SELECT * FROM admin WHERE email = '$email' AND password = '$password'";
        $mainResult = $connect->query($mainSql);

        if($mainResult->num_rows == 1)
        {
            $value = $mainResult->fetch_assoc();
            $admin_id = $value['admin_id'];
            $_SESSION['adminID'] = $admin_id;

            header('Location: ../adminDashboard.php');
        }
        else 
        {
            header('Location: ../adminLogin.php');
        }
    }
    else 
    {
        header('Location: ../adminLogin.php');
    }
}
else 
{
    echo "Email and password fields are required";
}
?>