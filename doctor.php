<!DOCTYPE html>
<html lang="en">
<?php include "header1.php";?>
<body>
<?php include "nav.php";?>
<?php
    include "dbcon.php";
	$s="SELECT * FROM `page` WHERE `name`='doctors'  ";
	$r=mysqli_query($connect,$s);
	$page=mysqli_fetch_assoc($r);
?>

    <!--Doctors-->

    <section class="sub-page-banner text-center" data-stellar-background-ratio="0.3">
        <img src="image/doctor.jpg" style="width:100%;" alt="About Dr. Parag Agarwal" class="img-responsive"/>
        </section>
        <div id="blog-section" class="wow fadeInDown apt-60 apb-70">
            <div class="blog-wrap">
            <div class="container">
            <div class="row">
            <div class="col-md-12 blog-content">
            <div class="simple-blog-ct">
            <h3 class="font-title apb-15">Doctors</h3>
            <?php echo $page['text'];?>
        </div>
           </div>
           
         
                                      
            </div>
           </div>
           </div>

           <center>
             <h1 style='color:#0f2b51';>Our Doctors</h1>
            <div class='row' style='padding:20px'>
<?php
  include "dbcon.php";
  $s="SELECT * FROM `doctor` ORDER BY `id` DESC ";
  $res= mysqli_query($connect,$s);

    while($d=mysqli_fetch_array($res)){
        echo "
          <div class='col-md-4'>
            <div class='card text-center'>
             <div class='card-block' style='padding:30px'>
             <img src='admin/".$d['path']."' style='width:100%;height:230px'></br>
              <center>
              <h3>".$d['name']."</h3>
              <h4>".$d['type']."</h4>
              <p>".$d['des']."</p>
              <a href='doctor.php'><button class='btn btn-primary'style='margin:3%'>Read More</button></a>
              </center>
              
            </div>
   
          </div>
          
          </div>
         
          
         
   
       
        ";
    }


?>

</div>
</center>

            <!--Doctors-->

            <?php include "footer.php";?>
              </html>

                  
            