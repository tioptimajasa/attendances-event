<?php include "session-user.php"; ?>
<!DOCTYPE html>
<html>
 <?php include "head-user.php" ?>
  </head>
  <body class="hold-transition skin-green-light sidebar-mini">
    <div class="wrapper">

      <?php include "header-user.php"; ?>
      <!-- Left side column. contains the logo and sidebar -->
      <?php include "menu-user.php"; ?>

<?php include "waktu-user.php"; ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Peserta Rakernas 2022
            <small>Attendances Event Apps</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index-user.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Peserta Rakernas 2022</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-12 connectedSortable">

               <!-- TO DO List -->
               <div class="box box-primary">
                <div class="box-header">
                  <i class="ion ion-clipboard"></i>
                  <h3 class="box-title">Data Peserta Rakernas 2022</h3>
                  <div class="box-tools pull-right">
                  <form action='karyawan-user.php' method="POST">
    	             <div class="input-group" style="width: 230px;">
                      <input type="text" name="qcari" class="form-control input-sm pull-right" placeholder="Cari Nama Peserta Atau Departemen">
                      <div class="input-group-btn">
                        <button type="submit" class="btn btn-sm btn-default tooltips" data-placement="bottom" data-toggle="tooltip" title="Cari Data"><i class="fa fa-search"></i></button>
                        <a href="karyawan-user.php" class="btn btn-sm btn-success tooltips" data-placement="bottom" data-toggle="tooltip" title="Refresh"><i class="fa fa-refresh"></i></a>
                      </div>
                    </div>
                    </form>
                  </div> 
                </div><!-- /.box-header -->
                
                <div class="box-body">
                <!-- <form action='materi-event.php' method="POST">
          
	       <input type='text' class="form-control" style="margin-bottom: 4px;" name='qcari' placeholder='Cari berdasarkan User ID dan Username' required /> 
           <input type='submit' value='Cari Data' class="btn btn-sm btn-primary" /> <a href='materi-event.php' class="btn btn-sm btn-success" >Refresh</i></a>
          	</div>
            </form>-->
                  <?php
                    $query1="select * from karyawan";
                    
                    if(isset($_POST['qcari'])){
	               $qcari=$_POST['qcari'];
	               $query1="SELECT * FROM  karyawan 
	               where nama like '%$qcari%'
	               or departemen like '%$qcari%'  ";
                    }
                    $tampil=mysqli_query($koneksi, $query1) or die(mysqli_error());
                    ?>
                  <table id="example" class="table table-responsive table-hover table-bordered">
                  <thead>
                      <tr>
                        <th><center>No </center></th>
                        <th><center>NIK </center></th>
                        <th><center>Nama </center></th>
                        <th><center>Jabatan</center></th>
                        <!-- <th><center>Tools</center></th> -->
                      </tr>
                  </thead>
                     <?php 
                     $no=0;
                     while($data=mysqli_fetch_array($tampil))
                    { $no++; ?>
                    <tbody>
                    <tr>
                    <td><center><?php echo $no; ?></center></td>
                    <td><center><?php echo $data['nik'];?></center></td>
                    <td><center><?php echo $data['nama'];?></center></td>
                    <td><center><?php echo $data['departemen'];?></center></td>
                   
                    <!--<td><center><img src="<?php //echo $data['gambar']; ?>" class="img-circle" height="80" width="75" style="border: 3px solid #888;" /></center></td>-->
                    <!-- <td><center><div id="thanks"><a class="btn btn-sm btn-primary" data-placement="bottom" data-toggle="tooltip" title="Edit Materi Event" href="edit-materi-event.php?hal=edit&kd=<?php echo $data['materi_id'];?>"><span class="glyphicon glyphicon-edit"></span></a>  
                        <a onclick="return confirm ('Yakin hapus <?php echo $data['fullname'];?>.?');" class="btn btn-sm btn-danger tooltips" data-placement="bottom" data-toggle="tooltip" title="Hapus Materi Event" href="hapus-materi-event.php?hal=hapus&kd=<?php echo $data['mater_id'];?>"><span class="glyphicon glyphicon-trash"></a></center></td></tr></div> -->
                 <?php   
              } 
              ?>
	 
					 
    </tbody>
  </table>  
                </div><!-- /.box-body -->
                <div class="box-footer clearfix no-border">
                  <!-- <a href="input-karyawan.php" class="btn btn-sm btn-default pull-right"><i class="fa fa-plus"></i> Tambah Karyawan</a> -->
                  </div>
              </div><!-- /.box -->

            </section><!-- /.Left col -->
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php include "../admin/footer.php"; ?>

      <?php include "../admin/sidecontrol.php"; ?>
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
	  <!--<script type="text/javascript"> 

            $(function () {
                $("#lookup").dataTable({"lengthMenu":[25,50,75,100],"pageLength":25});
            });
  
   
        </script>-->

 <!-- <script>
        $(document).ready(function() {
				var dataTable = $('#lookup').DataTable( {
					"processing": true,
					"serverSide": true,
					"ajax":{
						url :"..user/ajax-data-karyawan-user.php", // json datasource
						type: "post",  // method  , by default get
						error: function(){  // error handling
							$(".lookup-error").html("");
							$("#lookup").append('<tbody class="employee-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
							$("#lookup_processing").css("display","none");
							
						}
					}
				} );
			} );
        </script> -->
  </body>
</html>
