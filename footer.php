<?php include "info.php";?>
<div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-center">
                    <h4>United Day Center</h4>
                    <p><a href="index.php" style="text-decoration:none">Home</a></p>
                    <p><a href="about.php" style="text-decoration:none" >About Us</a></p>
                    <p><a href="doctor.php" style="text-decoration:none">Doctors</a></p>
                    <p><a href="gallery.php" style="text-decoration:none">Gallery</a></p>
                </div>
                <div class="col-md-3 text-center">
                    <h4>GET IN TOUCH</h4>
                    <p><a href="index.php" style="text-decoration:none">Home</a></p>
                    <p><a href="about.php" style="text-decoration:none" >About Us</a></p>
                    <p><a href="doctor.php" style="text-decoration:none">Doctors</a></p>
                    <p><a href="contact.php" style="text-decoration:none">Contact Us</a></p>
                    
                </div>
                <div class="col-md-3 text-center">
                    <h4>Contact Us</h4>
                    
                    <p><i class="fa fa-phone"></i> <span><a href="tel:+91 83730 49877" style="text-decoration:none"><?php echo $info['address']?></a> / <a href="tel:+91 81455 04929"><?php echo $info['phone']?></a>  </span></p>
    <p><i class="fa fa-envelope-o"></i><span><a href="mailto:drparag35@yahoo.com" style="margin:2%;text-decoration:none"><?php echo $info['email']?></a></span></p>
    <p> <span><a href="mailto:drparag35@yahoo.com"  style="text-decoration:none"><?php echo $info['address'];?></a></span></p>

                    
                
                </div>
                <div class="col-md-3 text-center">
                    <h4>Follow Us</h4>
    <p><i class="fa fa-facebook"></i> <span><a href="https://www.facebook.com" style="text-decoration:none">Facebook</a></span></p>
    <p><i class="fa fa-instagram"></i> <span><a href="https://www.instagram.com"  style="text-decoration:none">Instagram</a></span></p>
    <p> <i class="fa fa-whatsapp"></i> <span><a href="https://www.whatsapp.com"  style="text-decoration:none">Whatsapp</a></span></p>
              
         
               
    
            </div>
            </div>
        
          </div>

          <div class="cyberhelp">
          <p class="copyright text-center">Copyright &copy;United Day Center. 2020.
<br>
<a href='http://rebootmarketing.in/' class="logo1" target="_blank" rel="nofollow"><img src="image/reboot.jpg"   alt="Reboot Marketing"/></a>
</p>



          </div>

          <style>
              .logo1 img{
                  width:13%;
              }
              @media (max-width: 767px) and (min-width: 280px){
           .logo1 img{
               width:30%;
           }
        }
              </style>

          <script>
        $(document).ready(function(){
            $('#test1').submit(function(e){
                e.preventDefault();
                $.ajax({
                    url:'data3.php',
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
