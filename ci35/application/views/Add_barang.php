<html>
<head>
<title>Barang list</title>
<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
</head>
<body>
<div>
<div class="container">
    <center>
    <h1>Add New list</h1>
</center>
    <div class="col-md-6 offset-md-3">
    <form action="<?php echo base_url('Barang/simpan_barang');?>" method="post">
    <div class="form-group">
        <label>Kode barang</label>
        <input type="type" class="form-control" name="barang_id" value="<?php echo $Barang;?>" 
        placeholder="barang id" readonly>
    </div>
    <div class="form-group">
        <label>Nama barang</label>
        <input type="type" class="form-control" name="nama_barang"  
        placeholder="Nama barang" required>
    </div>
    <div class="form-group">
        <label>Harga</label>
        <input type="type" class="form-control" name="harga_barang"  
        placeholder="Harga" required>
    </div>
    <div class="form-group">
        <label>Qty</label>
        <input type="type" class="form-control" name="qty"  
        placeholder="Qty" required>
    </div>
    <hr>
    <button class="btn btn-info" type="submit">Submit</button>
    <button class="btn btn-danger" type="reset">cancel</button>
</form>
</div>
</div>

</body>
</html>