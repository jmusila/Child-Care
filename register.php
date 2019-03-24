<?php
include ("connection.php"); 
session_start();
if(isset($_POST['save']) && !empty($_POST['save'] ))
{


  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $username = $_POST['username'];
  $password = md5($_POST['password']);
  $confirmpassword = $_POST['confirmpassword'];
  $status = $_POST['status'];

  $sql = "SELECT email FROM users WHERE email = '$email' and username = '$username'";
  $result = mysqli_query($conn, $sql);
   
   if(mysqli_num_rows($result)==0)
   {
    $sql = "INSERT INTO users (firstname, lastname, email, phone,
    username, password, status) VALUES  ('$firstname', '$lastname', '$email', '$phone', '$username', '$password', false)";
      
       if(mysqli_query($conn, $sql))
       {
        echo "<script type=\"text/javascript\">alert('User registered successfully');</script>";
       }
      else
      {
        $msg = "Something went wrong!";
        }
      if($email == "email"){
            echo "<script type=\"text/javascript\">alert('Email already used');</script>";
           }
      if($username == "username"){
        $msg = "Username already used!";
        
      }
  } 
}
