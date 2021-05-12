<?php
    include "dbcon.php";
    if(isset($_POST['name']) && isset($_POST['email'])){
       
       $s="INSERT INTO `newsletter`(`name`, `email`) VALUES 
		('".$_POST['name']."','".$_POST['email']."')";
        
        if(mysqli_query($connect,$s)){
        echo "New record created successfully";
        }
    else {
        echo "Something went wrong!";
    }

      }
?>