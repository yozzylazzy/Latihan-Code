<?php
//public tidak di definisikan access modifiernya tidak apa2
//protected dan private dibutuhkan access modifier untuk diimplementasikan
//php adalah caseinsensitive jadi tidak masalah
//Dalam penyebutan tiap property, pada PGP diawali dengan "$" dan diikuti dengan nama property
//Untuk mengambil nama variabel maka "$NamaObject->NamaVariabel" 
//Sementara mengambil atau memanggil method maka "$NamaObject->NamaMethod()"
//kalau disi sendiri "$NamaObject" diganti dengan "$this"
class EfekTeks
{
    public $Teks, $aman;
    function __construct($Teks)
    {
        $this->Teks = $Teks;
    }
    function getText()
    {
        return $this->Teks;
    }
    function getCapital()
    {
        return strtoupper($this->Teks);
    }
    function getLower()
    {
        return strtolower($this->Teks);
    }
    function setTeks($Teks)
    {
        $this->Teks = $Teks;
    }
    function cekInput()
    {
        $aman = false;
        if (isset($this->Teks)) {
            if (is_string($this->Teks) && $this->Teks != "") {
                $aman = true;
            }
        }
        return $aman;
    }
    function setAman($a)
    {
        $this->aman = $a;
    }
    function getAman()
    {
        return $this->aman;
    }
}

$Teks1 = new EfekTeks("");


if (isset($_POST['submit'])) {
    if (isset($_POST['teks']) || $_POST['teks'] != "") {
        $Teks1->setTeks($_POST['teks']);
        $Teks1->setAman("true");
    } else {
        $Teks1->setAman("false");
    }
}
/*
print "Teks Input : " . $Teks1->getText() . "<BR>";
print "Teks Kapital : " . $Teks1->getCapital() . "<BR>";
print "Teks Lower : " . $Teks1->getLower() . "<BR>";*/
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
        HASIL DARI KELAS EFEKTES
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
                    <?php if ($Teks1->cekInput()) {
                        echo '<span class="material-symbols-outlined"
                        style="align-items : center; font-size:8vw; margin-botton:2%; color:green;">
                        check
                    </span>';
                        //print $Teks1->cekInput();
                        echo "<h3><b>KELAS MEMILIKI NILAI, HASIL KELAS EFEKTEKS</b></h3>";
                    } else {
                        echo '<span class="material-symbols-outlined"
                        style="align-items : center; font-size:8vw; margin-botton:2%; color:red;">
                        cancel
                    </span>';
                        echo '<h3><b>KELAS TIDAK MEMILIKI NILAI ATAU KOSONG</b></h3>';
                    } ?>
                    <hr>
                    <form method="POST" action="" name="form">
                        <label for="teks" class="form-label" style="text-align: left;">Teks Input</label>
                        <input id="teks" name="teks" class="form-control" type="text" value=""
                            placeholder="Masukkan Kalimat yang Ingin Anda Ubah">
                        <div class="d-grid gap-2 mt-3">
                            <button class="btn btn-primary btn-lg btn-block" type="submit" value="submit"
                                name="submit">SUBMIT</button>
                        </div>
                    </form>
                    <hr>
                    <h4>Teks Input : <?= $Teks1->getText() ?></h4>
                    <h4>Teks Kapital : <?= $Teks1->getCapital() ?></h4>
                    <h4>Teks Lower : <?= $Teks1->getLower() ?></h4>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script>
    </script>
</body>

</html>