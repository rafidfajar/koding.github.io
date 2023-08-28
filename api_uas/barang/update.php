<?php

$connection = new mysqli("localhost","root","","latihan1");
$nama = $_POST['nama_barang'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];
$id = $_POST['id'];

$result = mysqli_query($connection, "update barang set set nama_barang='$nama',jumlah='$jumlah',harga='$harga' where id='$id'");
if ($result){
    echo json_encode(['message'=>'data edit successfully']);
}else{
    echo json_encode(['message'=>'data failed to update']);
}
?>