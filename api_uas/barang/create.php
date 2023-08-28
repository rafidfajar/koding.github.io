<?php

$connection = new mysqli("localhost","root","","latihan1");
$nama = $_POST['nama_barang'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];

$result = mysqli_query($connection, "insert into barang set nama_barang='$nama',jumlah='$jumlah',harga='$harga'");
if ($result){
    echo json_encode(['message'=>'data input successfully']);
}else{
    echo json_encode(['message'=>'data failed to input']);
}
