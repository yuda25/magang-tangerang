<!DOCTYPE html>
<html lang="en">
<head>
    <title>EDIT DATA SISWA</title>
</head>
<body>
    <h2>EDIT DATA SISWA</h2>
    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi,"select * from siswa where id ='$id'");
    while($d = mysqli_fetch_array($data)){
        ?>
        <form action="update.php" method="post">
        <table>
        <tr>
        <td>Nama</td>
        <td>
        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
        <input type="text" name="nama" value="<?php echo $d['nama']; ?>">
        </td>
        </tr>
        <tr>
        <td>NIS</td>
        <td><input type="number" name="nis" value="<?php echo $d['nis']; ?>"></td>
        </tr>
        <tr>
        <td>Alamat</td>
        <td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
        </tr>
        <tr>
        <td></td>
        <td><input type="submit" value="SIMPAN"></td>
        </tr>
        </table>
        </form>
    <?php
    }
    ?>
</body>
</html>