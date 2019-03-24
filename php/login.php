<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname = "service";


$conn = mysqli_connect("localhost","root","" , "$dbname");
mysqli_select_db($conn, $dbname);
$msg='';
session_start();
if(isset($_SESSION['id']))
       {
          header("location: employee_account.php");
       }

if(isset($_POST['submit']))
{
 $email = $_POST['email'];
 $password = md5($_POST['password']);



   $sql ="SELECT * FROM user_registration WHERE email = '$email' and password = '$password'";
   $result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0)
   {  
   	$fetch = mysqli_fetch_assoc($result);
   
       $_SESSION['id'] = $fetch['id'];
       $_SESSION['name'] = $fetch['name'];
       $_SESSION['identity'] = $fetch['identity'];
       $_SESSION['gender'] = $fetch['gender'];
       $_SESSION['dob'] = $fetch['dob'];
       $_SESSION['address'] = $fetch['address'];
       $_SESSION['city'] = $fetch['city'];
       $identity = $fetch['identity'];

   	
      if($identity=="employee")
        {
          header("location: employee_account.php");
        }
        else
         {
          header("location: manager_account.php");
         }  
   } 
   else
   {
    $msg = "Email or Password are not correct";
   }

}




?>


<html>
<head>
  <?php 
  include ("header.php");
  ?>