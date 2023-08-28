<html>
<head>
<title>balajar memahami masa depan </title>
<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
</head>
<body style="background-color:#BDE9F7">
<div>
<div class="container">
    <h1 style="text:bold">Customer list</h1>
    <table class="table table-striped">
        <thead>
        <a href="<?php echo site_url('latihan');?>" class="btn btn-danger">Home</a>&nbsp
        <a href="<?php echo site_url('Customer/Add_customer');?>" class="btn btn-warning">Add</a>
        <hr>
        <tr>
            <th scope="col-md-6">No.</th>  
            <th scope="col-md-6">Customer ID</th>
            <th scope="col-md-6">Nama Customer</th>
            <th scope="col-md-6">Alamat</th>
            <th scope="col-md-6">Telpon</th>
            <th scope="col-md-6">Action</th>
            
        </tr>
        </thead>
        <?php
        $no=0;
        foreach($Customer->result() as $row):
        $no++;

        ?>
        <tr>
        <th scope="row"><?php echo $no;?></th>
        <td><?php echo $row->customer_id?></td>
        <td><?php echo $row->nama_customer?></td>
        <td><?php echo $row->alamat?></td>
        <td><?php echo $row->telpon?></td>
        <td><a href="<?php echo site_url('Customer/Edit_customer/'.$row->customer_id);?>" class="btn btn-primary">Update</a>
        <a href="<?php echo site_url('Customer/Delete_customer/'.$row->customer_id);?>" class="btn btn-danger">delete</a>
        </td>
        </tr>
        <?php endforeach;?>


    </table>
</div>
</div>
</body>
</html>