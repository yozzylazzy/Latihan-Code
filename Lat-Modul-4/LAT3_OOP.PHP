<?php

class PEMBELI
{
    public $HargaBarang;
    public $Quantity;
    function __construct($HargaBarang, $Quantity)
    {
        $this->HargaBarang = $HargaBarang;
        $this->Quantity = $Quantity;
    }
    function setHargaBarang($HargaBarang)
    {
        $this->HargaBarang = $HargaBarang;
    }
    function setQuantity($Quantity)
    {
        $this->Quantity = $Quantity;
    }
    function getHarga()
    {
        return $this->HargaBarang;
    }
    function getQuantity()
    {
        return $this->Quantity;
    }
    function HitungJumlahBayar()
    {
        return $this->HargaBarang * $this->Quantity;
    }
}

//Pada Subclass Pelanggan mengoverride property HargaBarang 10%
//Membuat Class Pelanggan
class PELANGGAN extends PEMBELI
{
    public $Diskon;
    function __construct($HargaBarang, $Quantity, $Diskon)
    {
        parent::__construct($HargaBarang, $Quantity);
        $this->Diskon = $Diskon;
    }
    function setDiskon($Diskon)
    {
        $this->Diskon = $Diskon;
    }
    function HitungDiskon()
    {
        return $this->HargaBarang * $this->Diskon * $this->Quantity;
    }
    //Override HitungJumlahBayar()
    function HitungJumlahBayar()
    {
        return $this->HargaBarang * $this->Quantity - $this->HitungDiskon();
    }
}

//Deklarasi Objek dari Induk Class
$Pembeli = new PEMBELI(5000, 3);
/*print "Harga Barang = Rp. " . $Pembeli->getHarga() . "<br>";
print "Quantity = " . $Pembeli->getQuantity() . "<br>";
print "Jumlah Bayar = Rp. " . $Pembeli->HitungJumlahBayar() . "<br>";
print "<hr>";*/

//Deklarasi Objek dari Pelanggan Class
$Pelanggan = new PELANGGAN(5000, 3, 0.1);
/*print "Harga Barang = Rp. " . $Pelanggan->getHarga() . "<br>";
print "Quantity = " . $Pelanggan->getQuantity() . "<br>";
print "Diskon = " . $Pelanggan->HitungDiskon() . "<br>";
print "Jumlah Bayar = Rp. " . $Pelanggan->HitungJumlahBayar() . "<br>";*/

if (isset($_POST['submit'])) {
    if (isset($_POST['Harga'])  && isset($_POST['Quantity']) && isset($_POST['Diskon'])) {
        if ($_POST['Harga'] != "" && $_POST['Quantity'] != "" && $_POST['Diskon'] != "") {
            $Pelanggan->setHargaBarang($_POST['Harga']);
            $Pelanggan->setQuantity($_POST['Quantity']);
            $Pelanggan->setDiskon($_POST['Diskon']);
            $Pembeli->setHargaBarang($Pelanggan->getHarga());
            $Pembeli->setQuantity($Pelanggan->getQuantity());
        } else {
            $Pelanggan->setHargaBarang(0);
            $Pelanggan->setQuantity(0);
            $Pelanggan->setDiskon(0);
            $Pembeli->setHargaBarang(0);
            $Pembeli->setQuantity(0);
        }
    }
}
?>

<style>
.card {
    margin: 0 auto;
    float: none;
    margin-bottom: 10px;
}
</style>

<!DOCTYPE html>
<html>

<head>
    <title>
        PERHITUNGAN JUAL BELI PELANGGAN DAN PEMBELI
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
</head>

<body>
    <div class="container mt-5 mb-5 text-center">
        <div class="container-xl">
            <div class="card p-5 my-2" style="width: 75%;">
                <div class="card p-3" style="width: 80%;">
                    <?php if ($Pelanggan->getHarga() != 0 && $Pelanggan->getQuantity() != 0) {
                        echo '<span class="material-symbols-outlined"
                        style="align-items : center; font-size:8vw; margin-botton:2%; color:green;">
                        check
                    </span>';
                        echo "<h3><b>BERHASIL DI PROSES, BERIKUT SIMULASI HARGA JUAL</b></h3>";
                    } else {
                        echo '<span class="material-symbols-outlined"
                        style="align-items : center; font-size:8vw; margin-botton:2%; color:red;">
                        cancel
                    </span>';
                        echo '<h3><b>GAGAL DI PROSES</b></h3>';
                    } ?>
                    <hr>
                    <form method="POST" action="" name="form">
                        <div class="row">
                            <div class="col-5">
                                <label for="teks" class="form-label" style="text-align: left;">Harga</label>
                                <input id="Harga" name="Harga" class="form-control" type="number" value="" step="1"
                                    placeholder="Masukkan Harga Barang" required>
                            </div>
                            <div class="col-5">
                                <label for="teks" class="form-label" style="text-align: left;">Quantity</label>
                                <input id="Quantity" name="Quantity" class="form-control" type="number" value=""
                                    step="1" placeholder="Masukkan Kuantitas Dalam Angka" required>
                            </div>
                            <div class="col-2">
                                <label for="teks" class="form-label" style="text-align: left;">Diskon</label>
                                <input id="Diskon" name="Diskon" class="form-control" type="number" value="0.1"
                                    step="0.025" placeholder="Masukkan Diskon Dalam Decimal" required>
                            </div>
                        </div>
                        <div class="d-grid gap-2 mt-3">
                            <button class="btn btn-primary btn-lg btn-block" type="submit" value="submit"
                                name="submit">SUBMIT</button>
                        </div>
                    </form>
                    <hr>
                    <h4><b>CLASS PEMBELI</b></h4>
                    <h5>Harga : Rp <?= number_format($Pembeli->getHarga(), 0, ",", ".") ?></h5>
                    <h5>Kuantitas : <?= $Pembeli->getQuantity() ?></h5>
                    <h5>Total Pembayaran : Rp <?= number_format($Pembeli->HitungJumlahBayar(), 0, ",", ".") ?></h5>
                    <hr>
                    <h4><b>CLASS PELANGGAN</b></h4>
                    <h5>Harga : Rp <?= number_format($Pelanggan->getHarga(), 0, ",", ".") ?></h5>
                    <h5>Kuantitas : <?= $Pelanggan->getQuantity() ?></h5>
                    <h5>Diskon : Rp <?= number_format($Pelanggan->HitungDiskon(), 0, ",", ".") ?></h5>
                    <h5>Total Pembayaran : Rp <?= number_format($Pelanggan->HitungJumlahBayar(), 0, ",", ".") ?></h5>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>