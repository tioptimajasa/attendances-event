<?php 
include "session.php";
?>
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
            Event
            <small>Barcode Absensi</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index-admin.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Event</li>
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
                  <h3 class="box-title">Pengaturan Event</h3>
                </div><!-- /.box-header -->
                <?php
            $query = mysqli_query($koneksi, "SELECT * FROM event WHERE id='$_GET[kd]'");
            $data  = mysqli_fetch_array($query);
            ?>
                <div class="box-body">
                <?php
               if(isset($_POST['update'])){

$user_id       = $_POST['user_id'];
$nama_event    = $_POST['nama_event'];
$tanggal       = $_POST['tanggal'];
$lokasi        = $_POST['lokasi'];

$query = mysqli_query($koneksi, "UPDATE event SET nama_event='$nama_event', tanggal='$tanggal', lokasi='$lokasi' WHERE id='$user_id'")or die(mysql_error());
if ($query){
    echo '<script>sweetAlert({
        title: "Berhasil!", 
        text: "Event berhasil di set!", 
        type: "success",
        timer : 2000
        });</script>';

} else {
    echo '<script>sweetAlert({
        title: "Gagal!", 
        text: "Event gagal di set!", 
        type: "error",
        timer : 2000
        });</script>';
    }
}
?>
                  <div class="form-panel">
                      <form class="form-horizontal style-form" action="" method="post" name="form1" id="form1">
                          
                                  <input name="user_id" type="hidden" id="user_id" class="form-control" value="<?php echo $data['id'];?>" readonly="readonly" autofocus="on" />
                              
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Event</label>
                              <div class="col-sm-10">
                                  <input name="nama_event" type="text" id="nama_event" class="form-control" value="<?php echo $data['nama_event'];?>" required />
                                  <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Waktu Event</label>
                              <div class="col-sm-10">
                                  <input name="tanggal" type="text" id="tanggal" class="form-control" value="<?php echo $data['tanggal'];?>" required />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Lokasi</label>
                              <div class="col-sm-10">
                                  <input name="lokasi" class="form-control" id="lokasi" type="text" value="<?php echo $data['lokasi'];?>" required />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-10">
                                  <input type="submit" value="Simpan Data" name="update"  class="btn btn-sm btn-primary"/>&nbsp;
	                              <a href="event.php" class="btn btn-sm btn-danger">Batal </a>
                              </div>
                          </div>
                      </form>
                  </div>
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

    <!-- jQuery 2.1.4 -->
    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="../plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="../plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="../plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="../plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
  </body>
</html>
