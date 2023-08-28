<html>

<head>
    <title>Lookup data</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/img/logo.jpg')?>" rel="shortcut icon">
    <link href="<?php echo base_url().'assets/css/style.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/laporan.css'?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/font-awesome.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/4-col-portfolio.css'?>" rel="stylesheet">
    <!--css-->
    <link href="<?php echo base_url().'assets/css/tabel/jquery.dataTables.min.css'?>" rel="stylesheet">

    <link href="<?php echo base_url().'assets/css/dataTables.bootstrap.min.css'?>" rel="stylesheet">

</head>
<body>
<div class="container">
    <div class="row">
        <center>
            <h1 class="page-header">Lookup data</h1>

        </center>

        <div class="col-lg-12  offset-md-2">

            <div class="modal-body">
                <label class="control-label col-lg-8">No. Faktur
                </label>
                <div class="col-lg-8">
                    <input name="no_faktur" class="0
                    
                    form-control" id="no_faktur" type="text" 
                        value="<?php echo $nofak;?>" readonly>
                </div>

                <label class="control-label col-lg-8">Customer</label>
                <div class="col-lg-8">
                    <select name="kode_customer" class="form-control" id="kode_customer" type="text" required>
                        <option value="0">pilih customer</option>
                        <?php foreach($customer as $row):?>
                        <option value="<?php echo $row->customer_id;?>">
                            <?php echo $row->customer_id;?>-<?php echo $row->nama_customer;?>
                        </option>
                        <?php endforeach;?>
                    </select>
                </div>
                <label class="control-label col-lg-8">Nama Customer</label>
                <div class="col-lg-8">
                    <input name="nama_customer" class="form-control" id="nama_customer" type="text" value="" readonly>
                </div>
                <label class="control-label col-lg-8">Kode barang</label>
                <div class="col-lg-8">
                    <select name="kode_barang" class="form-control" id="kode_barang" type="text" required>
                        <option value="0">pilih barang</option>
                        <?php foreach($barang as $row):?>
                        <option value="<?php echo $row->barang_id;?>">
                            <?php echo $row->barang_id;?>-<?php echo $row->nama_barang;?>
                        </option>
                        <?php endforeach;?>
                    </select>
                </div>
                <label class="control-label col-lg-8">Nama barang</label>
                <div class="col-lg-8">
                    <input name="nama_barang" class="form-control" id="nama_barang" type="text" value="" readonly>
                </div>
                <label class="control-label col-lg-8">Harga barang</label>
                <div class="col-lg-8">
                    <input name="harga_barang" class="form-control" id="harga_barang" type="text" value="" readonly>
                </div>
                <label class="control-label col-lg-8">Qty</label>
                <div class="col-lg-8">
                    <input name="qty" class="form-control" id="qty" type="number" required>
                </div>
                <label class="control-label col-lg-8">Total bayar</label>
                <div class="col-lg-8">
                    <input name="total" class="form-control" id="total" type="text" readonly>
                </div>
                <label class="control-label col-lg-8">Pajak PPN (11%)</label>
                <div class="col-lg-8">
                    <input name="pajak" class="form-control" id="pajak" type="text"  readonly required>
                </div>
                <label class="control-label col-lg-8">Grand Total</label>
                <div class="col-lg-8">
                 <input name="grand_total" class="form-control" id="grand_total" type="text"  readonly>
                </div>
                <hr>
                <button id="hitung" class="btn btn-primary" type="button" onclick="hitungtotal();">Hitung</button>
                <button id="simpan" class="btn btn-primary" type="button" onclick="">SIMPAN</button>
                <a href="<?php echo site_url('latihan');?>" class="btn btn-danger">Home</a>&nbsp
            </div>
        </div>
    </div>
</div>
<!--tampilkan table-->
<div class="container">
    <div class="row justify-content-center section-title-wrap">
        <div class="col-lg-12">
            <br>
            <p>
                <h3>Transaksi penjualan barang</h3>
        </div>
        <div class="col-lg-12">
        <a href="<?php echo site_url('Lookup_data/export_data');?>" class="btn btn-primary" type="button">Export to Excel</a>
      
        <a href="<?php echo site_url('Lookup_data/cetak_pdf');?>" class="btn btn-danger" type="button">Export to pdf</a>
        </div>
    </div>
    <div class="row">
        <div class="table d-flex justify-content-center">
            <table class="table table-bordered table-bordered" style="font-size:14px;" border="1" id="mydata2">
                <thead>
                    <tr>
                        <td>No.</td>
                        <td>No. Faktur</td>
                        <td>Kode Customer</td>
                        <td>Nama Customer</td>
                        <td>Kode Barang</td>
                        <td>Nama Barang</td>
                        <td>Harga Barang</td>
                        <td>QTY</td>
                        <td>Total Bayar</td>
                        <td>Pajak PPN</td>
                        <td>Grand Total</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach($transaksi->result() as $key) : ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $key->No_faktur; ?></td>
                        <td><?php echo $key->Kode_customer; ?></td>
                        <td><?php echo $key->Nama_customer; ?></td>
                        <td><?php echo $key->Kode_barang; ?></td>
                        <td><?php echo $key->Nama_barang; ?></td>
                        <td><?php echo number_format($key->Harga); ?></td>
                        <td><?php echo $key->Qty; ?></td>
                        <td><?php echo number_format($key->Total_bayar); ?></td>
                        <td><?php echo number_format($key->Pajak); ?></td>
                        <td><?php echo number_format($key->Grand_total); ?></td>
                        <td><a href="<?php echo site_url('Lookup_data/cetak_transaksi/'.$key->No_faktur);?>" id="cetak" class="btn btn-primary" type="button">CETAK</a> </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                </tfoot>
            </table>
        </div>
    </div>
