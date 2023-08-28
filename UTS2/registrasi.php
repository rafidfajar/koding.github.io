<?php

session_start();
if (!isset($_SESSION['username'])){
    echo "<script>alert('Maaf anda harus Masuk terlebih dahulu' );window.location=('login.php')</script>";
}
?>
<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <link rel="stylesheet" href="styleee.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    </head>
<body >
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus icon'></i>
      <div class="logo_name">Bank Setia</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Search...">
         <span class="tooltip">Search</span>
      </li>
      <li>
        <a href="dashboard.php">
        <i class='bx bx-grid-alt'></i>
          <span class="links_name">Halaman Utama</span>
        </a>
         <span class="tooltip">Halaman Utama</span>
      </li>
      <li>
       <a href="bukarekening.php">
       <i class='fas fa-wallet mr-2'></i>
         <span class="links_name">Buka Rekening</span>
       </a>
       <span class="tooltip">Buka Rekening</span>
     </li>
     <li>
       <a href="pinjaman.php">
       <i class='fas fa-hand-holding-usd mr-2'></i>
         <span class="links_name">Pinjaman</span>
       </a>
       <span class="tooltip">Pinjaman</span>
     </li>
     <li>
       <a href="tipekartu.php">
       <i class="fa-solid fa-credit-card"></i>
         <span class="links_name">Tipe Kartu Debit</span>
       </a>
       <span class="tooltip">Tipe Kartu Debit</span>
     </li>
     <li>
       <a href="datanasabah.php">
       <i class="fa-solid fa-address-book"></i>
         <span class="links_name">Data Nasabah</span>
       </a>
       <span class="tooltip">Data Nasabah</span>
     </li>
     <li>
       <a href="user.php">
       <i class="fa-solid fa-address-book"></i>
         <span class="links_name">user</span>
       </a>
       <span class="tooltip">Data Nasabah</span>
     </li>
     <li class="profile">
         <div class="profile-details">
         <i class="fa-solid fa-user"></i>
           <div class="name_job">
             <div class="name"><?php echo $_SESSION['username']; ?></div>
             <div class="job">User</div>
           </div>
         </div>
         <a href="logout.php"><i class='bx bx-log-out' id="log_out" ></i></a>
     </li>
    </ul>
  </div>
  <section class="home-section">
      <div class="text"> <i class='fas fa-wallet mr-2'></i> Registrasi</div>
<div class="container"> 
         <form method="POST">
     
          <div class="row">
            <div class="col-md-6">
         
            <div class="col-md-6">
            <tr>
                <td>username : <br>
               
                <input type="text" name ="username" class="form-control" placeholder="Masukan username Anda" required>
               </td>
            </tr>
            <tr>
                <td>password : <br>
               
                <input type="password" name ="pw" class="form-control" placeholder="Masukan password Anda" required>
               </td>
            </tr>
        
            </div>
            </div>
            <tr>
            <td><br><input type="submit" class="btn btn-warning" name="tombol" style="width:100%;" value="simpan"></td>
            </tr>
<hr>
        
         </form>
         <?php 
          $koneksi=mysqli_connect("localhost","root","","nasabah");
				if(isset($_POST['tombol'])){
					$password = md5($_POST['pw']);

					$query=mysqli_query($koneksi,"INSERT INTO users VALUES (NULL,'".$_POST['username']."','".$password."')");
					if($query){
						echo "<script>alert('Data Ditambahkan')</script>";
						echo "<script>location='user.php'</script>";
					}
				}
			 ?>