<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <title>customer List</title>
 <!--load bootstrap-->
 <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>"
 rel="stylesheet">
</head>
<body>
            <div>
            <div class="container">
            <h1><center>Edit customer</center></h1>
            <div class="col-md-6 offset-md-3">
            <form action="<?php echo site_url('Customer/update');?>"
            method="post">
            <!--Group Komponen Form-->
            <div class="form-group">
            <label>Customer ID</label>
            <input type="type" class="form-control" name="customer"
            value="<?php echo $customer_id;?>"
            placeholder="customer id" readonly> 
            </div>
            <div class="form-group">
            <label>Nama customer</label>
            <input type="type" class="form-control" name="nama_customer"
            value="<?php echo $nama_customer;?>" placeholder="Nama customer"> 
            </div>
            <div class="form-group">
            <label>Alamat</label>
            <input type="type" class="form-control" name="alamat"
            value="<?php echo $alamat;?>" placeholder="Alamat"> 
            </div>
            <div class="form-group">
             <label>Telpon</label>
            <input type="type" class="form-control" name="telpon"
            value="<?php echo $telpon;?>" placeholder="Telpon"> 
            </div>
            <hr>
            <input type="hidden" name="customer_id"
            value="<?php echo $customer_id;?>">
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