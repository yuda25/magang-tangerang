<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <!-- jquery.js -->
    <script src="js/jquery.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
    .rounded-image{
	        width: 100px;
	        height: 100px;
	        background: #dac52c;
	        border-radius: 100%;
      }
    body{
          background: linear-gradient(rgb(44, 115, 247), rgb(0, 89, 255),  rgb(44, 252, 17), rgb(44, 252, 17));   
          font-family: cursive;
      }
    .navbar-brand{
          font-weight: bold;
          font-family: Stencil Std, fantasy;
          font-size: 25px;
          margin-top: 60px;
      }
      .copyright{
        margin-left: 40%;
      }
      #NAV{
        background: linear-gradient(to right, orange, #ec38bc, #7303c0, cyan);
      }
    </style>
</head>
<body>
<?php
	//tambahkan dbconnect
	include('dbconnect.php');
	//query
	$query = "SELECT * FROM item";
	$result = mysqli_query($conn , $query);
	?>
<!-- _________________________NAV BAR________________________________ -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top scrolling-navbar" id="NAV">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#on">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#form">Add</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#list">List</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#about">AboutUs</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#footer">Contact</a>
      </li>
    </ul>
  </div>
</nav>  

<nav class="navbar navbar-dark id="on">
  <a class="navbar-brand" href="#on">
    <img src="image/logo.png" width="40" height="40" class="d-inline-block align-top" alt="logo" loading="lazy">
    <b><i>YUDA GAMING STORE</i></b>
  </a>
</nav>
<!-- ___________________________CAROUSEL____________________________ -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/carousel1.jpg" class="d-block w-100" alt="satu">
    </div>
    <div class="carousel-item">
      <img src="image/carousel2.jpg" class="d-block w-100" alt="dua">
    </div>
    <div class="carousel-item">
      <img src="image/carousel3.jpg" class="d-block w-100" alt="tiga">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- _______________________________CARD TITLE__________________________________ -->
<div class="container mt-5">
    <div class="row">
        <div class="col-4">
        <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Pengiriman</h5>
    <p class="card-text">Kami melakukan pengiriman barang dengan secepat mungkin, batas maksimal 3h++ maka uang akan di kemblikan.</p>
    <i class="fas fa-car"></i>
</div>
</div>
        </div>
        <div class="col-4">
        <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Kualitas</h5>
    <p class="card-text">Barang yang di jual dapat di pastikan barang yang dijual awet, tahan lama dan ber kualitas.</p>
    <br>
    <i class="fas fa-medal"></i>
</div>
</div>
        </div>
        <di class="col-4">
        <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Keamanan</h5>
    <p class="card-text">Kami pastikan barang yang di jual di sini adalah barang yang ori.</p>
    <br>
    <br>
    <i class="fas fa-lock"></i>
  </div>
</div>
        </di>
    </div>
</div>
<!-- __________________________________________FORM_____________________________________ -->
<div class="container">
    <div class="row mt-5">
        <div class="col-12" id="form">
                <h3>Add item</h3>
                <p>Pastikan barang yang anda jual sesuai dengan ketentuan di atas.</p>
				<form role="form" action="insert.php" method="post">
					<div class="form-group">
						<label>Merek</label>
						<input type="text" name="merek_item" class="form-control">
					</div>
					<div class="form-group">
						<label>Asal barang</label>
						<input type="text" name="asal_item" class="form-control">
					</div>
					<div class="form-group">
						<label>Garansi</label>
						<input type="text" name="garansi_item" class="form-control">
					</div>
					<div class="form-group">
						<label>Harga Barang</label>
						<input type="text" name="harga_item" class="form-control">
					</div>
					<button type="submit" class="btn btn-info btn-block">Tambah barang</button>					
                </form>
        </div>

<div class="col-12">
				<h3 id="list">Tabel Daftar item</h3>
				<table class="table table-striped table-hover dtabel"> 
				<!-- table table-striped table-hover dtabel -->
					 <!-- table table-bordered -->
					<thead>
						<tr>
							<th>No</th>
							<th>Merek</th>
							<th>Asal Barang</th>
							<th>garansi</th>
							<th>Harga</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody> 
						
						<?php
							$no = 1;  
							while ($row = mysqli_fetch_assoc($result)) {
								//mysqli_fetch_assoc = Ambil baris hasil sebagai array asosiatif
						?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $row['merek']; ?></td>
							<td><?php echo $row['asal']; ?></td>
							<td><?php echo $row['garansi']; ?></td>
							<td><?php echo $row['harga']; ?></td>
							<td>
								<a href="editform.php?id=<?php echo $row['id_item'];?>" class="btn btn-success" role="button"><i class="fas fa-edit"></i></a>
								<a href="delete.php?id=<?php echo $row['id_item']?>" class="btn btn-danger" role="button"><i class="fas fa-trash-alt"></i></a>
							</td>
            </tr>

						<?php
							}
							mysqli_close($conn); 
							// Menutup koneksi database yang dibuka sebelumnya = mysqli_close
						?>
					</tbody>
				</table>
      </div>
      <div class="col-12">
        <!-- _________________________________________ABOUT US_________________________________________ -->
