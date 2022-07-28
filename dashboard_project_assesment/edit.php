<?php
include "connection.php";
include "function.php";

$toko=$db->query("select * from toko where id=".$_GET['id']);

$data_toko=$toko->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        body{
            font-family: sans-serif; 
            background-color: white;
        }
    </style>
    <link rel="shortcut icon" type="image/png" href="img/logo.png"/>
    <title>♛ʏᴜᴅᴀ ɢᴀᴍɪɴɢ sᴛᴏʀᴇ♛</title>
</head>
<body>
    <!-- EDIT -->
<div class="container">
    <div class="row">
        <div class="col">
        <form action="index.php" method="POST">
           <center><h3><b>꧁EDIT YOUR POST ITEM HERE꧂</b></h3></center>
            <div class="form-group">
                <label for="exampleInputEmail1">Brand</label>
                <input type="text" name="nama" class="form-control" value="<?php echo $data_toko[0]['nama'] ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">From City</label>
                <input type="text" name="asal" class="form-control" value="<?php echo $data_toko[0]['asal'] ?>">
            </div>
            <div class="form-group">
                <label for="harga">Price</label>
                    <small><p>Harga Harus Sesuai List</p></small>
                        <br>
                        <select id="harga" type="text" name="harga" class="form-control">
                            <option selected><?php echo $data_toko[0]['harga'] ?></option>
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
                
            <input type="hidden" name="id" value="<?php echo $data_toko[0]['id']; ?>">
            <button onclick="runPopup()" type="submit" name="ganti" class="btn btn-success">SAVE <i class="far fa-save"></i></button>
        </form>
        </div>
    </div>
</div>
<script>  
    function runPopup(){
        window.alert("ANDA BERHASIL MENGEDIT ITEM ANDA");
    };
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>