<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <title>Barang List</title>
 <!--load bootstrap-->
 <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>"
 rel="stylesheet">
</head>
<body>
            <div>
            <div class="container">
            <h1><center>Edit Barang</center></h1>
            <div class="col-md-6 offset-md-3">
            <form action="<?php echo site_url('Barang/update');?>"
            method="post">
            <!--Group Komponen Form-->
            <div class="form-group">
            <label>Barang ID</label>
            <input type="type" class="form-control" name="barang"
            value="<?php echo $barang_id;?>"
            placeholder="barang_id" readonly> 
            </div>
            <div class="form-group">
            <label>Nama Barang</label>
            <input type="type" class="form-control" name="Nama_barang"
            value="<?php echo $nama_barang;?>" placeholder="Nama barang"> 
            </div>
            <div class="form-group">
            <label>Harga Barang</label>
            <input type="type" class="form-control" name="Harga_barang"
            value="<?php echo $harga_barang;?>" placeholder="Harga barang"> 
            </div>
            <div class="form-group">
             <label>Qty</label>
            <input type="type" class="form-control" name="qty"
            value="<?php echo $qty;?>" placeholder="QTY"> 
            </div>
            <hr>
            <input type="hidden" name="barang_id"
            value="<?php echo $barang_id;?>">
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
            </div>
            </div>
            <!--Aktifkan JS file-->
            <script type="text/javascript"
            src="<?php echo base_url('assets/js/jquery.min.js');?>">
            </script>
            <script type="text/javascript"
            src="<?php echo base_url('assets/css/bootstrap.min.css');?>">
            </script> 
</body>
</html