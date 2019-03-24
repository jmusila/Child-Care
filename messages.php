<?php
include ("connection.php"); 
session_start();
if(isset($_POST['send']))
{


  $message = $_POST['message'];
   
   if(mysqli_num_rows($result)==0)
   {
    $sql = "INSERT INTO messages (message) VALUES  ('$message')";
      
       if(mysqli_query($conn, $sql))
       {
        echo "<script type=\"text/javascript\">window.alert('Message send successfully, we will be back to you shortly.');</script>";
       }
      else
      {
        echo "<script type=\"text/javascript\">alert('Something went wrong!');</script>";
       }
  } 
}