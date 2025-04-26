<?php

require_once 'connectDB.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password_1 = md5($_POST['password1']);
$password_2 = md5($_POST['password2']);
$phoneno = $_POST['phoneno'];

if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($password_1) && !empty($phoneno))
{
    if(md5($password_1) === md5($password_2))
    {
    $sql = "INSERT INTO users (firstName, lastName, email, password, phoneNo) VALUES ('$firstname','$lastname','$email','$password_1','$phoneno')";

    if ($connect->query($sql) === TRUE) {
        header("Location: ../login.php");
        //echo '<script>alert("You were successfully registered."); 
        //window.location.href = "../login.php";</script>';
    }
    else {
        echo '<script>alert("There was an unexpected error."); 
        window.location.href = "index.php";</script>';
    }
    die;
    } 
    //add this to correct sign up error
    else{
        echo '<script>alert("Password Mismatch."); 
     window.location.href = "../signup.php";</script>';
    }  
 

}
else{
    echo "Please Enter Valid Information !";
}


?>