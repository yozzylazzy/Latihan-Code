<?php

class Montir
{
    public $JumlahHadir;
    public $JumlahAbsen;
    public $HonorHarian;
    public $UangTransport;
    public $TotalGaji;

    function setHadir($Hadir)
    {
        $this->JumlahHadir = $Hadir;
    }
    function setAbsen($Absen)
    {
        $this->JumlahAbsen = $Absen;
    }
    function getHadir()
    {
        return $this->JumlahHadir;
    }
    function getAbsen()
    {
        return $this->JumlahAbsen;
    }
    function HitungHonorHarian()
    {
        return $this->JumlahHadir * 100000;
    }
    function HitungUangTransport()
    {
        return $this->JumlahHadir * 25000;
    }
    function HitungTotalGaji()
    {
        return $this->HitungHonorHarian() + $this->HitungUangTransport();
    }
}

class Kepala_Montir extends Montir
{
    public $TunjanganKepala;
    public $PotonganAbsen;
    function HitungTunjangan()
    {
        return $this->HitungHonorHarian() * 0.5;
    }
    function HitungPotongan()
    {
        return $this->JumlahAbsen * 50000;
    }
    //Override HitungTotalGaji()
    function HitungTotalGaji()
    {
        return $this->HitungHonorHarian() + $this->HitungUangTransport() + $this->HitungTunjangan() - $this->HitungPotongan();
    }
}

$Montir = new Montir();
$Montir->setHadir(20);
$Montir->setAbsen(3);
/*echo "Jumlah Hadir : " . $Montir->getHadir() . " Hari" . "<br>";
echo "Jumlah Absen : " . $Montir->getAbsen() . " Hari" . "<br>";
echo "Honor Harian : Rp. " . $Montir->HitungHonorHarian() . "<br>";
echo "Uang Transport : Rp. " . $Montir->HitungUangTransport() . "<br>";
echo "Total Gaji : Rp. " . $Montir->HitungTotalGaji() . "<br>";
echo "<hr>";*/
$Kepala_Montir = new Kepala_Montir();
$Kepala_Montir->setHadir(20);
$Kepala_Montir->setAbsen(3);
/*echo "Jumlah Hadir : " . $Kepala_Montir->getHadir() . " Hari" . "<br>";
echo "Jumlah Absen : " . $Kepala_Montir->getAbsen() . " Hari" . "<br>";
echo "Honor Harian : Rp. " . $Kepala_Montir->HitungHonorHarian() . "<br>";
echo "Uang Transport : Rp. " . $Kepala_Montir->HitungUangTransport() . "<br>";
echo "Tunjangan Kepala : Rp. " . $Kepala_Montir->HitungTunjangan() . "<br>";
echo "Potongan Absen : Rp. " . $Kepala_Montir->HitungPotongan() . "<br>";
echo "Total Gaji : Rp. " . $Kepala_Montir->HitungTotalGaji() . "<br>";*/


if (isset($_POST['submit'])) {
    if (isset($_POST['hadir'])  && isset($_POST['absen'])) {
        if ($_POST['hadir'] != "" && $_POST['absen'] != "") {
            $Kepala_Montir->setHadir($_POST['hadir']);
            $Kepala_Montir->setAbsen($_POST['absen']);
            $Montir->setHadir($Kepala_Montir->getHadir());
            $Montir->setAbsen($Kepala_Montir->getAbsen());
        } else {
            $Kepala_Montir->setHadir(0);
            $Kepala_Montir->setAbsen(0);
            $Montir->setHadir(0);
            $Montir->setAbsen(0);
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
        PERHITUNGAN GAJI MONTIR
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
                    <?php if ($Montir->getAbsen() != null && $Montir->getAbsen() != null) {
                        echo '<span class="material-symbols-outlined"
                        style="align-items : center; font-size:8vw; margin-botton:2%; color:green;">
                        check
                    </span>';
                        echo "<h3><b>BERHASIL DI PROSES, BERIKUT SIMULASI GAJI MONTIR</b></h3>";
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
                            <div class="col-6">
                                <label for="teks" class="form-label" style="text-align: left;">Jumlah Kehadiran</label>
                                <input id="hadir" name="hadir" class="form-control" type="number" value="" step="1"
                                    min="0" placeholder="Jumlah Kehadian Montir">
                            </div>
                            <div class="col-6">
                                <label for="teks" class="form-label" style="text-align: left;">Jumlah Absen</label>
                                <input id="absen" name="absen" class="form-control" type="number" value="" step="1"
                                    min="0" placeholder="Jumlah Absen Montir">
                            </div>
                        </div>
                        <div class="d-grid gap-2 mt-3">
                            <button class="btn btn-primary btn-lg btn-block" type="submit" value="submit"
                                name="submit">SUBMIT</button>
                        </div>
                    </form>
                    <hr>
                    <h4><b>CLASS MONTIR</b></h4>
                    <h5>Jumlah Kehadiran : <?= $Montir->getHadir() ?></h5>
                    <h5>Jumlah Absen : <?= $Montir->getAbsen() ?></h5>
                    <h5>Honor Harian : Rp <?= number_format($Montir->HitungHonorHarian(), 0, ",", ".") ?></h5>
                    <h5>Uang Transport : Rp <?= number_format($Montir->HitungUangTransport(), 0, ",", ".") ?></h5>
                    <h5>Jumlah Gaji : Rp <?= number_format($Montir->HitungTotalGaji(), 0, ",", ".") ?></h5>
                    <hr>
                    <h4><b>CLASS KEPALA MONTIR</b></h4>
                    <h5>Jumlah Kehadiran : <?= $Kepala_Montir->getHadir() ?></h5>
                    <h5>Jumlah Absen : <?= $Kepala_Montir->getAbsen() ?></h5>
                    <h5>Honor Harian : Rp <?= number_format($Kepala_Montir->HitungHonorHarian(), 0, ",", ".") ?></h5>
                    <h5>Uang Transport : Rp <?= number_format($Kepala_Montir->HitungUangTransport(), 0, ",", ".") ?>
                    </h5>
                    <h5>Tunjangan Kepala : Rp <?= number_format($Kepala_Montir->HitungTunjangan(), 0, ",", ".") ?></h5>
                    <h5>Potongan Absen : Rp <?= number_format($Kepala_Montir->HitungPotongan(), 0, ",", ".") ?></h5>
                    <h5>Jumlah Gaji : Rp <?= number_format($Kepala_Montir->HitungTotalGaji(), 0, ",", ".") ?></h5>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>