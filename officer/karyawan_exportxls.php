<?php
include "session.php";
// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=data-karyawan.xls");
 
																  
											//	$sql = mysqli_query($koneksi, "SELECT * FROM t_inventoryitems WHERE f_partcode='$id'");
		
			?>
	  
 
	<h3>Data karyawan</h3>
	  
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
          <th>Nik</th>
	        <th>Nama</th>
			    <th>Departemen</th>
			  </tr>
			</thead>
			<tbody>
	 	
					
		</tbody>

		</div>
    </div>
</div>
   <?php
	//query menampilkan data
	$sql = mysqli_query($koneksi, "SELECT * FROM karyawan");
	$no = 1;
	while($rowshow = mysqli_fetch_assoc($sql)){
		echo '
		<tr>
			<td>'.$no.'</td>
			<td>'.$rowshow['nik'].'</td>
			<td>'.$rowshow['nama'].'</td>
			<td>'.$rowshow['departemen'].'</td>
		</tr>
		';
		$no++;
	}			
					 ?>
  </table>   