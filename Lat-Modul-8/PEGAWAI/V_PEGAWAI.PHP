<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pegawai Perusahan XYZ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://localhost/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://localhost/bootstrap/js/bootstrap.bundle.min.js"> </script>
</head>
<style>
    th {
        text-align: center;
    }
</style>
<body>
    <div class="container" style="margin-top:30px">
        <h3 style="text-align: center; border-style: groove; border-width: 0.3rem; border-radius: 1rem;"><b><?= strtoupper("Laporan Data Pegawai")?></b></h3>
        <table class="table table-hover table-striped table-responsive-lg">
            <thead class="table-dark">
                <tr>
                    <th>NIP</th>
                    <th>NAMA</th>
                    <th>GOLONGAN</th>
                    <th>DIVISI</th>
                    <th>ALAMAT</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($data_pegawai as $row) : ?>
                        <tr>
                        <td style="text-align: center;"><?=$row['nip']?></td>
                        <td><?=$row['nama']?></td>
                        <td style="text-align:center"><?=$row['golongan']?></td>
                        <td><?=$row['divisi']?></td>
                        <td><?=$row['alamat']?></td>
                    <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>