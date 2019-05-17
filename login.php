<?php
include ("connection.php");
session_start();
if(isset($_POST['login']))
{
 $email = $_POST['email'];
 $password = md5($_POST['password']);



   $sql ="SELECT * FROM users WHERE email = '$email' and password = '$password' ";
   $result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0)
   {  
   	$fetch = mysqli_fetch_assoc($result);
   
       $id = $fetch['id'];
       $firstname = $fetch['firstname'];
       $lastname = $fetch['lastname'];
       $email = $fetch['email'];
       $phone = $fetch['phone'];
       $username = $fetch['username'];
       $password = md5($fetch['password']);
       $confirmpassword = $fetch['confirmpassword'];
       $status = $fetch['status'];

   	
      if($status==0)
        {
          header("location: parent.php");
        }
      else
        {
        header("location: admin/dashboard.php");
        }  
   } 
   if($email!="email" and $password != "password")
   {
   echo "<script type=\"text/javascript\">alert('Incorrect email or password');</script>";
   }
   else
   {
    echo "<script type=\"text/javascript\">alert('Something went wrong!');</script>";
   }

}