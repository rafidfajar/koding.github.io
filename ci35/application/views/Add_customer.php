<html>
<head>
<title>Customer list</title>
<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
</head>
<body>
<div>
<div class="container">
    <center>
    <h1>Add New list</h1>
</center>
    <div class="col-md-6 offset-md-3">
    <form action="<?php echo base_url('Customer/simpan_customer');?>" method="post">
    <div class="form-group">
        <label>Kode Customer</label>
        <input type="type" class="form-control" name="customer_id" value="<?php echo $Customer;?>" 
        placeholder="Customer_id" readonly>
    </div>
    <div class="form-group">
        <label>Nama Customer</label>
        <input type="type" class="form-control" name="nama_customer"  
        placeholder="Nama Customer" required>
    </div>
    <div class="form-group">
        <label>Alamat</label>
        <input type="type" class="form-control" name="alamat"  
        placeholder="Alamat" required>
    </div>
    <div class="form-group">
        <label>Telpon</label>
        <input type="type" class="form-control" name="telpon"  
        placeholder="Telpon" required>
    </div>
    <hr>
    <button class="btn btn-info" type="submit">Submit</button>
    <button class="btn btn-danger" type="reset">cancel</button>
</form>
</div>
</div>

</body>
</html>