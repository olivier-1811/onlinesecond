<?php
include "conect.php";
if($_SERVER['REQUEST_METHOD']==='POST'){
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$password=$_POST['password'];

$c="INSERT INTO user(id,fullname,email,password) VALUES('','$fullname','$email','$password')";
$f=mysqli_query($conn,$c);
if($f){
  header('location:login.php');
}
}
?>