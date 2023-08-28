<html>
<head>
<title>balajar memahami masa depan </title>
<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
</head>
<body style="background-color:#DDBDF7">
<div>
<div class="container">
    <h1 >Barang list</h1>
    <table class="table table-striped">
        <thead>
        <a href="<?php echo site_url('latihan');?>" class="btn btn-danger">Home</a>&nbsp
        <a href="<?php echo site_url('Barang/Add_barang');?>" class="btn btn-warning">Add</a>
        &nbsp
        <a href="<?php echo site_url('Barang/export_data');?>" class="btn btn-success" type="button">Export to Excel</a>
        &nbsp
        <a href="<?php echo site_url('Barang/cetak_pdf');?>" class="btn btn-danger" type="button">Export to pdf</a>
   
        <hr>
        <tr>
            <th scope="col-md-6">No.</th>  
            <th scope="col-md-6">Barang ID</th>
            <th scope="col-md-6">Nama Barang</th>
            <th scope="col-md-6">Harga Barang</th>
            <th scope="col-md-6">QTY</th>
            <th scope="col-md-6">Action</th>
            
        </tr>
        </thead>
        <?php
        $no=0;
        foreach($Barang->result() as $row):
        $no++;

        ?>
        <tr>
        <th scope="row"><?php echo $no;?></th>
        <td><?php echo $row->barang_id?></td>
        <td><?php echo $row->nama_barang?></td>
        <td><?php echo $row->harga?></td>
        <td><?php echo $row->qty?></td>
        <td><a href="<?php echo site_url('Barang/Edit_barang/'.$row->barang_id);?>" class="btn btn-primary">Update</a>
        <a href="<?php echo site_url('Barang/Delete_barang/'.$row->barang_id);?>" class="btn btn-danger">delete</a>
        </td>
        </tr>
        <?php endforeach;?>


    </table>
</div>
</div>
</body>
</html>