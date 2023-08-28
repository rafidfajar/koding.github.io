<html lang="en">

<head>
    <meta charset="utf-8">
    <link href="<?php echo base_url('assets/images/logo.jpg')?>" rel="shortcut icon">
    <title>Bukti Transaksi</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/laporan.css')?>" />
</head>
<body onload="window.print()">
    <div class="container">
        <div class="col-lg-8">
            <br>
            <br>
            <table align="center" style="width:10px;border:none;">
                <tr>
                    <td>
                        <image src="<?php echo base_url('assets/images/laporan.png')?>" style="width:250px"></image>
                    </td>
                </tr>
            </table>
            <h1 align="center">Bukti Transaksi</h1>
            <p align="center">=======================================================
                =======================</p>
            <?php
 $b=$data->row_array();
 ?>
            <table align="center" style="font-size:16px;width:500px;border:none;">
                <tr>
                    <td style="text-align:left;">No Faktur</td>
                    <td style="text-align:left;">: <?php
 echo $b['No_faktur'];?></td>
                </tr>
                <tr>
                    <td style="text-align:left;">Kode Customer</td>
                    <td style="text-align:left;">: <?php
 echo $b['Kode_customer'];?></td>
                </tr>
                <tr>
                    <td style="text-align:left;">Nama Customer</td>
                    <td style="text-align:left;">: <?php
 echo $b['Nama_customer'];?> </td>
                </tr>
                <tr>
                    <td style="text-align:left;">Kode Barang</td>
                    <td style="text-align:left;">: <?php
 echo $b['Kode_barang'];?> </td>
                </tr>
                <tr>
                    <td style="text-align:left;">Nama Barang</td>
                    <td style="text-align:left;">: <?php
 echo $b['Nama_barang'];?> </td>
                </tr>
                <tr>
                    <td style="text-align:left;">Harga Barang</td>
                    <td style="text-align:left;">: <?php
 echo number_format($b['Harga']);?></td>
                </tr>
                <tr>
                    <td style="text-align:left;">Qty</td>
                    <td style="text-align:left;">: <?php
 echo $b['Qty'];?></td>
                </tr>
                <tr>
                    <td style="text-align:left;">Total</td>
                    <td style="text-align:left;">: Rp. <?php
 echo number_format($b['Total_bayar']);?></td>
                </tr>
                <tr>
                    <td style="text-align:left;">Pajak</td>
                    <td style="text-align:left;">: Rp. <?php
 echo number_format($b['Pajak']);?></td>
                </tr>
                <tr>
                    <td style="text-align:left;">Total keseluruhan</td>
                    <td style="text-align:left;">: Rp. <?php
 echo number_format($b['Grand_total']);?></td>
                </tr>
            </table>
            <p align="center">=======================================================
                =======================</p>
        </div>
    </div>
</body>

</html>