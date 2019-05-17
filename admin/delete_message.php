<?php

 include('connection.php');
 
 if (isset($_GET['id']) && is_numeric($_GET['id']))
 {

 $id = $_GET['id'];
 $result = mysqli_query($conn,"SELECT * FROM messages WHERE id='$id'");

while($row = mysqli_fetch_array($result))
  {
    $id=$row['id'];
    $message=$_POST["message"];

 
 $result = mysqli_query($conn,"DELETE FROM messages WHERE id=$id")
 or die(mysqli_error()); 
   

 
 
 if($result){	
  // redirect back to the view page
		echo "<script type=\"text/javascript\">window.alert('Successfuly Deleted');window.location.href = 'dashboard.php';</script>";
		 }
		 else{
		 	 // if id isn't set, or isn't valid, redirect back to view page
			echo "<script type=\"text/javascript\">window.alert('Not Successfuly Deleted');window.location.href = 'dashboard.php';</script>";
			}

 }
}
?>
