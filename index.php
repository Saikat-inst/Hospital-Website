<!DOCTYPE html>
<html lang="en">
<?php include "info.php" ?>
<?php include "header.php";?>


<body>
    
    <?php  include "nav.php";?>
        <div class="container" style="padding-left:0px;padding-right:0px">
       
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
          </ol>
      
          <!-- Wrapper for slides -->
          <div class="container_full">
            <div id="carousel-example-generic" class="carousel slide" style='width:100%' data-ride="carousel">
               <div class="carousel-inner">
                   <div class="item active">
                       <img class='slide_item'    src="image/s1.jpg" alt="...">
                   </div>
                   <div class="item">
                       <img class='slide_item'  src="image/s2.jpg" alt="...">
                   </div>
                   <div class="item">
                       <img class='slide_item'  src="image/s3.jpg" alt="...">
                   </div>
                   <div class="item">
                    <img class='slide_item'    src="image/s4.jpg" alt="...">
                </div>
               </div>
               
               <!-- Controls -->
               <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                   <span class="glyphicon glyphicon-chevron-left"></span>
               </a>
               <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                   <span class="glyphicon glyphicon-chevron-right"></span>
               </a>
               </div>
             </div>
          </div>
       </div> 
            
            <!-- Carousel -->

            <!--Appointment-->

            <div class="appointment" style="margin:0"  >
              <div class="container" >
              <div class="row button-banner">
              <div class="col-md-12 first">
              <div class="appoint box-shadow-effect2 prelative">
              <form id="test" class="appointment-form" action="" method="post">
              <div class="row">
              <div class="col-md-3">
              <div class="form-group">
              <input type="text" name="name" class="form-control" placeholder="Patient Name" required />
              </div>
              </div>
              <div class="col-md-3">
              <div class="form-group">
              <input type="tel" name="phone" class="form-control" placeholder="Phone No" required />
              </div>
              </div>
              <div class="col-md-3">
              <div class="form-group">
              <input type="email" name="email" class="form-control" placeholder="E-mail ID" />
              </div>
              </div>
              <div class="col-md-3">
              <div class="form-group">
              <input type="number" name="age" class="form-control" placeholder="Age" required />
              </div>
              </div>
              </div>
              <div class="row"><div class="col-xs-12"></div><div class="divider"></div></div></div>
              <div class="row">
              <div class="col-md-3">
              <div class="form-group">
              <select class="form-control" name="gender" required>
              <option value="">Gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              </select>
              </div>
              </div>
              <div class="col-md-3">
              <div class="form-group">
              <div id="sandbox-container">
              <div class="input-daterange" id="datepicker">
              <input type="date" class="form-control" name="date" type="text" placeholder="Appoinment Date" required />
              </div>
              </div>
              </div>
              </div>
              <div class="col-md-3">
              <div class="form-group">
              <select class="form-control" name="department">
              <option value="">Department</option>
              <option selected="selected" value="">Select a Specialty</option>
              <option value="Neuro Surgery">Neuro Surgery</option>
              <option value="Neuro Medicine">Neuro Medicine</option>
              <option value="Plastic &amp; Reconstructive Surgery">Plastic &amp; Reconstructive Surgery</option>
              <option value="Dermatology (Skin &amp; Cosmetic)">Dermatology (Skin &amp; Cosmetic)</option>
              <option value="Urology">Urology</option>
              <option value="Nephrology">Nephrology</option>
              <option value="Gastro-Enterology">Gastro-Enterology</option>
              <option value="Cardiology">Cardiology</option>
              <option value="General &amp; Laparoscopic Surgery">General &amp; Laparoscopic Surgery</option>
              <option value="orthopaedic">Orthopaedic</option>
              <option value="Gynaeocology">Gynaeocology &amp; Obstetrics</option>
              <option value="Otorhinolaryngology (ENT)">Otorhinolaryngology (ENT)</option>
              <option value="General Medicine, Chest, Diabetology &amp; Rheumatology">General Medicine, Chest, Diabetology &amp; Rheumatology</option>
              <option value="Paediatrics &amp; Neonatology">Paediatrics &amp; Neonatology</option>
              <option value="EYE">EYE</option>
              </select>
              </div>
              </div>
              
              <div class="col-md-3">
              <button type="submit"  class="btn btn-primary" style="width:100%;" name="submit">Make an Appoinment</button>
              </form>
              </div>
              </div>
              </div>
              </div>
              </div>
              </div>
              </div>
              <style>
               @media (max-width: 767px) and (min-width: 280px){
                 .appointment{
                   padding-left:0px;
                   padding-right:0px;
                 }
               }
               </style>
            
              <!--Appointment-->

              <script>
        $(document).ready(function(){
            $('#test').submit(function(e){
                e.preventDefault();
                $.ajax({
                    url:'data1.php',
                    method:'post',
                    data:new FormData(this),
                    processData:false,
                    contentType:false,
                    success:function(ob){
                    alertify.success(ob);
                    }

                })



            })




        });
           
