<?php
include('dbconnect.php');

$id = $_GET['id_item_item'];
$merek = $_GET['merek_item'];
$asal = $_GET['asal_item'];
$garansi = $_GET['garansi_item'];
$harga = $_GET['harga_item'];

//query update
$query = "UPDATE item SET merek='$merek' , asal='$asal' , garansi='$garansi' , harga='$harga' WHERE id_item='$id' ";

if (mysqli_query($conn, $query)) {
	# credirect ke page index
	header("location:index.php");
	
}
else{
	echo "ERROR, data gagal diupdate". mysqli_error($conn);
}

mysqli_close($conn);
?>