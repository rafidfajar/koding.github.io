<?php
session_start();
session_destroy();
echo "<script>alert('Anda berhasil Logout' );window.location=('login.php')</script>";

?>