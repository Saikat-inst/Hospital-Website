<?php
    include "dbcon.php";
    if(isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['age'])  
      && isset($_POST['gender'])   && isset($_POST['date']) && isset($_POST['department'])){
       
       $s="INSERT INTO `appointment`(`name`, `phone`, `email`, `age`,`gender`,`date`,`department`) VALUES 
		('".$_POST['name']."','".$_POST['phone']."','".$_POST['email']."','".$_POST['age']."','".$_POST['gender']."',
        '".$_POST['date']."','".$_POST['department']."')";
        
        if(mysqli_query($connect,$s)){
        echo "New record created successfully";
        }
    else {
        echo "Something went wrong!";
    }

      }
?>