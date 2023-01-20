<html>
<head>
<title>Attendances Event Apps | PT. Pesonna Optima Jasa</title>
<meta name="author" content="RDS"/>

<link rel="stylesheet" type="text/css" href="../dist/dataTables.bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="../dist/css/bootstrap.min.css"/>

<script src="../dist/sweetalert-dev.js"></script>
<!-- <script type="text/javascript" src="../static-module/instascan-master/instascan.min.js"></script> -->
<script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>

<!-- <script type="text/javascript" src="https://schmich.github.io/instascan/"></script> -->
<!-- <script type="text/javascript" src="../static-module/instascan-1.0.0/instascan.min.js"></script> -->
    <link rel="stylesheet" href="../dist/sweetalert.css">

</head>
<body>
<?php
include "../conn.php";
            $query_event = mysqli_query($koneksi, "SELECT * FROM event WHERE id='1'");
            $data_event  = mysqli_fetch_array($query_event);
            $event = $data_event['nama_event'];
            $tgl = $data_event['tanggal'];
            // $query_karyawan = mysqli_query($koneksi, "SELECT * FROM karyawan");
            // $data_karyawan = mysqli_fetch_array($query_karyawan);
            $query_peserta = mysqli_query($koneksi, "SELECT * FROM peserta");
            $data_peserta = mysqli_fetch_array($query_peserta);
            // $nikT = $data_karyawan['nik'];
            $nipT = $data_peserta['nip'];
            $tgl_awal_raker = ("2023-01-20");
            $tgl_akhir_raker = ("2023-01-24");
            ?>
    <h3><center>DAFTAR HADIR PESERTA</center></h3>
<h3><center><?php echo $data_event['nama_event']; ?>, <?php echo $data_event['tanggal']; ?> </center> </h3>
<h3><center><?php echo $data_event['lokasi']; ?></center></h3>

<div class="col-lg-12" style="margin-top: 40px;">
<?php
			date_default_timezone_set('Asia/Jakarta');
            
			if(isset($_POST['kode'])){
        $query_kehadiran = mysqli_query($koneksi, "SELECT * FROM kehadiran");
        $data_kehadiran = mysqli_fetch_array($query_kehadiran);
        $tgl2 = date("Y-m-d");
				//$sql = mysqli_query($koneksi, "SELECT * FROM kehadiran WHERE nik='$_POST[kode]' AND event='$event' ");
    
    $sql = mysqli_query($koneksi, "SELECT * FROM peserta WHERE nip='$_POST[kode]'");
			  if(mysqli_num_rows($sql) == 1){

    $sql = mysqli_query($koneksi, "SELECT * FROM kehadiran WHERE nik='$_POST[kode]' AND event='$event' AND tanggal='$tgl2' ") Or die (mysqli_error($koneksi));
			if(mysqli_num_rows($sql) == 0){
				
				$kode = $_POST['kode'];
				  $acara= $event;
		          $status = "Hadir";
		          $tanggal = date("Y-m-d");
              $waktu = date("H:i:s");
				
                                  
				$insert = mysqli_query($koneksi, "INSERT INTO kehadiran (nik, tanggal, waktu, event, status) VALUES ('$kode', '$tanggal', '$waktu', '$acara', '$status')") or die (mysqli_error($koneksi));
				if($insert){
					echo '<script>sweetAlert({
	                                                   title: "SUCCESS", 
                                                        text: "Terimakasih sudah hadir di Event Rakernas PT PESONNA OPTIMA JASA Tahun 2023", 
                                                        type: "success",
														timer : 4000
                                                        });</script>';
                }else{
					echo '<script>sweetAlert({
	                                                   title: "Gagal!", 
                                                        text: "Anda sudah terdaftar absen", 
                                                        type: "error",
														timer : 2000
                                                        });</script>';
                    }
				
                    
			}else{
				  echo '<script>sweetAlert({
	                                                   title: "INFORMATION", 
                                                        text: "Anda sudah terdaftar absen!", 
                                                        type: "info",
														timer : 2000
                                                        });</script>';
				}

      }else{
        echo '<script>sweetAlert({
                                                   title: "FAILED", 
                                                      text: "Mohon maaf Anda tidak terdaftar sebagai peserta Rakernas PT PESONNA OPTIMA JASA Tahun 2023", 
                                                      type: "warning",
                          timer : 4000
                                                      });</script>';
      }
			
   }
			
			?>

           
                <center>
            <video id="preview" autoplay="autoplay" class="active"
     style="transform: scaleX(-1);"></video> 
</center>
           
            
            <form method="POST" id="scan" name="update" action="absensi.php">
