<?php include "data.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Document</title>
<link rel="stylesheet" href="asset/css/bootstrap.min.css">
<link rel="stylesheet" href="asset/css/all.css">
</head>
<body>

<div class="container-fluid">
  <div class="row">
    <div class="col-12">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
  
  <?php $nomor=0; foreach($data_slider as $key): ?>
  <div class="carousel-item <?php if($nomor==0){echo "active"; } ?>">
  <img src=<?php echo $key; ?> class="d-block w-100" alt="logo-<?php echo $nomor; ?>">
  </div>

  <?php $nomor++; endforeach; ?>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hiden="true"></span>
  <span class="sr-only">previous</span>

  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hiden="true"></span>
  <span class="sr-only">next</span>
  </a>
    </div>
    </div>
  </div>
</div>









<div class="container">

  <div class="row">

    <?php foreach($data_siswa as $key=>$value): ?>

      <div class="col-3">
          <div class="card vh-100" style="width: 18rem;">
          <img src="asset/image/evos.jpg" class="card-img-top" alt="evos">

          <div class="card-body d-flex flex-column ">
            <h5 class="card-title "><?php echo $value[0];?></h5>
            <p class="card-text">EVOS Esports adalah organisasi esports yang didirikan oleh Ivan Yeo pada Agustus 2016, kini EVOS Esports menjadi salah satu tim esport terbesar yang ada di Indonesia. Dengan perolehan prestasi hingga kancah internasional di berbagai divisi, tanpa terkecuali untuk divisi Free Fire, </p>
            <div class="h-100 d-flex align-items-end">
            <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>

          </div>
      </div>

    <?php endforeach; ?>
          
  </div>

</div>








<!-- <script src="asset/js/jquery-3.5.1.slim.min.js"></script> -->
<script src="asset/js/jquery-3.5.1.full.js"></script>
<script src="asset/js/popper.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>
<script src="asset/js/data.js"></script>
</body>
</html>