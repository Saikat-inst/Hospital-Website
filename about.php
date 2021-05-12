<!DOCTYPE html>
<html lang="en">
    <?php include "header1.php";?>
<body>
  <?php  include "nav.php";?>
  <?php
    include "dbcon.php";
	$s="SELECT * FROM `page` WHERE `name`='about'  ";
	$r=mysqli_query($connect,$s);
	$page=mysqli_fetch_assoc($r);
?>


        <!--Services-->
    
  

    <section class="sub-page-banner text-center" data-stellar-background-ratio="0.3">
        <img src="image/about.jpg"  alt="About Dr. Parag Agarwal" class="img-responsive"/>
        </section>

        <div class="about">
            
            <div class="container">
              <div class="row">
                  <div class="col-md-8">
                    <div class="gap">
                    <?php echo $page['text'];?>
                    </div>
                    </div>

                    
                    <div class="col-md-4">
                      <div class="media">
                        <div class="item"><img src="image/reception.jpg" ></div>
                        
                        </div>
                                                
                        </div>
                        </div>
                    </div>
                    </div>
                  </div>

                  <!--Footer-->

                  <?php include "footer.php";?>

                  <!--Footer-->
                </body>
      
                </html>
      
      
          
        
        