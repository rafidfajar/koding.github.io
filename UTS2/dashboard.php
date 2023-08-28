<?php

session_start();
if (!isset($_SESSION['username'])){
    echo "<script>alert('Maaf anda harus Login terlebih dahulu' );window.location=('login.php')</script>";
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
       <span class="tooltip">user</span>
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
      <div class="text"><i class='bx bx-grid-alt mr-2'></i>Halaman Utama</div>
      <div class="row">
        <div class="container">
      <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="foto/fotoo2.jpg" alt="" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="foto/fotoo1.jpg" alt="" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="foto/fotoo3.jpg" alt="" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>
</div>
<hr>
<div class="container">

      <div class="row text-white text-center justify-content-center">
        
			<div class="card bg-info ml-0" style="width: 18rem;">
				<div class="card-body">
					<div class="card-body-icon">
					<i class='fas fa-wallet mr-2 pt-4'></i>
					</div>
					<h5 class="card-title">Buka Rekening</h5>
					<h2>Buka</h2>
					<a href="bukarekening.php"><p class="card-text text-white">lihat detail<i class="fas fa-angle-double-right ml-2"></i></p></a>
					
				</div>
				</div>
        <br>
				<div class="card bg-warning ml-5" style="width: 18rem;">
				<div class="card-body">
					<div class="card-body-icon">
					<i class='fas fa-hand-holding-usd mr-2'></i>
					</div>
					<h5 class="card-title">Pinjaman</h5>
					<h2>Segera Pinjam</h2>
					<a href="pinjaman.php"><p class="card-text text-white">lihat detail<i class="fas fa-angle-double-right ml-2"></i></p></a>
					
				</div>
				</div>
<br>
				<div class="card bg-danger ml-5" style="width: 18rem;">
				<div class="card-body">
					<div class="card-body-icon">
					<i class='fas fa-folder-open mr-2'></i>
					</div>
					<h5 class="card-title">Kartu Debit</h5>
					<div class="display-4">4</div>
					<a href="tipekartu.php"><p class="card-text text-white">lihat detail<i class="fas fa-angle-double-right ml-2"></i></p></a>
					
				</div>
				</div>
        </div>
			</div>
  </section>
  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
   }
  }
  </script>
  <script type="text/javascript" src="edit.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
