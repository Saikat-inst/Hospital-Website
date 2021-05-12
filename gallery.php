
<!DOCTYPE html>
<html lang="en">
    <?php include "header1.php";?>
<body>
    
        <?php  include "nav.php";?>

    <section class="sub-page-banner text-center" data-stellar-background-ratio="0.3">
        <img src="image/gallery.jpg"  alt="About Dr. Parag Agarwal" class="img-responsive"/>
        </section>

        <!--Gallery-->
        <div class='row' style='padding:60px'>
<?php
  include "dbcon.php";
  $s="SELECT * FROM `gallery` ORDER BY `id` DESC ";
  $res= mysqli_query($connect,$s);

    while($d=mysqli_fetch_array($res)){
        echo "
        <div class='col-sm-3' style='margin-bottom:10px';></br>
            <img src='admin/".$d['path']."' style='width:100%;height:200px;'></br>
        </div>
        ";
    }


?>
</div>

      <!--Gallery-->


      <!--Footer-->
      <?php include "footer.php";?>

         </body>
          </html>

           <!--Footer-->



      