<!DOCTYPE html>
<html lang="en">
<link href="<?php echo base_url('assets/images/logo.ico')?>"
 rel="shortcut icon">
<head>
 <meta charset="utf-8">
 <title>Barang List</title>
 <!--load bootstrap-->
 <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>"
 rel="stylesheet">
</head>
<body style="background-color:#BDE9F7">
 <div>
 <div class="container">
 <h1><center>Tambah Gambar</center></h1>
 <div class="col-md-6 offset-md-3">
 <div style="color: red;"><?php echo (isset($message))? $message : ""; 
?></div>
 <?php echo form_open("Gambarku/tambah", array('enctype'=>'multipart/form-data')); ?>
 <table cellpadding="8">
 <tr>
 <td>Deskripsi</td>
 <td><input type="text" name="input_deskripsi" value="<?php echo
set_value('input_deskripsi'); ?>"></td>
 </tr>
 <tr>
 <td>Gambar</td>
 <td><input type="file" name="input_gambar"></td>
 </tr>
 </table>
 
 <hr>
 <input type="submit" name="submit" value="Simpan">
<input name="reset" type="reset" value="Batal"></a>
<?php echo form_close(); ?>
 </div>
 </div>
 </div>
</body>
</html>