<?php
include "connection.php";
include "function.php";

if(isset($_POST['submit'])){

    inputData($_POST);
    header('location:index.php');
}

if(isset($_GET['delete'])){
    deleteData($_GET);
    header('location:index.php');
}

if(isset($_POST['ganti'])){
    updateData($_POST['nama'],$_POST['asal'],$_POST['harga'],$_POST['id']);
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"
            integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw=="
            crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        .rounded-image{
	        width: 100px;
	        height: 100px;
	        background: #dac52c;
	        border-radius: 100%;
        }
        body{
            font-family: sans-serif; 
            background-color: white;
        }
        .navbar{
            color: black;
        }
        #NAV{
            background: gray;
            font-weight: bold;
            font-family: fantasy;
            font-size: 19px;
            margin-top: 0px;
            height: 60px;
        }
        .copyright{
            margin-left: 40%;
        } 
        .card{
            background-image: url('img/bacground.jpg');
            margin-left: 25px;
            margin-top: 30px;
        }
    </style>
    <link rel="shortcut icon" type="image/png" href="img/logo.png"/>
    <title>Dashboard Project Assessment</title>
</head>
<body>
<!-- NAV BAR -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top scrolling-navbar" id="NAV">
<nav class="navbar navbar-dark">
    <p class="navbar">
        <img src="img/logo.png" width="40" height="40" class="d-inline-block align-top" alt="logo" loading="lazy">
        <b style="color: black;"><i>YUDA GAMING STORE</i></b>
    </p>
</nav>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">HOME<span class="sr-only">(current)</span></a>
            </li>
                <li class="nav-item">
            <a class="nav-link" href="#bar">GRAFIK</a>
            </li>
                <li class="nav-item">
            <a class="nav-link" href="#add">ADD</a>
            </li>
                <li class="nav-item">
                <a class="nav-link" href="#list">LIST</a>
            </li>
                <li class="nav-item">
                <a class="nav-link" href="#about">ABOUT</a>
            </li>
        </ul>
    </div>
</nav>

<!-- CARD -->
<div class="container mt-5">
    <div class="row">
        <div class="col-12 mt-4">
        <center><b><h3>GRAFIK PENJUALAN</h3></b></center>
        <canvas id="bar"></canvas>
        </div>
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

<!-- FORM -->
<div class="container">
    <div class="row mt-5">
        <div class="col">
            <form action="index.php" method="POST">
                <div class="form-group">
                    <h3 id="add"><b>ADD YOUR ITEM</b></h3>
                    <label>Brand</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="form-group">

                    <label for="daerah">From Area</label>
                        <br>
                        <select id="daerah" type="text" name="asal" class="form-control">
                          <option >Jawa</option>
                          <option >Sulawesi</option>
                          <option >Kalimantan</option>
                          <option >Sulawesi</option>
                          <option >Maluku</option>
                          <option >Papua</option>
                          <option >Bali</option>
                          <option >Lombok</option>
                        </select>
                </div>
                <div class="form-group">

                <label for="harga">Price</label>
                    <small><p>Harga Harus Sesuai List</p></small>
                        <br>
                        <select id="harga" type="text" name="harga" class="form-control">
                            <option selected>select your preferred price</option>
                            <option>100000</option>
                            <option>200000</option>
                            <option>300000</option>
                            <option>400000</option>
                            <option>500000</option>
                            <option>600000</option>
                            <option>700000</option>
                            <option>800000</option>
                            <option>900000</option>
                            <option>1000000</option>
                            <option>1500000</option>
                            <option>2000000</option>
                            <option>2500000</option>
                            <option>3000000</option>
                            <option>3500000</option>
                            <option>4000000</option>
                            <option>4500000</option>
                            <option>5000000</option>
                            <option>5500000</option>
                            <option>6000000</option>
                            <option>6500000</option>
                            <option>7000000</option>
                            <option>7500000</option>
                            <option>8000000</option>
                            <option>8500000</option>
                            <option>9000000</option>
                            <option>9500000</option>
                            <option>10000000</option>
                        </select>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Add  <i class="far fa-plus-square"></i></button>
            </form>
        </div>
    </div>
</div>

<!-- tabel -->
<div class="container"> 
    <div class="row mt-5">
        <div class="col" id="list">
            <h3><b>LIST ITEM</b></h3>
            <table border="1" class="table table-striped table-hover dtabel">
                <thead class="thead-dark">
                    <tr>
                        <th>Brand</th>
                        <th>From City</th>
                        <th>Price</th>
                        <th>option</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data_toko as $key):?>
                    <tr>
                        <td><?php echo $key["nama"]; ?></td>
                        <td><?php echo $key["asal"]; ?></td>
                        <td><?php echo $key["harga"]; ?></td>
                        <td><a onclick="runPopup()" class="btn btn-danger" href="index.php?delete=&id=<?php echo $key['id'];?>">DELETE  <i class="far fa-trash-alt"></i></a>
                        <a class="btn btn-success" href="edit.php?id=<?php echo $key['id'];?>">EDIT  <i class="far fa-edit"></i></a> </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- ABOUT US -->
<div class="container">
    <div class="row">
        <div class="col-12">
            <center><b><h1 id="about">♕the best gaming store♕</h1></b></center>
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
            <center><img class="rounded-image" src="img/saya.jpg" /></center>
            <center><b>⫷Kusuma Yuda Mubarok⫸</b></center>
            <center><i>yuda gaming shop✅</i></center>
        </div>
    </div>
</div>

<!-- FOOTER -->
<p class="copyright">&copy; copyright:2020 Kusuma Yuda Mubarok</p>
<!-- Optional JavaScript; choose one of the two! -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<!-- agar dtabel=jadi ada fareasinya -->
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
<!-- jquary -->
<script>
    // search
    $(document).ready(function() {
    $('.dtabel').DataTable();
    } );

    // pop up
    function runPopup(){
    window.alert("ANDA BERHASIL MENGHAPUS");
    };

    // chart
    var ctx = document.getElementById ("bar").getContext("2d")



            var myChart = new Chart(ctx,{
                type: 'bar',
                data: {
                    labels: [<?php foreach($data_toko as $key) { echo '"'.$key['asal'].'",';}; ?>],
                    datasets : [{
                        label: '# of Price',
                        data: [<?php foreach($data_toko as $harga) { echo '"'.$harga['harga'].'",';}; ?>],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    legend: {
                        position: 'left',
                    }
                }
            })
</script>
</body>
</html>