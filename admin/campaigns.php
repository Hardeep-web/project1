<?php 
session_start();
include('config.php');
include('include/header.php'); 
?>
<style>
.table-img{
    max-height:100px;
    max-width:110px;
} 
.btn {
    margin: 10px 0px 10px;
}
a {
    color: #fff;
}
    
</style>
<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>List Table</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Campaigns</li>
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
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"> Current Campaigns List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Added On</th>
                    <th> By</th>
                    <th>Actions</th>

                  </tr>
                  </thead>
                  <tbody>
                <?php
                $query = "SELECT * FROM `tb_camp`";
                $result = mysqli_query($con,$query);
                while($row = $result->fetch_assoc())
                {
                ?>
                  <tr>
                    <td><img class="table-img" src="../uploads/<?php echo $row['camp_photo']; ?>"></td>
                    <td><?php echo $row['camp_name']; ?></td>
                    <td><?php echo $row['camp_desc']; ?></td>
                    <td> <?php echo $row['camp_date']; ?></td>
                    <td><?php 
                                $user_d = $row['camp_by'];
                                $querys = "SELECT * FROM `tb_register` WHERE id = $user_d"; 
                                $resulted = mysqli_query($con,$querys);
                                 while($raws = $resulted->fetch_array()) { 
                                 echo $raws['first_name'];  echo $raws['last_name']; 
                                 } ?>
                    </td>
                    <td><?php if($row['camp_status'] == 'inactive') { ?><button class="btn btn-primary"><a href="approve.php?id=<?php echo $row['camp_id']; ?>">Activate</a></button> <?php } elseif($row['camp_status'] == 'active') { ?> <button class="btn btn-warning"><a href="dismiss.php?id=<?php echo $row['camp_id']; ?>">Inactivate</a></button><?php } ?></td>
                  </tr>
                <?php 
                }
                ?>
                 
                   
                  </tbody>
                 
                </table>
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



<?php include('include/footer.php'); ?>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>