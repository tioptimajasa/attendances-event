<?php
include "session-officer.php";
//include "conn.php";
// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
// $hari = date("Y-m-d H:i:s");
$hari = date("d-m-Y");
header("Content-Disposition: attachment; filename=merchandise-event-$hari.xls");
 
																  
		
			?>
	  
 
	<h3>Absensi Communication Gathering</h3>
	  
	<!-- <table>
	
			<tr>
			 <td width="0px">Plant :</td>  <td><?php //echo $plantname ?></td> 
			 <td width="0px">From : <?php //echo date("d-m-Y",strtotime($_GET['date1'])) ?></td>  
			 <td width="0px">Until : <?php //echo date("d-m-Y",strtotime($_GET['date2'])) ?></td> 
			 
		 </tr>
	</table>-->	
    <table>
	
			<tr>
			
			 <td width="0px">Tanggal : <?php echo date("d-m-Y") ?></td>  
			 
			 
		 </tr>
	</table>	
		 
		<table bordered="1">  
			<thead bgcolor="eeeeee" align="center">
			<tr bgcolor="eeeeee" >
               <th>No</th>
               <th>NIP</th>
	           <th>Nama</th>
			   <th>Tanggal</th>
               <th>Event</th>
			   <th>Status</th>
			  </tr>
			</thead>
			<tbody>
	 	
					
		</tbody>

		</div>
    </div>
</div>
   <?php
	//query menampilkan data
	         $query_event = mysqli_query($koneksi, "SELECT * FROM event WHERE id='1'");
            $data_event  = mysqli_fetch_array($query_event);
            $event = $data_event['nama_event'];

	$sql = mysqli_query($koneksi, "select merchandise.*, karyawan.* from merchandise, karyawan where merchandise.nik=karyawan.nik AND merchandise.event='$event' ORDER BY merchandise.nik ASC");
	$no = 1;
	while($rowshow = mysqli_fetch_assoc($sql)){
		echo '
		<tr>
			<td>'.$no.'</td>
			<td>'.$rowshow['nik'].'</td>
			<td>'.$rowshow['nama'].'</td>
			<td>'.$rowshow['tanggal'].'</td>
			<td>'.$rowshow['event'].'</td>
			<td>'.$rowshow['status'].'</td>
		</tr>
		';
		$no++;
	}
	
						
					 ?>
  </table>   