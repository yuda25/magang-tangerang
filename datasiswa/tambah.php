<!DOCTYPE html>
<html lang="en">
<head>
    <title>TAMBAH DATA SISWA</title>
</head>
<body>
    <h2>TAMBAH DATA SISWA</h2>
    <br>
    <form method="post" action="plus.php">
    <table>
    <tr>
    <td>Nama</td>
    <td><input type="text" name="nama"></td>
    </tr>
    <tr>
    <td>NIS</td>
    <td><input type="number" name="nis"></td>
    </tr>
    <tr>
    <td>Alamat</td>
    <td><input type="text" name="alamat"></td>
    </tr>
    <tr>
        <td></td>
        <td>
            <input type="submit" value="SIMPAN"><input type="reset" value="BATAL">
        </td>
        <a href="index.php">KEMBALI</a>
    </tr>
    </table>
    </form>
</body>
</html>