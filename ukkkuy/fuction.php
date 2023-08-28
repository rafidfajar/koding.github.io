<?php 

function simpann($data){
$koneksi=mysqli_connect("localhost","root","","pengaduan_masyarakat"); 
$username = strtolower(stripcslashes($data["username"]));


$result = mysqli_query($koneksi,"SELECT username FROM masyarakat WHERE username='$username'");
 
 if(mysqli_fetch_assoc($result)){
 	echo "<script>
 	alert('username sudah ada bang')
 	</script>";
 	return false;
 }


	$password = md5($_POST['password']);

	$query=mysqli_query($koneksi,"INSERT INTO masyarakat VALUES ('".$_POST['nik']."','".$_POST['nama']."','".$_POST['username']."','".$password."','".$_POST['telp']."')");
	

	return mysqli_affected_rows($koneksi);
}

 ?>