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
            <h1>User Details</h1>
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
                <h3 class="card-title"><button onclick="
                this.style.display='none';
                
                window.print();
                this.style.display='table';
                " class='btn btn-primary'>Print</button></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    <div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable dtr-inline collapsed" role="grid" aria-describedby="example1_info">
                  <thead>
                  <tr role="row">
                      <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                          Name</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                          Phone</th>
                          <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                          Email</th>
                          <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                          Age</th>
                          <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                          Gender</th>
                          <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                          Date</th>
                          <th class="sorting p-hide" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                          Department</th>
                          <th class="sorting p-hide" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                           Remove</th>
                    </tr>
                  </thead>
                  <tbody>                
                  
                  <?php
                     include "dbcon.php";
                    $s="SELECT * FROM `appointment` ORDER BY `id` DESC LIMIT 200";
                    $r=mysqli_query($connect,$s);
                    while($u=mysqli_fetch_array($r)){
                        echo "
                        <form action='' method=''>
                        <tr role='row' class='odd'>
                            <td class='sorting_1 dtr-control' tabindex='0'>".$u['name']."</td>
                            <td>".$u['phone']."</td>
                            <td>".$u['email']."</td>
                            <td>".$u['age']."</td>
                            <td>".$u['gender']."</td>
                            <td>".$u['date']."</td>
                            <td>".$u['department']."</td>
                            <td class='p-hide'><button id='".$u['id']."' class='btn btn-danger delete'>Delete</button></td>
                        </tr>
                        </form>
                        ";
                    }
                  ?>
                </tbody>
                  
                </table></div>
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

<script>
    $(document).ready(function(){
     $(".delete").click(function(){
      var id= $(this).attr("id");
       $.ajax({
         url:"deleteappointment.php",
         method:"POST",
         data:{"id":id},
         success:function(del){
             alert(del);
             location.reload();
         }
       })
     })

    });


    </script>
</body>
</html>
