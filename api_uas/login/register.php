<?php
$db = mysqli_connect('localhost','root','','uas');
if(!$db)
{
    echo "Database connection failed";
}
$username = $_POST['username'];
$password = $_POST['password'];
$email    = $_POST['email'];

$sql = "SELECT username FROM user WHERE username = '".$username."'";
$result = mysqli_query($db,$sql);
$count = mysqli_num_rows($result);
if($count == 1){
    echo json_encode("Error");
}else{
    $insert = "INSERT INTO user(username,password,email) VALUES ('".$username."','".$password."','".$email."')";
        $query = mysqli_query($db,$insert);
        if($query){
            echo json_encode("Success");
        }
}
?>