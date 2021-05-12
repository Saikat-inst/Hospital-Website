
  <div class='row'>
<?php
  include "dbcon.php";
  $s="SELECT * FROM `gallery` ORDER BY `id` DESC ";
  $res= mysqli_query($connect,$s);

    while($d=mysqli_fetch_array($res)){
        echo "
          <div class='col-md-3'>
            <div class='card text-center'>
             <div class='card-block'>
             <img src='".$d['path']."' style='width:100%;height:200px'></br>
             <button id='".$d['id']."' class='btn btn-danger delete'>Delete</button>
            </div>
   
          </div>
          
          </div>
         
          
         
   
       
        ";
    }


?>

</div>
<script>
    $(document).ready(function(){
     $(".delete").click(function(){
      var id= $(this).attr("id");
       $.ajax({
         url:"deletegallery.php",
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