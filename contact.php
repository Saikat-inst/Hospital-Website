
 <!DOCTYPE html>
<html lang="en">
<?php include "info.php";?>
    <?php include "header1.php";?>
<body>
     

    
        <?php  include "nav.php";?>
    
  

    <section class="sub-page-banner text-center" data-stellar-background-ratio="0.3">
        <img src="image/contact.jpg" style="width:100%;" alt="About Dr. Parag Agarwal" class="img-responsive"/>
        </section>

        <!--Contact-->
    
        <div class="contact">
            <div class="container">
              <div class="row">
                  <div class="col-md-8">
                    <div class="gap1">
                  <form id="test" action="" method="POST">
                  <div class="col-md-6">
<input type="text" name="name" placeholder="Your Name" maxlength="50" class="form-control" required/><br>
<input type="tel" name="phone" placeholder="Phone No" maxlength="12" class="form-control" required/><br>
</div>
<div class="col-md-6">
<input type="email" name="email" placeholder="Email ID" maxlength="50" class="form-control" required/><br>
<input type="text" name="subject" placeholder="Subject" maxlength="50" class="form-control" required/><br>
</div>
<div class="col-md-10">
<textarea placeholder="Message" name="message"  class="form-control" maxlength="500"></textarea>
<div class="sub_div">
<input type="submit" name="submit" class="btn" value="Submit">
</div>
</div>

                  
                </div>
            </div>
                </form>
                      
                  
                  
                  <script>
        $(document).ready(function(){
            $('#test').submit(function(e){
                e.preventDefault();
                $.ajax({
                    url:'data.php',
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

                <div class="col-md-4">
                    <div class="con1">
                        <ul>
                            
                            <li><strong>Address:</strong><p><?php echo $info['address'];?></p></li>
                            <li><strong>Email:</strong><p><?php echo $info['email'];?></p></li>
    
                            <li><strong>Phone:</strong><p><?php echo $info['phone'];?></p></li> 
                               
                           
                        </ul>
                     </div>
                    
                </div>
                </div>
              </div>
        
                </div>
        </div>

        <!--Contact-->

        <section class="sub-page-banner text-center" data-stellar-background-ratio="0.3">
        <img src="image/location.png" style="width:100%;" alt="About Dr. Parag Agarwal" class="img-responsive"/>
        </section>

        
     
            <?php include "footer.php";?>
            </body>
                  </html>
  