<?php include "access.php";?>
<!DOCTYPE html>
<html lang="en">
    

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
  <div class="content-wrapper" style="min-height: 1200.88px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Photo Gallery</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Users</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                 <button class='btn btn-primary upload' >Add New</button></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    <div class="col-sm-12">
                                      <div class='data'></div>               
  <div class="modal popup" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add a new Photo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="upload">

      
      <div class="modal-body">
        <div class="form-group">
          <input type="file" accept=".jpg,.png,.jpeg,.gif,.bmp" class="form-control" name="photo">

          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save changes</button>
          </form>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
                  
               
              </div>
            </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
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
   <script>
     $(document).ready(function(){
      $('.upload').click(function(){
      $('.popup').modal("show");

      });

        $('#upload').submit(function(e){
          e.preventDefault();
          $.ajax({
            url:"upload.php",
            method:"POST",
            data:new FormData(this),
            contentType:false,
            processData:false,
            success:function(data){
              loadData();
              $('.popup').modal("hide");
            }

          })
        })  
        loadData();
        function loadData(){
          $.ajax({
            url:"galleries.php",
            method:"POST",
            success:function(output){

              $('.data').html(output);
            }
             

          })
        }
          
          });

     </script>
</html>

