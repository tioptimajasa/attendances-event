<?php
$namafolder="../peserta/foto_peserta/"; //tempat menyimpan file
/* Database connection start */
include "../global-templates/koneksi.php";
/* Database connection end */


// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;


$columns = array( 
// datatable column index  => database column name
	0 => 'sequence',
	1 => 'nip',
    2 => 'nama', 
	3 => 'jabatan',
	4 => 'type_kamar',
	5 => 'no_kamar',
	
);

// getting total number records without any search
$sql = "SELECT sequence, nip, nama, jabatan, type_kamar, no_kamar";
$sql.=" FROM peserta";
$query=mysqli_query($conn, $sql) or die("ajaxin-grid-data.php: get Peserta");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


if( !empty($requestData['search']['value']) ) {
	// if there is a search parameter
	$sql = "SELECT sequence, nip, nama, jabatan, type_kamar, no_kamar";
	$sql.=" FROM peserta";
	$sql.=" WHERE sequence LIKE '".$requestData['search']['value']."%' ";    // $requestData['search']['value'] contains search parameter
	$sql.=" OR nip LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR nama LIKE '".$requestData['search']['value']."%' ";
    $sql.=" OR jabatan LIKE '".$requestData['search']['value']."%' ";
    $sql.=" OR type_kamar LIKE '".$requestData['search']['value']."%' ";
    $sql.=" OR no_kamar LIKE '".$requestData['search']['value']."%' ";
	$query=mysqli_query($conn, $sql) or die("ajax-grid-data.php: get Peserta");
	$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result without limit in the query 

	$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   "; // $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc , $requestData['start'] contains start row number ,$requestData['length'] contains limit length.
	$query=mysqli_query($conn, $sql) or die("ajaxin-grid-data.php: get Peserta"); // again run query with limit
	
} else {	

	$sql = "SELECT sequence, nip, nama, jabatan, type_kamar, no_kamar";
	$sql.=" FROM peserta";
	$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
	$query=mysqli_query($conn, $sql) or die("ajaxin-grid-data.php: get Peserta");   
	
}

$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 

	$nestedData[] = $row["nip"];
    $nestedData[] = $row["nama"];
	$nestedData[] = $row["jabatan"];
	$nestedData[] = $row["type_kamar"];
	$nestedData[] = $row["no_kamar"];
	// $nestedData[] = '<td><center>
	//                  <a href="cetak-qr.php?id='.$row['nip'].'"  data-toggle="tooltip" title="Cetak Kartu" class="btn btn-sm btn-success"> <i class="glyphicon glyphicon-print"></i> </a>
    //                  <a href="edit-karyawan.php?id='.$row['nip'].'"  data-toggle="tooltip" title="Edit" class="btn btn-sm btn-primary"> <i class="glyphicon glyphicon-edit"></i> </a>
	// 			     <a href="karyawan.php?aksi=delete&id='.$row['nip'].'"  data-toggle="tooltip" title="Delete" onclick="return confirm(\'Anda yakin akan menghapus data '.$row['nama'].'?\')" class="btn btn-sm btn-danger"> <i class="glyphicon glyphicon-trash"> </i> </a>
	//                  </center></td>';	
	
	//// Function Edit=False, Delete=False
	// $nestedData[] = '<td><center>
	//                  <a href="cetak-qr.php?id='.$row['nip'].'"  data-toggle="tooltip" title="Cetak Kartu" class="btn btn-sm btn-success"> <i class="glyphicon glyphicon-print"></i> </a>
    //                  <a href="#"  data-toggle="tooltip" title="Edit" onclick="return confirm(\'Silahkan hubungi tim TI-POJ \')" class="btn btn-sm btn-primary"> <i class="glyphicon glyphicon-edit"></i> </a>
	// 			     <a href="#"  data-toggle="tooltip" title="Delete" onclick="return confirm(\'Silahkan hubungi tim TI-POJ \')" class="btn btn-sm btn-danger"> <i class="glyphicon glyphicon-trash"> </i> </a>
	//                  </center></td>';		
	
	//// Function for level Officer Edit=True, Delete=False
	$nestedData[] = '<td><center>
	                 <a href="cetak-qr-peserta-officer.php?id='.$row['nip'].'"  data-toggle="tooltip" title="Cetak Kartu" class="btn btn-sm btn-success"> <i class="glyphicon glyphicon-print"></i> </a>
                     <a href="edit-peserta-officer.php?id='.$row['nip'].'"  data-toggle="tooltip" title="Edit" class="btn btn-sm btn-primary"> <i class="glyphicon glyphicon-edit"></i> </a>
                     <a href="detail-peserta-officer.php?id='.$row['nip'].'"  data-toggle="tooltip" title="Detail" class="btn btn-sm btn-info"> <i class="glyphicon glyphicon-info-sign"></i> </a>
				     <a href="#"  data-toggle="tooltip" title="Delete" onclick="return confirm(\'Silahkan hubungi tim TI-POJ \')" class="btn btn-sm btn-danger"> <i class="glyphicon glyphicon-trash"> </i> </a>
	                 </center></td>';		
	
	$data[] = $nestedData;
    
}



$json_data = array(
			"draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
			"recordsTotal"    => intval( $totalData ),  // total number of records
			"recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
			"data"            => $data   // total data array
			);

echo json_encode($json_data);  // send data as json format

?>
