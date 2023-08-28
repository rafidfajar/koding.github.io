<?php
session_start();
if(isset($_POST ['tombol'])){
    $username = $_POST['nama'];
    $pass = $_POST['pw'];
  
    if($username =='admin' && $pass =='123'){
        $_SESSION['username'] = $username;
       echo "<script>alert('Selamat Anda berhasil Login' );window.location=('dashboard.php')</script>";

    }else {
        echo "<script>alert('Maaf Anda Gagal Login' );window.location=('login.php')</script>";
    }
}
include ('koneksi.php');    
$koneksi =new database();

$action = $_GET['action'];
if($action =="add")
{
    
    $koneksi->tambah_data($_POST['nama'],$_POST['nik'],$_POST['alamat'],$_POST['username'],$_POST['pw']);

    header('location:bukarekening.php');

}    
elseif($action=="update")
{
    $koneksi->update_data($_POST['nama_barang'],$_POST['stok'],$_POST['harga_beli'],$_POST['harga_jual'],$_POST['id_barang']);
    header('location:datanasabah.php');
}
elseif($action=="delete")
{
    $id_nasabah=$_GET['id'];
    $koneksi->delete_data($id_nasabah);
    header('location:datanasabah.php');
}
elseif($action=="hapus")
{
    $id_user=$_GET['id'];
    $koneksi->hapus_data($id_user);
    header('location:user.php');
}

?>
