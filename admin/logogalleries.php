

<?php
  include "dbcon.php";
  $s="SELECT * FROM `logo` ORDER BY `id` DESC ";
  $res= mysqli_query($connect,$s);

    while($d=mysqli_fetch_array($res)){
        echo "
        
        <div class='logo'>
        <img src='".$d['path']."'></br>
        <button id='".$d['id']."' class='btn btn-danger delete'>Delete</button>
      </div>
    
          
         
   
       
        ";
    }


?>

<script>
    $(document).ready(function(){
     $(".delete").click(function(){
      var id= $(this).attr("id");
       $.ajax({
         url:"deletelogo.php",
         method:"POST",
         data:{"id":id},
         success:function(del){
             alert(del);
             location.reload();
         }
       })
     })

    });


    </script>