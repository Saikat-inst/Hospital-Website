<?php include "access.php";?>
<!DOCTYPE html>
<html lang="en">
    <?php
        include "dbcon.php";
        if(isset($_POST['submit'])){
            $s="UPDATE `admin` SET `username`='".$_POST['username']."', password='".$_POST['password']."' ";
            if(mysqli_query($connect,$s)){
                echo "<script>alert('Successfully updated');</script>";
            }
        }
        if(isset($_POST['update'])){
            $s="UPDATE `info` SET `name`='".$_POST['name']."',`address`='".$_POST['address']."',`phone`='".$_POST['phone']."',`email`='".$_POST['email']."' WHERE `id`='1'";
            if(mysqli_query($connect,$s)){
                echo "<script>alert('Successfully updated');</script>";
            }
        }
        $d="SELECT * FROM `admin` WHERE `id`='0' ";
        $t=mysqli_query($connect,$d);
        $u=mysqli_fetch_assoc($t);

        $i="SELECT * FROM `info` ";
        $r=mysqli_query($connect,$i);
        $p=mysqli_fetch_assoc($r);
        
    ?>
   
<?php include "header.php";?>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <?php include "topnav.php";?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include "nav.php";?>
      <!-- /.sidebar-menu -->
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 1244.06px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Settings</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Account Settings</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action='' method='post'>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" value='<?php echo $u['username'];?>' name='username' id="exampleInputEmail1" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input value='<?php echo $u['password'];?>' type="password" name='password' class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name='submit' class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            <!-- Form Element sizes -->
            
            <!-- /.card -->

            
            <!-- /.card -->

            <!-- Input addon -->
            
            <!-- /.card -->
            <!-- Horizontal Form -->
            
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">
            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Website Setting</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action='' method='post'>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" name='name' value='<?php echo $p['name']?>' required class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Address</label>
                        <input name='address' value='<?php echo $p['address']?>' type="text" required class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Phone</label>
                        <input name='phone' value='<?php echo $p['phone']?>' type="text" required class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Email</label>
                        <input name='email' value='<?php echo $p['email']?>' type="text" required class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                  <div class="card-footer">
                  <button type="submit" name='update' class="btn btn-primary">Submit</button>
                </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- general form elements disabled -->
            
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="dist/js/pages/dashboard2.js"></script>
</body>
</html>