</script>


              


             <!-- Widget -->
               <div class="widget">
                <div class="container">
                  <div class="row">
                      <div class="col-sm-3 col-xs-6 col-sm-3 text-center">
                          <div class="widget-box">
                          <div class="widget-img">
                            <img src="image/brain.jpg" width="350" height="230" >
                            <h4>Brain</h4>
                                
                          </div>
                          </div>
                       </div>
                       
                       <div class="col-sm-3  col-xs-6 col-sm-3 text-center">
                        <div class="widget-box">
                        <div class="widget-img">
                          <img src="image/appo.jpg"  width="350" height="230" >
                          <h4>Appo</a>
                </div>
              </div>
         </div>
         <div class="col-sm-3  col-xs-6 col-sm-3 text-center">
          <div class="widget-box">
          <div class="widget-img">
            <img src="image/neurology.jpg"  width="350" height="230" >
            <h4>Neurology</h4>
         </div>
          </div>
            </div>  
            <div class="col-sm-3  col-xs-6 col-sm-3 text-center">
              <div class="widget-box">
              <div class="widget-img">
                <img src="image/spine.jpg"  width="350" height="230" >  
                <h4>Spine</h4>
          </div>
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
             <a href='doctor.php'><button class='btn btn-primary'>Read More</button></a>
              </center>
            </div>
   
          </div>
          
          </div>
         
          
         
   
       
        ";
    }


?>

</div>
</center>
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
             <a href='services.php'><button class='btn btn-primary'>Read More</button></a>
              </center>
            </div>
   
          </div>
          
          </div>
         
          
         
   
       
        ";
    }


?>

</div>
</center>

             <!-- Widget -->


             <!-- Widget1 -->
             <center>
             <h1 style='color:#0f2b51';>Center Of Excellence</h1>
             <div class='row' style='padding:40px'>
<?php
  include "dbcon.php";
  $s="SELECT * FROM `gallery` ORDER BY `id` DESC ";
  $res= mysqli_query($connect,$s);

    while($d=mysqli_fetch_array($res)){
        echo "
        <div class='col-sm-3' style='margin-bottom:10px';></br>
            <img src='admin/".$d['path']."' class='image wow fadeInLeft ' style='width:100%;height:200px;'></br>
        </div>
        ";
    }


?>
</div>
  </center>
          <!-- Widget 1-->
          
          <!--Menu-->
          <div class="menu">
            <div class="container">
              <div class="row">
                  <div class="col-md-7 text-center">
                    <div class="about">
                    <ul>
                  
           <li class="active"><a href="about.php" style="color:white;text-decoration:none">ABOUT</a></li>
         <li><a href="services.php" style="text-decoration:none">Services</a></li>
          <li><a href="index.php" style="text-decoration:none">Appointment</a></li>
                    
                  </ul>
                    </div>
                  
                 
            </div>
           <div class="col-md-5 text-center">
          <div class="help-banner">
          <a href="contact.php" style="color:white;text-decoration:none"><h4>Contact</h4></a>
              <strong> <i class="fa fa-phone-square"><a href="tel:+91 83730 49877"style="color:white; text-decoration:none"><?php echo $info['phone']?></a>/ <a href="tel:+91 81455 04929" style="color:white;text-decoration:none"><?php echo $info['phone']?></a></i></strong><br>
              <strong><i class="fa fa-envelope-o"><a href="mailto:drparag35@yahoo.com" style="margin:2.5%;color:white;text-decoration:none"><?php echo $info['email']?></a></i></strong>
          </div>
          
        </div>
                      </div>
                      </div>
                  </div>

                  <!--Menu-->

          <!--Banner-->

          <section class="banner" data-stellar-background-ratio="0.3">
            <div class="banner-highlight">
            <div class="container">
                <div class="row">
                  <div class="text-center">
                      <h2 class="light">About <strong>United day Care</strong></h2>
                      <p class="lead">Our Journey started in 2003 with 25 beds and built up area of 45000sqft with around 10 departments.We have now 150 licensed beds and capacity of 180 beds with built up area of 1 Lakh sqft with around 25 departments. Around 50% area is under centralized air conditioning.
                     <br /><br />
                     We have largest haemodialysis unit in this region with 38 state of art machine and double RO plant.Our Nephrology department is also performing CAPD. Our Newly developed cardiac centre is performing primary angioplasty,CABG,and other cardiovascular surgeries. <a href="about.php" style="color:#fff;">Read More...</a></p>
                      </div>
                        </div>
                       
                </div>
            </div>
            </div>
         </section>

            <!--Banner-->

          

             
                 <!-- Footer -->
            
                 <?php include "footer.php";?>

                </html>


    