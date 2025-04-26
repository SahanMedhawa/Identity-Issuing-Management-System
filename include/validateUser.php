<?php
require_once 'connectDB.php';
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

if(!empty($email) && !empty($password))
{
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $connect->query($sql);

    if($result->num_rows == 1)
    {
        $password = md5($password);
        $mainSql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $mainResult = $connect->query($mainSql);

        if($mainResult->num_rows == 1)
        {
            $value = $mainResult->fetch_assoc();
            $user_id = $value['user_id'];
            
            $_SESSION['userID'] = $user_id;

            header('Location: ../index.php');
        }
        else 
        {
            header('Location: ../login.php');
        }
    }
    else 
    {
        header('Location: ../login.php');
    }
}
else 
{
    echo "Email and password fields are required";
}
?>