<?php
class database{
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $database = "nasabah";
    var $koneksi = "";
   
    function __construct(){
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if(mysqli_connect_error()){
            echo "koneksi database gagal : " . mysqli_connect_error();
        }
    }
   
   
 
    function data_tampil()
    {
        $data = mysqli_query($this->koneksi,"SELECT * FROM data_nasabah");
        while($row = mysqli_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }

    
    function tambah_data($nama,$nik,$alamat,$username,$password)
    {
     mysqli_query($this->koneksi,"insert into data_nasabah values ('','$nama','$nik','$alamat','$username',$password)");
    }
    function get_by_id($id_nasabah)
    {
        $query = mysqli_query($this->koneksi,"select * from data_nasabah where id_nasabah='$id_nasabah'");
        return $query->fetch_array();
    }
    function update_data($nama, $nik,$alamat,$username,$password,$id_nasabah)
    { 
        $query = mysqli_query($this->koneksi,"update data_nasabah set nama='$nama',nik='$nik',alamat='$alamat',username='$username',password='$password' where id_nasabah='$id_nasabah'");
    }
    function delete_data($id_nasabah)
    {
        $query = mysqli_query($this->koneksi,"delete from data_nasabah where id_nasabah='$id_nasabah'");
    }
    function hapus_data($id_user)
    {
        $query = mysqli_query($this->koneksi,"delete from users where id_user='$id_user'");
    }
    function edit_data($username,$password,$id_user)
    { 
        $query = mysqli_query($this->koneksi,"update users set username='$username'password='$password' where id_user='$id_user'");
    }

}
?>