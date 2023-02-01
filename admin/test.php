<!doctype html>
<html>

<head>
	<title>Menampilkan data dari database MySQL ke grafik dengan PHP dan Chart JS | www.optimajasa.co.id</title>
	<script src="../dist/Chart.bundle.js"></script>
	<script src="../dist/utils.js"></script>
	<style>
	canvas {
		-moz-user-select: none;
		-webkit-user-select: none;
		-ms-user-select: none;
	}
	</style>
</head>

<body>
	<div id="container" style="width: 75%;">
		<canvas id="canvas"></canvas>
	</div>
	<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "mahasiswa";

$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_errno()){
	echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
} 
$mi = "Manajemen Informatika";
?>	
	<script>
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
				data: [
					<?php $tampil1=mysqli_query($koneksi, "select * from  mahasiswa WHERE jurusan='Sistem Informasi'");
                     echo mysqli_num_rows($tampil1);
                    ?>,
					<?php $tampil2=mysqli_query($koneksi, "select * from  mahasiswa WHERE jurusan='Teknik Informatika'");
                     echo mysqli_num_rows($tampil2);
                    ?>,
					<?php $tampil3=mysqli_query($koneksi, "select * from  mahasiswa WHERE jurusan='Manajemen Informatika'");
                     echo mysqli_num_rows($tampil3);
                    ?>,
					<?php $tampil4=mysqli_query($koneksi, "select * from  mahasiswa WHERE jurusan='Teknik Industri'");
                     echo mysqli_num_rows($tampil4);
                    ?>,
					<?php $tampil5=mysqli_query($koneksi, "select * from  mahasiswa WHERE jurusan='Psikologi'");
                     echo mysqli_num_rows($tampil5);
                    ?>
				]
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
						text: 'Tabel Jurusan Mahasiswa | www.optimajasa.co.id'
					}
				}
			});

		};


	</script>
</body>

</html>
