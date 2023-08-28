<?php
$connection = new mysqli("localhost","root","","latihan1");
$query = "SELECT * FROM barang WHERE id=".$_GET['id'];
$result = mysqli_query($connection, $query);



if (mysqli_num_rows($result) > 0) {
    // Data ditemukan
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($data);
} else {
    // Data tidak ditemukan
    echo json_encode(['message' => 'Data tidak ditemukan']);
}
