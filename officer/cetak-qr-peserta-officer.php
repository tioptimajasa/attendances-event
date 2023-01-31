<?php 
include "session-officer.php";
?>
<!DOCTYPE html>
<html>
<?php include "../global-templates/head.php" ?>
<?php include "../phpqrcode/qrlib.php"; ?>
  <body class="hold-transition skin-green-light sidebar-mini">
    <div class="wrapper">

      <?php include "../global-templates/header.php"; ?>
      <!-- Left side column. contains the logo and sidebar -->
      <?php include "menu-officer.php"; ?>

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
            QR Code
            <small>Attendances Event Apps</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index-officer.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
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
                  <h3 class="box-title">Cetak QR Code</h3>
                  <div class="box-tools pull-right">
                  
                  </div> 
                </div><!-- /.box-header -->
            
                <div class="box-body">
          
          <!-- === Query QR source = id = NIP === -->
          <?php
            $query = mysqli_query($koneksi, "SELECT * FROM peserta WHERE nip='$_GET[id]' ");
            $data  = mysqli_fetch_array($query);
          ?>
            <div class="text-right">
                  <a href="javascript:printDiv('print-area-2');" class="btn btn-sm btn-danger" >Cetak  <i class="fa fa-print"></i></a>
              
                </div>
                <div class="print-area table-responsif" id="print-area-2" >
                 <section class="col-lg-4 connectedSortable">
                <!-- <table class="table table-bordered" width="360px" height="500px" style="border:1px green solid; background-image:url('../dist/img/background-id-card-rakernas-2023-size A6-01-2.png');"> -->
                <table class="table table-bordered" width="360px" height="500px" style="border:4px solid transparent; background-image:url('../dist/img/background-id-card-rakernas-2023-size A6-01-2.png'); border-image:linear-gradient(30deg, #008E39, #183C6B); border-image-slice:1; border-radius: 10px;">
                        <!-- <tr>
                          <td><center><img src="../dist/img/id.png" width="100" height="100" /></center> </td>
                        <td colspan="3" height="60"><center><b>Rapat Kerja Nasional 2022<br/>
                      PT Pesonna Optima Jasa</b>
                      <p><small><b>"Reborn For Sustainable Growth"<b></small></p></center></td>
                        </tr> -->
                        <tr>
                          <td colspan="4" height="8%"><center><img src="../dist/img/id.png" width="65%" height="65%" ></center></td>
                        </tr>
                        <!-- <tr>
                        <td colspan="3" height="50"><center><small>Rakernas PT PESONNA OPTIMA JASA Tahun 2022</small></center></td>
                        </tr> -->
                      <tr height="1%">
                      <!-- <td rowspan="3" width="100"><center><php QRcode::png("$_GET[id]", "../png/$_GET[id].png", "L", 4, 4); ?><php echo "<img src='../png/$_GET[id].png'  /><br/>" ?></center> -->
                      <!-- <td rowspan="3" width="100"><center> FOTO<br/> <php echo "<img src='../peserta/foto_peserta/$_GET[foto].png' /><br/>" ?> </center> -->
                      <!-- <td rowspan="3" width="100"><center> FOTO<br/> <img src="<?php echo $data['foto'] ?>" width="100" height="100" /><br/> </center> -->
                      <!-- <td rowspan="4" width="100" align="center"><center> <img src="<?php echo $data['foto'] ?>" style='padding:1px; border:thin solid transparent; border-image:linear-gradient(30deg, #FF1200, #FCFF00, #36FF00, #0000FF, #E29000, #0CFFEB); border-image-slice:1; box-shadow:0 25px 25px rgba(0,0,0,.2);' width="100" height="100" /> </center> -->
                      <!-- <td rowspan="4" width="100" align="center"><center> <img src="<?php echo $data['foto'] ?>" style=' border:3px solid ; border-image:linear-gradient(30deg, #008E39, #183C6B); border-image-slice:1; box-shadow:0 25px 25px rgba(0,0,0,.2); border-radius: 10px;' width="100" height="100" /> </center> -->
                      <!-- <td rowspan="4" width="100" align="center"><center> <img src="<?php echo $data['foto'] ?>" style=' border: 3px solid #008E39 ; border-radius: 10px; ' width="90" height="120" /> </center> -->
                      <!-- <td rowspan="4" width="100" align="center"><center> <img src="<?php echo $data['foto'] ?>" style=' border: 3px solid transparent ; border-radius: 10px; border-image:linear-gradient(30deg, #008E39, #183C6B); border-image-slice:1; box-shadow:1 25px 25px rgba(0,0,0,.2); ' width="90" height="120" /> </center> -->
                      <td rowspan="4" width="100" align="center"><center> <img src="<?php echo $data['foto'] ?>" style=' border: 3px solid transparent ; border-radius: 10px;' width="90" height="120" /> </center>
                      <td width="35"><b>Nama</b></td>
                      <td width="1%">:</td>
                      <td width="200"> <b><?php echo $data['nama']; ?></b></td>
                      </tr>
  
                      <tr height="1%">
                      <td width="35"><b>NIP</b></td>
                      <td width="1%">:</td>
                      <td width="200"> <b><?php echo $data['nip']; ?></b></td>
                      </tr>

                      <tr height="3%">
                      <td width="35"><b>Jabatan</b></td>
                      <td width="1%">:</td>
                      <td width="200"> <b><?php echo $data['jabatan']; ?></b></td>
                      </tr>

                      <tr height="3%">
                      <td width="35"><b>Unit Kerja</b></td>
                      <td width="1%">:</td>
                      <td width="250"> <b><?php echo $data['unit_kerja']; ?></b></td>
                      </tr>

                      <tr>
                        <!-- <td colspan="3" height="50"><center>TES</center></td> -->
                        <td colspan="4" height="30%" align:"center"> <center> <?php QRcode::png("$_GET[id]", "../png/$_GET[id].png", "L", 4, 4); ?> <?php echo "<img src='../png/$_GET[id].png' width='180' height='180' />" ?> </center></td>
                      </tr>

                      <tr>
                      <!-- <td Colspan="3" height="60" style="background : green; color: white;"><center><b>PESERTA TES </br><small>Palace Hotel - Cipanas (28-30 Maret 2022)</small></b></center></td> -->
                      <!-- <td Colspan="3" height="60" style="background : green; color: white;"><center><b> <php echo $data['type_peserta']; ?> </br><small>Palace Hotel - Cipanas (28-30 Maret 2022)</small></b></center></td> -->
                      <!-- <td Colspan="4" height="12%" style="background : green; color: white; font-size:20px;"><center><b> <php echo $data['type_peserta']; ?> </b></center></td> -->
                      <td Colspan="4" height="12%" style="font-size:20px;"><center><b> <?php echo $data['type_peserta']; ?> </b></center></td>
                      </tr>

                      <tr>
                      <!-- <td Colspan="4" height="8%" style="background : green; color: white;"><center><b> <small>Hotel - Semarang <br/> 7-9 Februari 2023</small></b></center></td>              -->
                      <td Colspan="2" height="5%" ><center><i class="glyphicon glyphicon-map-marker"> </i><b> <small>Hotel Santika Premiere<br/>Semarang, Jawa Tengah</small></b></center></td>             
                      <td Colspan="2" height="5%" ><center><i class="glyphicon glyphicon-calendar"> </i><b> <small>6-10 Februari 2023</small></b></center></td>             
                      </tr>

                      <tr>
                      <td Colspan="4" height="30%"></td>             
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
      <?php include "../global-templates/footer.php"; ?>

      <?php include "../global-templates/sidecontrol.php"; ?>
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
