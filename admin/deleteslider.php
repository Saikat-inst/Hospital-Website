<?php
  include "dbcon.php";
  if(isset($_POST['id'])){

    $s="DELETE FROM `slider` WHERE `id`='".$_POST['id']."'";

    if(mysqli_query($connect,$s)){
        echo " Sucessfully Deleted";
    }
    else{
        echo "Error";
    }
  }


?>