<center><input style="width:500px; height:75px; font-size: 25px;" name="kode" id="text2" class="form-control" placeholder="Scan QR Code" onchange="this.form.submit();" autofocus="on" autocomplete="off" required="required"/></center>
<!-- <right><input type="text" name="text" id="text" readonly="" class="form-control> </right> -->
</form>
</div>
<div class="col-lg-12" style="margin-top: 40px;">
<a href="hadir.php" class="btn btn-md btn-danger" style="margin-bottom : 5px;"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a> <a href="absensi_exportxls.php" class="btn btn-md btn-success" style="margin-bottom : 5px;"> <span class="glyphicon glyphicon-file"></span> Export Excel</a>
<?php
  //  $query1="select kehadiran.*, karyawan.* from kehadiran, karyawan where kehadiran.nik=karyawan.nik AND kehadiran.status='Hadir' AND kehadiran.event='$event' AND kehadiran.tanggal BETWEEN '$tgl_awal_raker' AND '$tgl_akhir_raker' ORDER BY kehadiran.nik ASC";
   $query1="select kehadiran.*, peserta.* from kehadiran, peserta where kehadiran.nik=peserta.nip AND kehadiran.status='Hadir' AND kehadiran.event='$event' AND kehadiran.tanggal BETWEEN '$tgl_awal_raker' AND '$tgl_akhir_raker' ORDER BY kehadiran.nik ASC";
                    $tampil=mysqli_query($koneksi, $query1) or die(mysqli_error());
                    ?>
                  <table id="example" class="table table-hover table-bordered">
                  <thead>
                      <tr>
                        <th><center>No <i class="fa fa-sort"></i></center></th>
                        <th><center>Tanggal <i class="fa fa-sort"></i></center></th>
                        <th><center>Jam <i class="fa fa-sort"></i></center></th>
                        <th><center>NIP <i class="fa fa-sort"></i></center></th>
						            <th><center>Nama <i class="fa fa-sort"></i></center></th>
                        <th><center>Event <i class="fa fa-sort"></i></center></th>
                        <th><center>Status<i class="fa fa-sort"></i></center></th>
                      </tr>
                  </thead>
                     <?php 
                     $no=0;
                     while($data=mysqli_fetch_array($tampil))
                    { $no++; ?>
                    <tbody>
                    <tr>
                    <td><center><?php echo $no; ?></center></td>
                    <td><?php echo $data['tanggal'];?></td>
                    <td><?php echo $data['waktu'];?></td>
                    <td><?php echo $data['nik'];?></td>
					          <td><?php echo $data['nama'];?></td>
                    <td><?php echo $data['event'];?></td>
                     <td><?php echo $data['status'];?></td>
                    </tr>
                 <?php   
              } 
              ?>
                   </tbody>
                   </table>  
  </div>
  <!-- <center><a href="total.php" class="btn btn-sm btn-warning"><span class="glyphicon glyphicon-list"></span> Kehadiran</a> <a href="index.php" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-chevron-left"></span> Kembali</a></center> -->
  
  <!-- Javascript Libs -->
            <!-- <script type="text/javascript" src="../dist/jquery-2.1.1.js"></script> -->
            <script type="text/javascript" src="../dist/jquery-3.3.1.js"></script>
            <script type="text/javascript" src="../dist/jquery.dataTables.min.js"></script>
            <script type="text/javascript" src="../dist/dataTables.bootstrap.min.js"></script>
            <script type="text/javascript" src="../dist/js/bootstrap.min.js"></script>
            
            
            <script>
        $(document).ready(function() {
				var dataTable = $('#lookup').DataTable( {
					"processing": true,
					"serverSide": true,
					"ajax":{
						url :"ajax-grid-data.php", // json datasource
						type: "post",  // method  , by default get
						error: function(){  // error handling
							$(".lookup-error").html("");
							$("#lookup").append('<tbody class="employee-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
							$("#lookup_processing").css("display","none");
							
						}
					}
				} );
			} );
        </script>


<script type="text/javascript">

//Scan OK
     let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
      scanner.addListener('scan', function (content) {
        console.log(content);
      });
      Instascan.Camera.getCameras().then(function (cameras) {
        if (cameras.length > 0) {
          scanner.start(cameras[0]);
        } else {
          console.error('No cameras found.');
        }
      }).catch(function (e) {
        console.error(e);
      });

      // scan QR Code Part
      scanner.addListener('scan', function(c){
          document.getElementById("text2").value=c;
          $( "#scan" ).trigger( "submit" ); //post automatis from id form
      });

//.Scan OK


    //   // Tes Auto Enter
    //   document.addEventListener('keypress', function(c) {
    //         // `e` is the event
    //     });

    



      
    </script>

<style>
#preview{
   width:500px;
   height: 500px;
   margin:0px auto;
}
</style>

</body>
</html>