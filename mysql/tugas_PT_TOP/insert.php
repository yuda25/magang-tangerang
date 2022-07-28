<?php
//add dbconnect

include('dbconnect.php');

$merek = $_POST['merek_item'];
$asal = $_POST['asal_item'];
$garansi = $_POST['garansi_item'];
$harga = $_POST['harga_item'];

//query

$query =  "INSERT INTO item(merek , asal, garansi, harga) VALUES('$merek' , '$asal' , '$garansi' , '$harga')";

if (mysqli_query($conn , $query)) {
	# code redicet setelah insert ke index
	header("location:index.php");
}
else{
	echo "ERROR, tidak berhasil". mysqli_error($conn);
}

mysqli_close($conn);
?>