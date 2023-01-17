<?php include "session.php"; ?>
<!DOCTYPE html>
<html>
  <?php include "../global-templates/head.php"; ?>
  <body class="hold-transition skin-green-light sidebar-mini">
    <div class="wrapper">

      <?php include "../global-templates/header.php"; ?>
      <!-- Left side column. contains the logo and sidebar -->
      <?php include "menu.php"; ?>

<?php include "waktu.php"; ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Karyawan
            <small>Human Resource Mangement System</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index-admin.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Edit Karyawan</li>
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
                  <h3 class="box-title">Edit Data Karyawan</h3>
                  <div class="box-tools pull-right">
                  <!-- <form action='admin.php' method="POST">
    	             <div class="input-group" style="width: 230px;">
                      <input type="text" name="qcari" class="form-control input-sm pull-right" placeholder="Cari Usename Atau Nama">
                      <div class="input-group-btn">
                        <button type="submit" class="btn btn-sm btn-default tooltips" data-placement="bottom" data-toggle="tooltip" title="Cari Data"><i class="fa fa-search"></i></button>
                        <a href="admin.php" class="btn btn-sm btn-success tooltips" data-placement="bottom" data-toggle="tooltip" title="Refresh"><i class="fa fa-refresh"></i></a>
                      </div>
                    </div>
                    </form> -->
                  </div> 
                </div><!-- /.box-header -->
                <?php
      $kd = $_GET['id'];
			$sql = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE nik='$kd'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: karyawan.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			if(isset($_POST['update'])){
				$nik        = $_POST['nik'];
        $nama       = $_POST['nama'];
        $departemen = $_POST['departemen'];
				
				$update = mysqli_query($koneksi, "UPDATE karyawan SET nama='$nama', departemen='$departemen' WHERE nik='$nik'") or die(mysqli_error());
				if($update){
          echo '<script>sweetAlert({
               title: "Berhasil!", 
               text: "Data berhasil di update!", 
               type: "success",
               timer : 2000,
               });</script>';	
        }else{
          echo '<script>sweetAlert({
               title: "Error!", 
               text: "Data gagal di input!", 
               type: "error",
               timer : 2000
               });</script>';	
        }
			}
			
			//if(isset($_GET['pesan']) == 'sukses'){
			//	echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil disimpan.</div>';
			//}
			?>
                <div class="box-body">
                <form class="form-horizontal style-form" action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
                <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">NIK</label>
                              <div class="col-sm-4">
                                  <input name="nik" type="text" id="nik" class="form-control" placeholder="NIK" value="<?php echo $row['nik']; ?>" autocomplete="off" autofocus="on" required="required" />
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Karyawan</label>
                              <div class="col-sm-4">
                            <input name="nama" type="text" id="nama" class="form-control" value="<?php echo $row['nama']; ?>" placeholder="Nama Karyawan" autocomplete="off" required />
                              
                            </div>
                          </div>
                        
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Departemen</label>
                              <div class="col-sm-4">
                              <select name="departemen" id="departemen" class="form-control select2" required>
                              <option value=""> --- Pilih Departemen --- </option>
                              <?php $dept = $row['departemen']; ?>
                             <option <?=($dept=='Administration')?'selected="selected"':''?>>Administration</option>
                             <option <?=($dept=='BISNIS OUTSOURCING')?'selected="selected"':''?>>BISNIS OUTSOURCING</option>
                             <option <?=($dept=='DIVISI BISNIS OUTSOURCING')?'selected="selected"':''?>>DIVISI BISNIS OUTSOURCING</option>
                             <option <?=($dept=='DIVISI BISNIS RENTAL')?'selected="selected"':''?>>DIVISI BISNIS RENTAL</option>
                             <option <?=($dept=='DIVISI BISNIS RENTAL & USAHA LAIN')?'selected="selected"':''?>>DIVISI BISNIS RENTAL & USAHA LAIN</option>
                             <option <?=($dept=='DIVISI KEUANGAN & T.I')?'selected="selected"':''?>>DIVISI KEUANGAN & T.I</option>
                             <option <?=($dept=='DIVISI SDM & LOGISTIK')?'selected="selected"':''?>>DIVISI SDM & LOGISTIK</option>
                             <option <?=($dept=='SPI')?'selected="selected"':''?>>SPI</option>
                             <option <?=($dept=='Sales')?'selected="selected"':''?>>Sales</option>
                             <option <?=($dept=='Lainnya')?'selected="selected"':''?>>Lainnya</option>
                              </select> 
                            </div>
                          </div>

                          
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-10">
                                  <input type="submit" name="update" value="Simpan" class="btn btn-sm btn-primary" window.location="karyawan.php" />&nbsp;
	                              <a href="karyawan.php" class="btn btn-sm btn-danger">Batal </a>
                              </div> 
                          </div>
                      </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </section><!-- /.Left col -->
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php include "../global-templates/footer.php"; ?>

      <?php include "../global-templates/sidecontrol.php"; ?>
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

   
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

    <script src="../plugins/datepicker/bootstrap-datepicker.js"></script>

    <script src="../plugins/select2/select2.full.min.js"></script>

    <script>
	//options method for call datepicker
	$(".input-group.date").datepicker({ autoclose: true, todayHighlight: true });
	
    </script>

  <script>
     $(function () {
    $(".select2").select2();
    });
    </script>
  </body>
</html>
