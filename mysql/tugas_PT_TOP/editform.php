<!DOCTYPE html>
<html lang="en">
<head>
	<title>Toko Buku</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="js/jquery.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<style>
		body{
          background: linear-gradient(rgb(44, 115, 247), rgb(0, 89, 255),  rgb(44, 252, 17), rgb(44, 252, 17));   
          font-family: cursive;
      }
	</style>
</head>
<body>

<?php 
$id = $_GET['id']; 

//koneksi database
include('dbconnect.php');

//query
$query = "SELECT * FROM item WHERE id_item='$id'";
$result = mysqli_query($conn, $query);

?>

<div class="container-fluid" style="padding-top: 20px; padding-bottom: 20px;">

	<h3>Update data item</h3>
	<form role="form" action="edit.php" method="get">

		<?php
		while ($row = mysqli_fetch_assoc($result)) {
		 	
		?>

		<input type="hidden" name="id_item_item" value="<?php echo $row['id_item']; ?>">

		<div class="form-group">
			<label>Merek</label>
			<input type="text" name="merek_item" class="form-control" value="<?php echo $row['merek']; ?>">			
		</div>

		<div class="form-group">
			<label>asal</label>
			<input type="text" name="asal_item" class="form-control" value="<?php echo $row['asal']; ?>">			
		</div>

		<div class="form-group">
			<label>Garansi</label>
			<input type="text" name="garansi_item" class="form-control" value="<?php echo $row['garansi']; ?>">			
		</div>

		<div class="form-group">
			<label>Harga</label>
			<input type="text" name="harga_item" class="form-control" value="<?php echo $row['harga']; ?>">			
		</div>
		<button type="submit" class="btn btn-success btn-block">Update</button>

		<?php 
		}
		mysqli_close($conn);
		?>				
	</form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html> 