<html>
<?php
if (isset($this->session->userdata['logged_in'])) {
$username = ($this->session->userdata['logged_in']['username']);
$email = ($this->session->userdata['logged_in']['email']);
$status=($this->session->userdata['logged_in']['status']);
$log_on=($this->session->userdata['logged_in']['log_on']);
} else {
header("location: latihan");
}
?>
<head>
<title>Dashboard Page</title>
<link href="<?php echo base_url().'assets/style/style.css'?>" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="profile">
<?php
echo "Hello <b id='welcome'><i>" . $username . "</i> !</b>";
echo "<br/>";
echo "<br/>";
if($status=='admin')
{
	echo "Welcome to Admin Page";
	echo "<br/>";
	echo '<Button>Akses ADMIN</Button>';
}
else
{
	echo "Welcome to Kasir Page";
	echo "<br/>";
	echo '<Button>Akses KASIR</Button>';
}
echo "<br/>";
echo "<br/>";
echo "Your Username is " . $username;
echo "<br/>";
echo "Your Email is " . $email;
echo "<br/>";
echo "Your login time " . $log_on;
echo "<br/>";

?>
<b id="logout"><a href="logout">Logout</a></b>
</div>
<br/>
</body>
</html>