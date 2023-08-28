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
     <link rel="stylesheet" href="assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- animate css -->
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
      <div class="text"><i class='fas fa-folder-open mr-2'></i>Tipe Kartu</div>
    
<div class="container">
       
      <form method="POST">
      <table class="table" >
      <div class="form-group">
                    <label for="exampleFormControlSelect1">Pilih Kartu</label>
                    <select class="form-control" id="pilih" name="pilih">
                      <option>Kartu Debit Blue</option>
                      <option>Kartu Debit Gold</option>
                      <option>Kartu Debit Platinum</option>
                      <option>Kartu Debit Black</option>
                      
                    </select>
                  </div>
                  <tr>
            <td><button type="submit" class="btn btn-warning" name="input" style="width:100%;">Cek</button></td>
            </tr>
            </table>
            <table id="example" class="table table-striped" style="width:100%;" border="3">
        
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Keterangan</th>
      <th scope="col">Biaya/Limit</th>
     
    </tr>
  </thead>
  <tbody>

  <?php
        if(isset($_POST['input'])){
          $pilih = $_POST['pilih'];
        echo"<center><div class='text'>$pilih</div></center>";
       
          for($i = 1 ; $i <=4; $i++){
          if($pilih == "Kartu Debit Blue"){
            $array = array("","Biaya pembuatan kartu","Biaya administrasi per bulan","Limit tarik tunai di ATM","Limit Setoran Tunai");
            $arru = array("1" => "Rp10.000", "2"=> "Rp14.000", "3" => "Rp10.000.000","4" => "Rp25.000.000");
            echo"<tr>
            <th scope=row>$i</th>
            <td>$array[$i]</td>
            <td>$arru[$i]</td>
          </tr>";
          }
          elseif($pilih == "Kartu Debit Gold"){
            $array = array("","Biaya pembuatan kartu","Biaya administrasi per bulan","Limit tarik tunai di ATM","Limit Setoran Tunai");
            $arru = array("1" => "Rp15.000", "2"=> "Rp16.000", "3" => "Rp11.000.000","4" => "Rp40.000.000");
            echo"<tr>
            <th scope=row>$i</th>
            <td>$array[$i]</td>
            <td>$arru[$i]</td>
          </tr>";
          }elseif($pilih == "Kartu Debit Platinum"){
            $array = array("","Biaya pembuatan kartu","Biaya administrasi per bulan","Limit tarik tunai di ATM","Limit Setoran Tunai");
            $arru = array("1" => "Rp20.000", "2"=> "Rp19.000", "3" => "Rp11.000.000","4" => "Rp50.000.000");
            echo"<tr>
            <th scope=row>$i</th>
            <td>$array[$i]</td>
            <td>$arru[$i]</td>
          </tr>";
          }else{
            $array = array("","Biaya pembuatan kartu","Biaya administrasi per bulan","Limit tarik tunai di ATM","Limit Setoran Tunai");
            $arru = array("1" => "Rp25.000", "2"=> "Rp20.000", "3" => "Rp12.000.000","4" => "Rp100.000.000");
            echo"<tr>
            <th scope=row>$i</th>
            <td>$array[$i]</td>
            <td>$arru[$i]</td>
          </tr>";
          }
   
   
  
   }
        }
    ?>
  </tbody>
</table>
         </form>
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
