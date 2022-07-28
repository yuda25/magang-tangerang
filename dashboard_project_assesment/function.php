<?php

function inputData($input=[' ']) {
    require 'connection.php';
    $sql = 'INSERT INTO toko(nama,asal,harga) VALUES(?,?,?)';

    $result=$db->prepare($sql);
    $result->bindValue(1, $input['nama'],PDO::PARAM_STR);
    $result->bindValue(2, $input['asal'], PDO::PARAM_STR);
    $result->bindValue(3, $input['harga'], PDO::PARAM_STR);
    $result->execute();
}

function deleteData($delete) {
    require 'connection.php';
    $sql = 'DELETE FROM toko WHERE id = ?';

    $result=$db->prepare($sql);
    $result->bindValue(1, $delete['id'], PDO::PARAM_INT);
    $result->execute();
}

function updateData($nama,$asal,$harga,$id)
{
    require 'connection.php';

    $sql = "UPDATE toko set nama=?, asal=?, harga=? where id=?";

    $result=$db->prepare($sql);
    $result->bindValue(1, $nama, PDO::PARAM_STR);
    $result->bindValue(2, $asal, PDO::PARAM_STR);
    $result->bindValue(3, $harga, PDO::PARAM_STR);
    $result->bindValue(4, $id, PDO::PARAM_INT);
    $result->execute();
}
?>