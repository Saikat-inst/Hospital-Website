<?php include "info.php";?>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>United Day Care</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
  <script
  src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.  com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="Css/style3.css">
  <script src="assets/js/wow.js"></script>
</head>
</body>
  <style>
     @media (max-width: 767px) and (min-width: 280px){
     .contdoc{
      margin-left: 8%;
     }
     .logo img{
       margin-left: 8%;
     }
    
     
  }
  
    </style>
   <div class="middle-bar">
    <div class="container">
    <div class="row">
    <div class="col-md-4 col-sm-6">
      <div class="logo">
    <a class="logo" href="/"><img src="image/logo3.png" style="width:50%;padding:10px"></a>
    </div>
  </div>

    <div class="col-md-5 visible-lg">
    </div>
    
    <div class="col-md-3">
    <ul class="contdoc"><br>
    <li><i class="fa fa-phone"></i> <span><a href="tel:+91 83730 49877"><?php echo $info['phone']?></a> / <a href="tel:+91 81455 04929"><?php echo $info['phone']?></a>  </span></li>
    <li><i class="fa fa-envelope-o"></i><span><a href="mailto:drparag35@yahoo.com" style="margin:2%"><?php echo $info['email']?></a></span></li>
    <a href="contact.php"><button type="submit"  class="btn btn-primary" style="width:80%" name="submit">Make an Appoinment</button></a>
    </ul>
   
    
    </div>
    
    </div>
    </div>
    </div>
    </body>