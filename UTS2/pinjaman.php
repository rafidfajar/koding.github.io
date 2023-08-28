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
      <div class="text"><i class='fas fa-hand-holding-usd mr-2'></i>Pinjaman</div>
     
<hr>
<div class="container">
       
      <form method="POST">
      <table>
	<tr>
		<td>Masukan Pinjaman Anda : <input type="text" name="pnjm"  class="form-control" required placeholder ="Jumlah Pinjam"></td>
	</tr>
	<tr>
		<td>Jumlah Angsuran Anda: <input type="text" name="ang"  class="form-control" required placeholder="angsuran anda"></td>
	</tr>
	<tr>
		<td><br><button type="submit " class="btn btn-warning" name="inputan" style="width:100%;" >Jumlah</button></td></tr>
	</table>

        <br>
        <hr>
        <table id="example" class="table table-striped" style="width:100%;" border="3">
          <thead>
              <tr>
				<th>No</th>
				<th>Keterangan</th>
				<th>Jumlah</th>
			
              </tr>
             
          </thead>
          <tbody>
              
          </div>
      
      </div>
	</div>
      <?php
          if(isset($_POST['inputan'])){
            $pinjam = $_POST['pnjm'];
            $angsur = $_POST['ang'];
            
        
        $bunga = 0.1;
        $total = ($pinjam *$bunga) + $pinjam;
        $angsuran = $total / $angsur;
        $sisa = $total - $angsuran;
        echo "<div class='alert alert-danger'>
        <strong>Bunga Pinjaman 10%</strong> 
        </div>";
            echo "<tr>
                  <td>1</td>
                  <td>Pinjaman</td>
                  <td>Rp.  $pinjam</td>
              </tr>
              <tr>
                  <td>2</td>
                  <td>lama angsuran </td>
                  <td>$angsur Bulan</td>
              </tr>
              <tr>
                  <td>3</td>
                  <td>Bunga </td>
                  <td>10 %</td>
              </tr>
              <tr>
                  <td>4</td>
                  <td>Total pinjaman </td>
                  <td>Rp. $total</td>
              </tr>";
             
            
        }
        
            ?>
             </tbody>
    </table>
    <hr>
        <h3 style="text-align : center;">Jumlah Angsuran</h3>
        <table id="example" class="table table-striped" style="width:100%;" border="3">
          <thead>
              <tr>
				<th>No</th>
				<th>Bayar Anguran</th>
				<th>Total Bayar</th>
                <th>Sisa Pinjaman</th>
			
              </tr>
            <?php  
            if(isset($_POST['inputan'])){
            $angsurr = $_POST['ang'];
            for($i = 1 ; $i <=$angsurr; $i++){
            
            echo "<tr>
            <td>Angsuran $i</td>
            <td>Rp. $angsuran</td>
            <td>Rp. $total - Rp. $angsuran</td>
            <td>Rp. $sisa </td>
            </tr>";
            $total = $sisa;
            $sisa = $sisa - $angsuran;
    }
}
    ?>
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
