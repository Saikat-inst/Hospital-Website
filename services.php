<!DOCTYPE html>
<html lang="en">
    <?php include "header1.php";?>
<body>
    
  <?php  include "nav.php";?>
    <!--Services-->
    

    <section class="sub-page-banner text-center" data-stellar-background-ratio="0.3">
        <img src="image/services.jpg"  alt="About Dr. Parag Agarwal" class="img-responsive"/>
        </section>
        <center>
             <h1 style='color:#0f2b51';>Our Services</h1>
            <div class='row' style='padding:20px'>
<?php
  include "dbcon.php";
  $s="SELECT * FROM `service` ORDER BY `id` DESC ";
  $res= mysqli_query($connect,$s);

    while($d=mysqli_fetch_array($res)){
        echo "
          <div class='col-md-3'>
            <div class='card text-center'>
             <div class='card-block' style='padding:30px'>
             <img src='admin/".$d['path']."' style='width:100%;height:230px'></br>
              <center>
              <h3>".$d['type']."</h3>
              <p>".$d['des']."</p>
             <a href='services.php'><button class='btn btn-primary'style='margin:3%'>Read More</button></a>
              </center>
            </div>
   
          </div>
          
          </div>
         
          
         
   
       
        ";
    }


?>

</div>
</center>

     <!--Services-->
      <!-- Footer -->
            
      <?php include "footer.php";?>

</body>

          </html>