<center><b><h1 id="about">~the best gaming store~</h1></b></center>
    <p>Yuda Gaming Store is a gaming store located in Tangerang, Green Lake City, CMD M-59 which was founded by Pro Gamers in Indonesia,
     We improve ourselves in answering your gaming needs. Our store supplies leading Gaming equipment from various countries that have been 
     proven in the world of gamers. Our mission is very simple, to propose the gaming industry in Indonesia by providing the best gaming 
     equipment. We not only sell goods, we understand what we sell, we review gaming goods that end with our community, we are able to provide 
     your gaming gear services too, and of course we provide the best after-sales service, especially in after-sales issues and all guarantees 
     are only to answer your gaming gear needs, ask your colleagues who already live in their Yuda Gaming Shop, they must have experienced our 
     best after sales.</p>
     <br>
     <br>
    <i>translate</i>
    <p>Yuda Gaming Store adalah toko gaming yang berlokasi di Tangerang , Green Lake City, CMD M-59 yang didirikan Oleh Pro Gamers di indonesia ,
    Kita mendedikasikan diri kita dalam menjawab Kebutuhan Gaming anda . Toko kami di supplies dengan Gaming equipment terkemuka dari berbagai
    negara yang telah terbukti di dunia gamers . Misi kita sangat sederhana , memajukan Industri gaming di indonesia dengan cara memberikan 
    gaming gear yang terbaik . Kita tidak hanya bisa menjual barang , kita mengerti apa yang kami jual , kami meng review barang gaming yang
    beredar sendiri dengan komunitas kami , kami mampu mengservice gaming gear anda juga , dan tentunya kita memberikan Service purna jual
    yang terbaik terutama dalam masalah after sales dan garansi semuanya hanya untuk menjawab kebutuhan Gaming Gear anda , bertanyalah 
    kepada rekan anda yang sudah berbelanja di Yuda Gaming Shop mereka pastilah mereka sudah merasakan after sales terbaik kami .</p>
    <center><img class="rounded-image" src="image/saya.jpg" /></center>
    <center><b>Kusuma Yuda Mubarok</b></center>
    <center><i>yuda gaming shop</i></center>
      </div>        
      </div>
    </div>
</div>
<!-- saya buat container baro karena agar style nya bagus -->
<div class="container-fluid">
  <div class="row">
    <div class="col">
    <section id="footer">
        <div class="row mt-5 bg-dark text-white">
            <div class="col-sm-4">
                <h2 class="display-5 text-center">Location</h2>
                <!-- maaf tulisannya CBD M-58 karena yang 59 nggak ada -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d897.3922526401655!2d106.69901252917656!3d-6.183870166418676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f9d8f9215f27%3A0x7a320b90434606f8!2sCBD%20M58%20GLC!5e1!3m2!1sid!2sid!4v1603421107289!5m2!1sid!2sid" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="col-sm-4 text-center">
                <h2 class="display-5 text-center">Contact</h2>
                <i class="fab fa-whatsapp" style=" font-size:2rem;"></i>
            <a href="https://wa.me/628980249767" class="text-white text-decoration-none btn btn-outline-light align-top mt-0 ml-1">08980249787</a>
            </div>
            <div class="col-sm-4 text-center">
                <h2 class="display-5 text-center">Sosial media</h2>
                <i class="fab fa-facebook-f" style="font-size:2rem;"></i>
            <a href="https://web.facebook.com/kusuma.yuda.750/" class="text-white text-decoration-none btn btn-outline-light align-top mt-0 ml-1">Kusuma Yuda</a>
            <br>
            <i class="fab fa-instagram mt-3" style="font-size:2rem;"></i>
            <a href="https://www.instagram.com/yuda_kusuma_25" class="text-white text-decoration-none btn btn-outline-light align-top mt-3 ml-1">yuda_kusuma_25</a>
            </div>
            <p class="copyright">&copy; copyright:2k20 Kusuma Yuda Mubarok.<br>
                                        SMK MUHAMMADIYAH 04 SUKOREJO.</p>
        </div>
    </section>
    </div>
  </div>
</div>


    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <!-- agar dtabel=jadi ada fareasinya -->
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready(function() {
        $('.dtabel').DataTable();
      } );
    </script>
</body>
</html>