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

        #table td,
        #table th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #table tr:hover {
            background-color: #ddd;
        }

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
        <h3> Laporan List Barang</h3>
    </div>
    <table id="table">
        <thead>
            <tr>
                <td>No.</td>
                <td>Barang Id</td>
                <td>Nama Barang</td>
                <td>Harga</td>
                <td>Qty</td>

            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach($barang->result() as $key) : ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $key->barang_id; ?></td>
                <td><?php echo $key->nama_barang; ?></td>
                <td><?php echo $key->harga; ?></td>
                <td><?php echo $key->qty; ?></td>

            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>