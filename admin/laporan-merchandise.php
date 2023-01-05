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
            Laporan merchandise
            <small>Attendances Event Apps</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index-admin.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Laporan merchandise</li>
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
                  <h3 class="box-title">Laporan Pengambilan Merchandise</h3>
                  <div class="box-tools pull-right">
                  
                  </div> 
                </div><!-- /.box-header -->
            
                <div class="box-body">
                <div class="col-lg-12">
              <form action='laporan-merchandise.php' method="POST">
            <div class="col-lg-3">
           <input type='text'  class="input-group date form-control" data-date="" data-date-format="yyyy-mm-dd" style="margin-bottom: 4px;" name='tglawal' placeholder='Cari dari tanggal' autocomplete="off" required />  </div> <div class="col-lg-3"> <input type='text' class="input-group date form-control" data-date="" data-date-format="yyyy-mm-dd" style="margin-bottom: 4px;" name='tglakhir' placeholder='Sampai Tanggal' autocomplete="off" required /> </div>
           <input type='submit' value='Cari Data' class="btn btn-sm btn-primary" /> <a href='laporan-invoice.php' class="btn btn-sm btn-success" > Refresh</a>
           </form>
          	</div><br />
                 <div class="print-area table-responsif" id="print-area-2">
                
                    <?php
                    /** $query1="select transaksi.*, member.* FROM  transaksi, member 
	               where transaksi.id_member=member.id_member";**/
                    
                   if(isset($_POST['tglawal']) && isset($_POST['tglakhir'])){
	               $tglawal=$_POST['tglawal'];
                   $tglakhir=$_POST['tglakhir'];
	               $query1="SELECT merchandise.*, karyawan.* FROM  merchandise, karyawan 
	               where merchandise.nik=karyawan.nik AND(merchandise.tanggal between '$tglawal'
	               and '$tglakhir')";
                   
                    $tampil=mysqli_query($koneksi, $query1) or die(mysqli_error());
                    ?>
                  <table style="margin-top: 20px; border-top: 1px solid black; border-bottom: 1px solid black; border-left: 1px solid black; border-right: 1px solid black;" id="example" class="table table-bordered">
                  <thead>
                      <tr style="border: 1px solid black">
                        <th style="border: 1px solid black">Nik</th>
                        <th style="border: 1px solid black">Nama</th>
                        <th style="border: 1px solid black">Tanggal</th>
                        <th style="border: 1px solid black">Event</th>
                        <th style="border: 1px solid black">Status</th>
                      </tr>
                  </thead>
                     <?php 
                     //$no=0;
                     while($data=mysqli_fetch_array($tampil))
                    { //$no++;
                     ?>
                    <tbody>
                    <tr style="border: 1px solid black">
                    <td style="border: 1px solid black"><?php echo $data['nik']; ?></td>
                    <td style="border: 1px solid black"><?php echo $data['nama']; ?></td>
                    <td style="border: 1px solid black"><?php echo $data['tanggal']; ?></td>
                    <td style="border: 1px solid black"><?php echo $data['event']; ?></td>
                    <td style="border: 1px solid black"><?php echo $data['status']; ?></td>
                    </tr>
                    <!-- <td><center><div id="thanks"><a class="btn btn-sm btn-warning" data-placement="bottom" data-toggle="tooltip" title="Cetak Gaji" href="cetak-per-perusahaan.php?hal=edit&kd=<?php //echo $data['no_lhv'];?>"><span class="glyphicon glyphicon-print"></span></a></td></div> -->
                    
                 <?php   
              }
              } else { echo '<br/>'; 
                echo '<div class="alert alert-warning alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Silahkan pilih tanggal laporan yang diinginkan!</div>';}
              
              ?>
              
              
                   </tbody>
                   </table>
  </div>
   <iframe id="printing-frame" name="print_frame" src="about:blank" style="display:none;"></iframe>
   
    <div class="text-right">
                  <?php if(isset($_POST['tglawal']) && isset($_POST['tglakhir'])){ ?>
                  <a href="cetak-merchandise.php?kd=<?php echo $_POST['tglawal'];?>&&kode=<?php echo $_POST['tglakhir'];?>" target="_blank" class="btn btn-sm btn-info">Export PDF  <i class="fa fa-download"></i></a>
                  <a href="javascript:printDiv('print-area-2');" class="btn btn-sm btn-danger" >Cetak  <i class="fa fa-print"></i></a>
                  <?php } ?>
                  
                </div><br />
        
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
