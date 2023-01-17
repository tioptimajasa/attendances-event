<?php include "session-officer.php"; ?>
<!DOCTYPE html>
<html>
  <?php include "../global-templates/head.php"; ?>
  <body class="hold-transition skin-green-light sidebar-mini">
    <div class="wrapper">

      <?php include "../global-templates/header.php"; ?>
      <!-- Left side column. contains the logo and sidebar -->
      <?php include "menu-officer.php"; ?>

<?php include "../global-templates/waktu-session.php"; ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Input Peserta
            <small>Attendances Event Apps</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index-admin.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Input Peserta</li>
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
                  <h3 class="box-title">Input Data Peserta</h3>
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
                if(isset($_POST['input'])){

                  $nip        = $_POST['nip'];
                  $nama       = $_POST['nama'];
                  $departemen = $_POST['departemen'];
                  $type_peserta = $_POST['type_peserta'];

                  $sql = mysqli_query($koneksi, "SELECT * FROM peserta WHERE nip='$nip'");
			            if(mysqli_num_rows($sql) == 1){
                    echo '<script>sweetAlert({
                      title: "Error!", 
                         text: "NIP sudah ada!", 
                         type: "error",
                         timer : 2000
                         });</script>';
                  
			          
			           }
                 else {
                  $query = mysqli_query($koneksi, "INSERT INTO peserta (nip, nama, departemen, type_peserta) VALUES ('$nip', '$nama', '$departemen', '$type_peserta')");
                  if ($query){
                    echo '<script>sweetAlert({
                      title: "Berhasil!", 
                         text: "Data berhasil di input!", 
                         type: "success",
                         timer : 2000
                         });</script>';	
                  } 
                  else {
                    //echo "<script>alert('Data Gagal dimasukan!'); window.location = 'departemen.php'</script>";	
                    echo '<script>sweetAlert({
                      title: "Error!", 
                         text: "Data gagal di input!", 
                         type: "error",
                         timer : 2000
                         });</script>';
                  } 
               
              }
            }
			          ?>
                <div class="box-body">
                <form class="form-horizontal style-form" action="input-peserta-officer.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">NIP</label>
                              <div class="col-sm-4">
                                  <input name="nip" type="text" id="nip" class="form-control" placeholder="NIP" autocomplete="off" autofocus="on" required="required" />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Karyawan</label>
                              <div class="col-sm-4">
                            <input name="nama" type="text" id="nama" class="form-control" placeholder="Nama Karyawan" autocomplete="off" required />
                              
                            </div>
                          </div>
                        
                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Departemen</label>
                              <div class="col-sm-4">
                                <select name="departemen" id="departemen" class="form-control select2" required>
                                  <option value=""> --- Pilih Departemen --- </option>
                                  <option value="Administration">Administration</option>
                                  <option value="BISNIS OUTSOURCING">BISNIS OUTSOURCING</option>
                                  <option value="DIVISI BISNIS OUTSOURCING">DIVISI BISNIS OUTSOURCING</option>
                                  <option value="DIVISI BISNIS RENTAL">DIVISI BISNIS RENTAL</option>
                                  <option value="DIVISI BISNIS RENTAL & USAHA LAIN">DIVISI BISNIS RENTAL & USAHA LAIN</option>
                                  <option value="DIVISI KEUANGAN & T.I">DIVISI KEUANGAN & T.I</option>
                                  <option value="DIVISI SDM & LOGISTIK">DIVISI SDM & LOGISTIK</option>
                                  <option value="SPI">SPI</option>
                                  <option value="Sales">Sales</option>
                                  <option value="Lainnya">Lainnya</option>
                                </select> 
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Type Peserta</label>
                              <div class="col-sm-4">
                                <select name="type_peserta" id="type_peserta" class="form-control select2" required>
                                  <option value=""> --- Pilih Type Peserta --- </option>
                                  <option value="panitia">Panitia</option>
                                  <!-- <option value="peserta" selected>Peserta</option> -->
                                  <option value="peserta">Peserta</option>
                                </select> 
                            </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-10">
                                  <input type="submit" name="input" value="Simpan" class="btn btn-sm btn-primary" />&nbsp;
	                              <a href="peserta-officer.php" class="btn btn-sm btn-danger">Batal </a>
                                
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
