<?php
include "conect.php";
    if($_SERVER['REQUEST_METHOD']==="POST"){
session_start();
    $message="";
   $email=trim($_POST['email']);
   $password=trim($_POST['password']);

$sel="SELECT*FROM user WHERE email='$email' AND password='$password'";
$res=mysqli_query($conn,$sel);
 while($a=mysqli_fetch_assoc($res)){
  $ame=$a['email'];
  $word=$a['password'];
 if($email===$ame && $password===$word){
   $_SESSION['email']=$email;
    header('location:dashboard.php');
 }else{
    echo"<p color='red'>invalid username or password</p>";
 }
}};

 if(isset($_GET['logout'])){
    session_unset();
    session_destroy();
    $message="yuo have been logged out";
 };
?>
 