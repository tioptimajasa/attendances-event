<?php
/* Database connection start */
include "koneksi.php";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());

/* Database connection end */

// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;


$columns = array( 
// datatable column index  => database column name
    0 => 'tanggal',
    1 => 'waktu',
	2 => 'nik',
	3 => 'nama',
	4 => 'event',
	5 => 'status'
);

// getting total number records without any search
$sql = "SELECT uang_saku.no, uang_saku.tanggal, uang_saku.waktu, uang_saku.nik, uang_saku.event, uang_saku.status, karyawan.nik, karyawan.nama";
$sql.=" FROM uang_saku, karyawan WHERE uang_saku.nik=karyawan.nik";
$query=mysqli_query($conn, $sql) or die("ajax-data-uangSaku.php: get uang_saku");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


if( !empty($requestData['search']['value']) ) {
	// if there is a search parameter
	$sql = "SELECT uang_saku.no, uang_saku.tanggal, uang_saku.waktu, uang_saku.nik, uang_saku.event, uang_saku.status, karyawan.nik, karyawan.nama";
	$sql.=" FROM uang_saku, karyawan ";
	$sql.=" WHERE uang_saku.nik=karyawan.nik ";    // $requestData['search']['value'] contains search parameter
	$sql.=" AND karyawan.nama LIKE '".$requestData['search']['value']."%' ";
	$query=mysqli_query($conn, $sql) or die("ajax-data-uangSaku.php: get uang_saku");
	$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result without limit in the query 

	$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   "; // $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc , $requestData['start'] contains start row number ,$requestData['length'] contains limit length.
	$query=mysqli_query($conn, $sql) or die("ajax-data-uangSaku.php: get uang_saku"); // again run query with limit
	
} else {	

	$sql = "SELECT uang_saku.no, uang_saku.tanggal, uang_saku.waktu, uang_saku.nik, uang_saku.event, uang_saku.status, karyawan.nik, karyawan.nama";
	$sql.=" FROM uang_saku, karyawan WHERE uang_saku.nik=karyawan.nik";
	$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
	$query=mysqli_query($conn, $sql) or die("ajax-data-uangSaku.php: get uang_saku");   
	
}

$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 

	$nestedData[] = $row["tanggal"];
	$nestedData[] = $row["waktu"];
    $nestedData[] = $row["nik"];
	$nestedData[] = $row["nama"];
    $nestedData[] = $row["event"];
    $nestedData[] = $row["status"];
    // $nestedData[] = '<td><center>
    // <a href="data-hadiah.php?aksi=delete&id='.$row['no'].'"  data-toggle="tooltip" title="Delete" onclick="return confirm(\'Anda yakin akan menghapus data '.$row['nama'].'?\')" class="btn btn-sm btn-danger"> <i class="glyphicon glyphicon-trash"> </i> </a>
    // </center></td>';		
    $nestedData[] = '<td><center>
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
