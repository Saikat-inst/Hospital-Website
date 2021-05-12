<?php
    include "dbcon.php";
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message'])){
       
       $s="INSERT INTO `contact`(`name`, `email`, `phone`, `message`) VALUES 
		('".$_POST['name']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['message']."')";
        
        if(mysqli_query($connect,$s)){
        echo "New record created successfully";
    }
    else {
        echo "Something went wrong!";
    }

}
?>