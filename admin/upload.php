<?php
 include "dbcon.php";
if(isset($_FILES['photo'])){
      $file_name = $_FILES['photo']['name'];
      $file_name=rand()."_".$file_name;
      $file_size =$_FILES['photo']['size'];
      $file_tmp =$_FILES['photo']['tmp_name'];
      $file_type=$_FILES['photo']['type'];
      if(move_uploaded_file($file_tmp,"images/".$file_name)){
          $s="INSERT INTO `gallery`( `path`) VALUES ('images/".$file_name."')";
          if(mysqli_query($connect,$s)){
            echo "Success";
          }
         
     }
      else{

        echo "error";
      }
}



?>