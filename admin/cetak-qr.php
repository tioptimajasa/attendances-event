<?php 
include "session.php";
?>
<!DOCTYPE html>
<html>
<?php include "../global-templates/head.php" ?>
<?php include "../phpqrcode/qrlib.php"; ?>
  <body class="hold-transition skin-green-light sidebar-mini">
    <div class="wrapper">

      <?php include "../global-templates/header.php"; ?>
      <!-- Left side column. contains the logo and sidebar -->
      <?php include "menu.php"; ?>

<?php
$timeout = 10; // Set timeout minutes
$logout_redirect_url = "../index.php"; // Set logout URL

$timeout = $timeout * 60; // Converts minutes to seconds
if (isset($_SESSION['start_time'])) {
    $elapsed_time = time() - $_SESSION['start_time'];
    if ($elapsed_time >= $timeout) {
        session_destroy();
        echo "<script>alert('Session Anda Telah Habis!'); window.location = '$logout_redirect_url'</script>";
    }
}
$_SESSION['start_time'] = time();
?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            QR Code Absensi
            <small>Attendances Event Apps</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index-admin.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">QR Code (Cetak)</li>
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
                  <h3 class="box-title">Cetak QR Code Absensi</h3>
                  <div class="box-tools pull-right">
                  
                  </div> 
                </div><!-- /.box-header -->
            
                <div class="box-body">
              <?php
            $query = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE nik='$_GET[id]'");
            $data  = mysqli_fetch_array($query);
            ?>
            <div class="text-right">
                  <a href="javascript:printDiv('print-area-2');" class="btn btn-sm btn-danger" >Cetak  <i class="fa fa-print"></i></a>
              
                </div>
                <div class="print-area table-responsif" id="print-area-2" >
                 <section class="col-lg-4 connectedSortable">
                <table class="table table-bordered">
                        <!-- <tr>
                          <td><center><img src="../dist/img/id.png" width="100" height="100" /></center> </td>
                        <td colspan="3" height="60"><center><b>Rapat Kerja Nasional 2022<br/>
                      PT Pesonna Optima Jasa</b>
                      <p><small><b>"Reborn For Sustainable Growth"<b></small></p></center></td>
                        </tr> -->
                        <tr>
                          <td colspan="3" height="50"><center><img src="../dist/img/id.png" width="300" height="80" ></center></td>
                        </tr>
                        <!-- <tr>
                        <td colspan="3" height="50"><center><small>Rakernas PT PESONNA OPTIMA JASA Tahun 2022</small></center></td>
                        </tr> -->
                      <tr>
                      <td rowspan="3" width="100"><center><?php QRcode::png("$_GET[id]", "../png/$_GET[id].png", "L", 4, 4); ?><?php echo "<img src='../png/$_GET[id].png' /><br/>" ?></center>
                      <td width="40"><b>NIK</b></td>
                      <td width="200">: <b><?php echo $data['nik']; ?></b></td>
                      </tr>
  
                      <tr>
                      <td width="40"><b>Nama</b></td>
                      <td width="200">: <b><?php echo $data['nama']; ?></b></td>
                      </tr>

                      <tr>
                      <td width="40"><b>Jabatan</b></td>
                      <td width="250">: <b><?php echo $data['departemen']; ?></b></td>
                      </tr>

                      <tr>
                      <td Colspan="3" height="60" style="background : green; color: white;"><center><b>PESERTA </br><small>Palace Hotel - Cipanas (28-30 Maret 2022)</small></b></center></td>
                                     
                      </tr>

                      
                      </table>
                      </section>
                    
  </div>
   <iframe id="printing-frame" name="print_frame" src="about:blank" style="display:none;"></iframe>

        
                </div><!-- /.box-body -->

              </div><!-- /.box -->

            </section><!-- /.Left col -->
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php include "footer.php"; ?>

      <?php include "sidecontrol.php"; ?>
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

 <script>
        function printDiv(elementId) {
    var a = document.getElementById('print-area-2').value;
    var b = document.getElementById(elementId).innerHTML;
    window.frames["print_frame"].document.title = document.title;
    window.frames["print_frame"].document.body.innerHTML = '<style>' + a + '</style>' + b;
    window.frames["print_frame"].window.focus();
    window.frames["print_frame"].window.print();
}
        </script>
    <!-- jQuery 2.1.4 -->
    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../css/jquery-ui.min.js"></script>
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
    <script>
	//options method for call datepicker
	$(".input-group.date").datepicker({ autoclose: true, todayHighlight: true });
	
    </script>
  </body>
</html>
