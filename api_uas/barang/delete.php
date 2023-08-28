<?php

$connection = new mysqli("localhost","root","","latihan1");

$id = $_POST['id'];

$result = mysqli_query($connection, "delete from barang where id=".$id);
if ($result){
    echo json_encode(['message'=>'data delete successfully']);
}else{
    echo json_encode(['message'=>'data failed to delete']);
}
?>