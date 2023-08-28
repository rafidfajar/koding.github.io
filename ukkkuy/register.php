  

      <!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
	
</head>
<body >
	<style type="text/css">
		label{ display: block; }
	</style>
<h4>Registrasi</h4>
<form action="" method="post">
	

	<div>
		<label for="nik">NIK</label>
		<input type="number" name="nik" id="nik">
	</div>
	<div>
		<label for="nama">Nama</label>
		<input type="text" name="nama" id="nama">
	</div>
	<div>
		<label for="username">Username</label>
		<input type="text" name="username" id="username">
	</div>
	<div>
		<label for="password">Pasword</label>
		<input type="password" name="password" id="password">
	</div>
	<div>
		<label for="telp">Telp</label>
		<input type="number" name="telp" id="telp">
	</div>
	<div>
		<input type="submit" name="simpan" value="Simpan" class="btn right">
				
	</div>
	<div>
		<button ><a href="index.php" >Kembali</a></button>
	</div>
	

</form>
</body>
</html>

			<?php 
			require "fuction.php";
			$koneksi=mysqli_connect("localhost","root","","pengaduan_masyarakat"); 

		
				if(isset($_POST["simpan"])){
					if(simpann($_POST) > 0){
					echo"<script>
					alert('user baru telah di tambahkan');
					</script>";
					
					}
				}

			 ?>
          </div>
          <div class="modal-footer">
            <div> <a href = "index.php" class="btn red" style="width: 100%;"></a></div>
          </div>
        </div>