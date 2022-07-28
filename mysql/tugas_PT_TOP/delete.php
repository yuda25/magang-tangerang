<?php 

$id = $_GET['id'];

include('dbconnect.php');

//query hapus
$query = "DELETE FROM item WHERE id_item = '$id' ";

if (mysqli_query($conn , $query)) {
	# redirect ke index.php
	header("location:index.php");
}
else{
	echo "ERROR, data gagal dihapus". mysqli_error($conn);
}

mysqli_close($conn);
?>