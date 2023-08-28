<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <title>Gambar List</title>
 <!--load bootstrap-->
 <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>"
 rel="stylesheet">
</head>
<body>
 <div>
 <div class="container">
 <h1><center>Data Gambar</center></h1>
 <table class="table table-success">
 <thead>
 <a href="<?php echo site_url('latihan');?>" class="btn btn-danger">Home</a>&nbsp
 <a href="<?php echo site_url('Gambarku/tambah'); ?>"
 class="btn btn-warning">Tambah Gambar</a>
 <hr>
 <tr>
 <tr>
 <th scope="col-md-6">No.</th>
 <th scope="col-md-6">Gambar</th>
 <th scope="col-md-6">Deskripsi</th>
 <th scope="col-md-6">Nama File</th>
 <th scope="col-md-6">Ukuran File</th>
 <th scope="col-md-6">Tipe File</th>
 </tr>
 </thead>
 <!--Tampil Data-->
 <?php
$no=0;
if( ! empty($gambar)){ // Jika data pada database tidak sama dengan empty (aliasada datanya)
 foreach($gambar as $data){ // Lakukan looping pada variabel gambar dari controller
 $no++;
 echo "<tr>";
 echo "<td>".$no."</td>";
 echo "<td><img src='".base_url("assets/images/".$data->nama_file)."' width='100' height='100'></td>";
 echo "<td>".$data->deskripsi."</td>";
 echo "<td>".$data->nama_file."</td>";
 echo "<td>".$data->ukuran_file." kB</td>";
 echo "<td>".$data->tipe_file."</td>";
 echo "</tr>";
 }
}else{ // Jika data tidak ada
 echo "<tr><td colspan='5'>Data tidak ada</td></tr>";
}
?>
 </table>
 </div>
 </div>
 </div>
