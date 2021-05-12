<div class='row'>
<?php
  include "dbcon.php";
  $s="SELECT * FROM `service` ORDER BY `id` DESC ";
  $res= mysqli_query($connect,$s);

    while($d=mysqli_fetch_array($res)){
        echo "
          <div class='col-md-4'>
            <div class='card text-center'>
             <div class='card-block'>
             <img src='".$d['path']."' style='width:100%;height:200px'></br>
              <center>
              <h5>".$d['type']."</h5>
              <p>".$d['des']."</p>
              </center>
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
         url:"deleteservice.php",
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