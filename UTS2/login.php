<?php
session_start();
if (isset($_SESSION['username'])){
    echo "<script>alert('Anda telah login');window.location=('dashboard.php')</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
</head>
<style type="text/css">

</style>

<body style="background-image:url(foto/karyawan.webp);width: 100%;height: 100%; background-size: cover;">
    <form method="POST" >
    <div class="container"
        style="  position: absolute;left: 50%;top: 50%;transform: translate(-50%,-50%);width: 300px; background-color: rgba(187, 179, 179, 0.7);text-align: center;">
        </br>
        <i class="fa-solid fa-circle-user" style="font-size: 50px;"></i>
        <h4>Login</h4>
        </br>
        <div class="input-group mb-4">
            <input type="text" class="form-control" name="nama" placeholder="Username" required>
        </div>
        <div class="input-group mb-4">

            <input type="password" class="form-control" name="pw" placeholder="Password" required>
        </div>
        <div class="mb-3">
            <button type="submit" name="tombol" class="btn btn-primary">Login</button>
        </div>
        <div class="mb-2">
            Belum punya akun ?<a href="#">Registrasi</a>
        </div>
    </div>
</form>
<?php 
 $koneksi=mysqli_connect("localhost","root","","nasabah");
	if(isset($_POST['tombol'])){
		$username = mysqli_real_escape_string($koneksi,$_POST['nama']);
		$password = mysqli_real_escape_string($koneksi,md5($_POST['pw']));
	
		$sql = mysqli_query($koneksi,"SELECT * FROM users WHERE username='$username' AND password='$password' ");
		$cek = mysqli_num_rows($sql);
		$data = mysqli_fetch_assoc($sql);
	
	

		if($cek>0){
			session_start();
			$_SESSION['username']=$username;
		
			header('location:dashboard.php');
		}
		else{
			echo "<script>alert('Gagal Login Sob')</script>";
		}

	}
 ?>
</body>

</html>
