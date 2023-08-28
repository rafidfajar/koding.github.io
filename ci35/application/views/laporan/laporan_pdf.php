<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php $title_pdf;?></title>
        <style>
            #table {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            #table td, #table th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            #table tr:nth-child(even){background-color: #f2f2f2;}

            #table tr:hover {background-color: #ddd;}

            #table th {
                padding-top: 10px;
                padding-bottom: 10px;
                text-align: left;
                background-color: #4CAF50;
                color: white;
            }
        </style>
    </head>
    <body>
        <div style="text-align:center">
            <h3> Laporan Penjualan Barang</h3>
        </div>
        <table id="table" class="table table-striped">
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
                 </tr>
                <?php endforeach; ?>
                    </tbody>
        </table>
    </body>
</html>