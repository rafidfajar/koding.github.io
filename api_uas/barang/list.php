<?php

$connection = new mysqli("localhost","root","","latihan1");
$data = mysqli_query($connection, "select * from barang");
$data = mysqli_fetch_all($data, MYSQLI_ASSOC);

echo json_encode($data);
