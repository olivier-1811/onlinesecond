<?php
 include "conect.php";
if($_SERVER['REQUEST_METHOD']==="POST"){
    $password=($_POST['password']);
    $email=($_POST['email']);
    $sel="SELECT*FROM user WHERE password='$password";
    $result=mysqli_query($conn,$sel);
    $user=mysqli_fetch_assoc($result);
    if($user && password_verify($password,$user['password'])){
        session_start();
        $_SESSION['user_id'] = $USER['id'];
                header('location: /dashboard.php');
    }
    else{
        echo"incorrect password and username";
    }
    
}
 ?>