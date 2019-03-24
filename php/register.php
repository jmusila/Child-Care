<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname = "happychild";
  $conn = mysqli_connect("localhost","root","" , "$dbname");
$msg='';
session_start();
if(isset($_POST['submit']))
{


  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $username = $_POST['username'];
  $password = md5($_POST['password']);
  $confirmpassword = $_POST['confirmpassword'];

  $sql = "SELECT email FROM users WHERE email = '$email'";
  $result = mysqli_query($conn, $sql);
   
   if(mysqli_num_rows($result)==0)
   {
    $sql = "INSERT INTO users (firstname, lastname, email, phone,
    username, password) VALUES  ('$firstname', '$lastname', '$email', '$phone', '$username', '$password')";
      
       if(mysqli_query($conn, $sql))
      {
        echo "Registration Successful";
        
      }
      else
      {
        echo "Something went wrong!";
      }
      if ($email =="email"){
        echo "Email already used!";
      }
      if($username == "username"){
        echo "Username already used!";
        
      }
 
  } 
}
?>