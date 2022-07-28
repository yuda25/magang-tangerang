<!DOCTYPE html>
<html lang="en">
<head>
    <title>AKADEMIK SISWA</title>
</head>
<body>
    <h1><center>DATA SISWA MUPAT</center></h1>
    <br>
    <center><a href="tambah.php">TAMBAH DATA SISWA</a></center>
    <br>
    <center><table border="1">
    <tr>
    <th width="24">NO</th>
    <th width="150">NAMA</th>
    <th width="27">NIS</th>
    <th width="225">ALAMAT</th>
    <th width="107">OPSI</th>
    </tr>
    <?php
    include 'koneksi.php';
    $no = 1;
    $data = mysqli_query($koneksi, "select * from siswa");
    while($d = mysqli_fetch_array($data)){
    ?>
    <tr>
    <td><?php echo $no++;?></td>
    <td><?php echo $d['nama'];?></td>
    <td><?php echo $d['nis'];?></td>
    <td><?php echo $d['alamat']?></td>
    <td>
    <a href="edit.php?id=<?php echo $d['id'];?>">EDIT</a>
    <a href="hapus.php?id=<?php echo $d['id'];?>">HAPUS</a>
    </td>
    </tr>
    <?php
    }
    ?>
    </table></center>
</body>
</html>