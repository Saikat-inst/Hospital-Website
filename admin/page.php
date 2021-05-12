<?php include "access.php";?>
<!DOCTYPE html>
<html lang="en">
    <?php
        include "dbcon.php";
        if(isset($_POST['save'])){
            $s="UPDATE `page` SET `text`='".$_POST['text']."' WHERE `name`='".$_GET['page']."'";
            if(mysqli_query($connect,$s)){
                echo "<script>alert('Saved!');</script>";
            }
            else{
                echo "<script>alert('Something went wrong!');</script>";
            }
          }
    ?>
    <?php 
    if(isset($_GET['page'])){
        $s="SELECT * FROM `page` WHERE `name`='".$_GET['page']."' ";
        $r=mysqli_query($connect,$s);
        $info=mysqli_fetch_assoc($r);
    }
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
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <form action='page.php?page=<?php echo $_GET['page'];?>' method='POST'>
      <div class="card">
        <div class="card-header">
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
        <textarea name="text">
        <?php echo $info['text'];?>
        </textarea>  
                <script>
                        
                        CKEDITOR.replace( 'text' );

        
                </script>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type='submit' name='save' class='btn btn-success'>Save</button>
          <a href='index.php' class='btn btn-primary'>Discard</a>
        </div>
        <!-- /.card-footer-->
      </div>
    </form>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include "footer.php";?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
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
