<?php 
$tahun = date('Y');
?>
<?php include "session-officer.php"; ?>
<!DOCTYPE html>
<html>
  <?php include "../global-templates/head.php"; ?>
  <body class="hold-transition skin-green-light sidebar-mini">
    <div class="wrapper">

      <?php include "../global-templates/header.php"; ?>
      <!-- Left side column. contains the logo and sidebar -->
      <?php include "menu-officer.php"; ?>

      <?php
      $tgl_awal_raker = ("2022-03-28");
      $tgl_akhir_raker = ("2022-03-31");
      ?>

<?php include "../global-templates/waktu-session.php"; ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard TES OFFICER
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
           <?php $tampil=mysqli_query($koneksi, "select * from peserta order by nip desc");
                        $total=mysqli_num_rows($tampil);
                    ?>
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php echo $total; ?></h3>
                  <p>Peserta</p>
                </div>
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <a href="peserta-list-officer.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            
            
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-blue">
                <div class="inner">
                  <h3>5 Days<!--<sup style="font-size: 20px">%</sup>--></h3>
                  <p>Rundown & Tata Tertib</p>
                </div>
                <div class="icon">
                  <i class="fa fa-calendar"></i>
                </div>
                <a href="rundown-day-tatib.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            
            <?php $tampil2=mysqli_query($koneksi, "select kehadiran.*, peserta.* from kehadiran, peserta where kehadiran.nik=peserta.nip AND kehadiran.status='Hadir' AND kehadiran.tanggal BETWEEN '$tgl_awal_raker' AND '$tgl_akhir_raker' ");
                        $total2=mysqli_num_rows($tampil2);
                    ?>
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?php echo $total2; ?></h3>
                  <p>Kehadiran Peserta</p>
                </div>
                <div class="icon">
                  <i class="fa fa-users"></i>
                </div>
                <a href="hadir.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            
            <?php $tampil3=mysqli_query($koneksi, "select * from materi_event order by materi_id");
                        $total3=mysqli_num_rows($tampil3);
                    ?>
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?php echo $total3; ?></h3>
                  <p>Materi</p>
                </div>
                <div class="icon">
                  <i class="fa fa-spin fa-refresh"></i>
                </div>
                <a href="materi-event.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            
            
          </div><!-- /.row -->
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-6 connectedSortable">
              <!-- Custom tabs (Charts with tabs)-->
                <!-- TO DO List -->
              <div class="box box-primary">
                <div class="box-header">
                  <i class="ion ion-clipboard"></i>
                  <h3 class="box-title">Daftar Peserta Rakernas <?php echo"$tahun" ?> </h3>
                  <div class="box-tools pull-right">
                  </div> 
                </div><!-- /.box-header -->
                 
                <div class="scroller box-body">
                
                  <?php
                    $query1="select * from peserta";
                    $tampil=mysqli_query($koneksi, $query1) or die(mysqli_error());
                    ?>
                  <table id="example" class="table table-responsive table-hover table-bordered">
                  <thead>
                    <tr>
                      <th colspan="3"><center>Data Pegawai</center></th>
                      <th colspan="2"><center>Kamar</center></th>
                    </tr>
                      <tr>
                        <th><center>NIP </center></th>
                        <th><center>Nama</center></th>
                        <th><center>Jabatan</center></th>
                        <th><center>Type</center></th>
                        <th><center>Nomor</center></th>
                      </tr>
                  </thead>
                     <?php 
                     //$no=0;
                     while($data=mysqli_fetch_array($tampil))
                    { //$no++; ?>
                    <tbody>
                    <tr>
                    <td><center><?php echo $data['nip'];?></center></td>
                    <td><center><?php echo $data['nama'];?></center></td>
                    <td><center><?php echo $data['jabatan'];?> </center></td>
                    <td><center><?php echo $data['type_kamar'];?> </center></td>
                    <td><center><?php echo $data['no_kamar'];?> </center></td>
                    </tr></div>
                 <?php   
              } 
              ?>
                   </tbody>
                   </table>
                </div>
              </div><!-- /.box -->

            </section><!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-6 connectedSortable">
            <!-- //Absen Kehadiran -->
            <div class="box box-primary">
                <div class="box-header">
                  <i class="ion ion-clipboard"></i>
                  <h3 class="box-title">Daftar Kehadiran Peserta Rakernas <?php echo"$tahun" ?></h3>
                  <div class="box-tools pull-right">
                  </div> 
                </div><!-- /.box-header -->
                &nbsp;&nbsp;&nbsp;Tanggal : <?php echo date("d-m-Y") ?>
                 
                <div class="scroller box-body">
                  <?php
                    $query1="select kehadiran.*, peserta.* from kehadiran, peserta where kehadiran.nik=peserta.nip AND kehadiran.status='Hadir' AND kehadiran.tanggal BETWEEN '$tgl_awal_raker' AND '$tgl_akhir_raker' ORDER BY tanggal DESC, waktu DESC ";
                    $tampil=mysqli_query($koneksi, $query1) or die(mysqli_error());
                    ?>
                  <table id="example" class="table table-responsive table-hover table-bordered">
                  <thead>
                      <tr>
                        <th><center>NIP </center></th>
                        <th><center>Nama </center></th>
                        <th><center>Tanggal</center></th>
                        <th><center>Jam</center></th>
                        <th><center>Status </center></th>
                      </tr>
                  </thead>
                     <?php 
                     //$no=0;
                     while($data=mysqli_fetch_array($tampil))
                    { //$no++; ?>
                    <tbody>
                    <tr>
                    <td><center><?php echo $data['nik'];?></center></td>
                    <td><center><?php echo $data['nama'];?></center></td>
                    <td><center><?php echo $data['tanggal'];?></center></td>
                    <td><center><?php echo $data['waktu'];?> </center></td>
                    <td><center><?php echo $data['status'];?> </center></td>
                    </tr></div>
                 <?php   
              } 
              ?>
                   </tbody>
                   </table>
                </div>
              </div><!-- /.box -->
            <!-- .//Absen Kehadiran -->
              

             
            
              

              

              

            </section><!-- right col -->
          </div><!-- /.row (main row) -->

          <!-- Image Slider -->
          <!-- <php include "carousel-img.php"; ?> -->
          <!-- Image Slider on Global -->
          <!-- <php include "../global-data/carousel/carousel-img.php"; ?> -->
          <?php include "carousel-img-2023.php"; ?>

        </section><!-- /.content -->
        
      </div><!-- /.content-wrapper -->
      <?php include "../global-templates/footer.php"; ?>

      <?php include "../global-templates/sidecontrol.php"; ?>
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->
   
    <!-- <script>
		var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
		var color = Chart.helpers.color;
		var barChartData = {
			labels: ['Sistem Informasi', 'Teknik Informatika', 'Manajemen Informatika', 'Teknik Industri', 'Psikologi'],
			datasets: [{
				label: 'Mahasiswa',
				backgroundColor: [color(window.chartColors.red).alpha(0.5).rgbString(),
								  color(window.chartColors.blue).alpha(0.5).rgbString(),
								  color(window.chartColors.yellow).alpha(0.5).rgbString(),
								  color(window.chartColors.blue).alpha(0.5).rgbString(),
								  color(window.chartColors.default).alpha(0.5).rgbString()],
				borderColor: [window.chartColors.red,
							  window.chartColors.blue,
							  window.chartColors.yellow,
							  window.chartColors.blue,
							  window.chartColors.default],

				borderWidth: 3,
				data: [11,20,30,30,15]
			}]

		};

		window.onload = function() {
			var ctx = document.getElementById('canvas').getContext('2d');
			window.myBar = new Chart(ctx, {
				type: 'bar',
				data: barChartData,
				options: {
					responsive: true,
					legend: {
						position: 'top',
					},
					title: {
						display: true,
						text: 'Tabel Jurusan Mahasiswa | #'
					}
				}
			});

		};


	</script> -->


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
    
    <!--<script src="../plugins/chartjs/chart.js"></script>-->
    
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>
  </body>
</html>