</div>
</body>
</html>
<script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
<script type="text/javascript">

    $(document).ready(function()
    {
        $('#kode_customer').change(function()
    {
    var customer=$(this).val();
    $.ajax(
    {
    url :"<?php echo base_url('Lookup_data/get_customer')?>",
    method : "POST",
    dataType : 'json',
    data:{kode:customer},
    cache:false,
    async :true,
    success:function(data)
    {
        $.each(data,function(id_cutomer,nama_barang)
        {
            $('[name="nama_customer"]').val(data.nama_customer);
        });
    }
})
return false
    });
});

</script>
<script type="text/javascript">

    $(document).ready(function()
    {
        $('#kode_barang').change(function()
    {
    var barang=$(this).val();
    $.ajax(
    {
    url :"<?php echo base_url('Lookup_data/get_barang')?>",
    method : "POST",
    dataType : 'json',
    data:{kode:barang},
    cache:false,
    async :true,
    success:function(data)
    {
        $.each(data,function(id_barang,nama_barang,harga)
        {
            $('[name="nama_barang"]').val(data.nama_barang);
            $('[name="harga_barang"]').val(data.harga);
        });
    }
})
return false
    });
});

</script>
<!--Simpan Data ke Tabel Transaksi-->
<script type="text/javascript">
    $(document).ready(function() {
        $('#simpan').click(function() {
            var nofaktur = document.getElementById("no_faktur").value;
            var kode_customer = document.getElementById("kode_customer").value;
            var nama_customer = document.getElementById("nama_customer").value;
            var kode_barang = document.getElementById("kode_barang").value;
            var nama_barang = document.getElementById("nama_barang").value;
            var harga = document.getElementById("harga_barang").value;
            var qty = document.getElementById("qty").value;
            var total = document.getElementById("total").value;
            var pajak = document.getElementById("pajak").value;
            var grand_total = document.getElementById("grand_total").value;
            //alert(nofaktur);
            $.ajax({
                url: "<?php echo base_url('Lookup_data/simpan_data')?>",
                method: "POST",
                dataType: 'json',
                data: {
                    nofaktur: nofaktur,
                    kode_customer: kode_customer,
                    nama_customer: nama_customer,
                    kode_barang: kode_barang,
                    nama_barang: nama_barang,
                    harga: harga,
                    qty: qty,
                    total: total,
                    pajak: pajak,
                    grand_total: grand_total
                },
                cache: false,
                async: true,
            })
            window.alert("Success data disimpan");
            //kosongkan form
            document.getElementById("kode_customer").value = "";
            document.getElementById("nama_customer").value = "";
            document.getElementById("kode_barang").value = "";
            document.getElementById("nama_barang").value = "";
            document.getElementById("harga_barang").value = "";
            document.getElementById("qty").value = "";
            document.getElementById("total").value = "";
            document.getElementById("pajak").value = "";
            document.getElementById("grand_total").value = "";
            //halaman refresh
            window.location.reload();
            return false
        });
    });
</script>
<!--Java Script untuk mengatktifkan dataTables-->
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js');?>">
</script>
<script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
<script src="<?php echo
base_url().'assets/js/tabel/jquery.dataTables.min.js'?>"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#mydata2').DataTable();
    });
</script>
<script type="text/javascript">

function hitungtotal()
{
    var harga, qty, total,pajak,grand_total;
    harga = parseInt(document.getElementById("harga_barang").value);
    qty = parseInt(document.getElementById("qty").value);
    total = harga*qty;
    document.getElementById("total").value =(new Intl.NumberFormat().format(total));
    pajak = 11/100*total; 
    document.getElementById("pajak").value = (new Intl.NumberFormat().format(pajak));
    grand_total = total+pajak;
    document.getElementById("grand_total").value =(new Intl.NumberFormat().format(grand_total));
    
}
</script>

