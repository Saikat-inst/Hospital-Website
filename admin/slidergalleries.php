<div class="container">
<?php
  include "dbcon.php";
  $s="SELECT * FROM `slider` ORDER BY `id` DESC ";
  $res= mysqli_query($connect,$s);

    while($d=mysqli_fetch_array($res)){
        echo "
        <div id='myCarousel' class='carousel slide' data-ride='carousel'>
        <!-- Indicators -->
        <ol class='carousel-indicators'>
          <li data-target='#myCarousel' data-slide-to='0' class='active'></li>
          <li data-target='#myCarousel' data-slide-to='1'></li>
          <li data-target='#myCarousel' data-slide-to='2'></li>
          <li data-target='#myCarousel' data-slide-to='3'></li>
        </ol>
    
        <!-- Wrapper for slides -->
        <div class='container_full'>
          <div id='carousel-example-generic' class='carousel slide' style='width:100%' data-ride='carousel'>
             <div class='carousel-inner'>
                 <div class='item active'>
                 <img class='slide_item' src='".$d['path']."'>
                 <button id='".$d['id']."' class='btn btn-danger delete'>Delete</button>
                 </div>
                
             </div>
             
             <!-- Controls -->
             <a class='left carousel-control' href='#carousel-example-generic' role='button' data-slide='prev'>
                 <span class='glyphicon glyphicon-chevron-left'></span>
             </a>
             <a class='right carousel-control' href='#carousel-example-generic' role='button' data-slide='next'>
                 <span class='glyphicon glyphicon-chevron-right'></span>
             </a>
             </div>
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
         url:"deleteslider.php",
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