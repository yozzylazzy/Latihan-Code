<?php
abstract class BANGUN_DATAR
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function dekrispi(): String
    {
        return "Luas " . $this->name . " = ";
    }
    abstract public function HITUNG_LUAS();
}
class BUJURSANGKAR extends BANGUN_DATAR
{
    protected int $sisi;
    public function set_sisi(int $sisi)
    {
        $this->sisi = $sisi;
    }
    public function get_sisi()
    {
        return $this->sisi;
    }
    public function HITUNG_LUAS()
    {
        return $this->sisi * $this->sisi;
    }
}

class SEGITIGA extends BANGUN_DATAR
{
    protected $alas;
    protected $tinggi;
    public function __construct($alas, $tinggi)
    {
        parent::__construct("Segitiga Siku-Siku");
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }
    public function set_alas($alas)
    {
        $this->alas = $alas;
    }

    public function set_tinggi($tinggi)
    {
        $this->tinggi = $tinggi;
    }

    public function get_alas()
    {
        return $this->alas;
    }

    public function get_tinggi()
    {
        return $this->tinggi;
    }

    public function HITUNG_LUAS()
    {
        return $this->alas * $this->tinggi / 2;
    }
}

class LINGKARAN extends BANGUN_DATAR
{
    protected $jari;
    public function set_jari($jari)
    {
        $this->jari = $jari;
    }
    public function get_jari()
    {
        return $this->jari;
    }

    public function HITUNG_LUAS()
    {
        return round(3.14 * $this->jari * $this->jari);
    }
}



$bujursangkar = new BUJURSANGKAR("Bujursangkar");
$bujursangkar->set_sisi(4);
//echo "Sisi : " . $bujursangkar->get_sisi() . "<br>";
//echo $bujursangkar->dekrispi() . $bujursangkar->HITUNG_LUAS() . "<br>";

//echo "<hr>";

$segitiga = new SEGITIGA(5, 8);
//echo "Alas : " . $segitiga->get_alas() . "<br>";
//echo "Tinggi : " . $segitiga->get_tinggi() . "<br>";
//echo $segitiga->dekrispi() . $segitiga->HITUNG_LUAS() . "<br>";

//echo "<hr>";

$lingkaran = new LINGKARAN("Lingkaran");
$lingkaran->set_jari(7);
//echo "Jari-Jari : " . $lingkaran->get_jari() . "<br>";
//echo $lingkaran->dekrispi() . $lingkaran->HITUNG_LUAS() . "<br>";

if (isset($_POST['submit'])) {
    if (isset($_POST['alas']) && isset($_POST['tinggi']) && isset($_POST['jari']) && isset($_POST['sisi'])) {
        if ($_POST['alas'] != "" && $_POST['tinggi'] != "" && $_POST['jari'] != "" && $_POST['sisi'] != "") {
            $segitiga->set_alas($_POST['alas']);
            $segitiga->set_tinggi($_POST['tinggi']);
            $bujursangkar->set_sisi($_POST['sisi']);
            $lingkaran->set_jari($_POST['jari']);
        } else {
            $segitiga->set_alas(0);
            $segitiga->set_tinggi(0);
            $bujursangkar->set_sisi(0);
            $lingkaran->set_jari(0);
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>
        ABSTRACT CLASS
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
</head>

<style>
.card {
    margin: 0 auto;
    float: none;
    margin-bottom: 10px;
}
</style>

<body>
    <div class="container mt-5 mb-5 text-center">
        <div class="container-xl">
            <div class="card p-5 my-2" style="width: 75%;">
                <div class="card p-3" style="width: 80%;">
                    <?php if ($bujursangkar->get_sisi() != 0 && $lingkaran->get_jari() != 0 && $segitiga->get_alas() != 0 && $segitiga->get_tinggi() != 0) {
                        echo '<span class="material-symbols-outlined"
                        style="align-items : center; font-size:8vw; margin-botton:2%; color:green;">
                        check
                    </span>';
                        echo "<h3><b>BERIKUT HASIL DARI ABSTRACT CLASS</b></h3>";
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
                            <div class="col-3">
                                <label for="sisi" class="form-label" style="text-align: left;">Sisi</label>
                                <input id="sisi" name="sisi" class="form-control" type="number" value="" step="1"
                                    min="0" placeholder="Masukkan Sisi BujurSangkar" required>
                            </div>
                            <div class="col-3">
                                <label for="alas" class="form-label" style="text-align: left;">Alas</label>
                                <input id="alas" name="alas" class="form-control" type="number" value="" step="1"
                                    min="0" placeholder="Masukkan Alas Segitiga" required>
                            </div>
                            <div class="col-3">
                                <label for="tinggi" class="form-label" style="text-align: left;">Tinggi</label>
                                <input id="tinggi" name="tinggi" class="form-control" type="number" value="" step="1"
                                    min="0" placeholder="Masukkan Tinggi Segitiga" required>
                            </div>
                            <div class="col-3">
                                <label for="jari" class="form-label" style="text-align: left;">Jari-Jari</label>
                                <input id="jari" name="jari" class="form-control" type="number" value="" step="1"
                                    min="0" placeholder="Masukkan Jari-Jari Lingkaran" required>
                            </div>
                        </div>
                        <div class="d-grid gap-2 mt-3">
                            <button class="btn btn-primary btn-lg btn-block" type="submit" value="submit"
                                name="submit">SUBMIT</button>
                        </div>
                    </form>
                    <hr>
                    <h4><b>BUJURSANGKAR</b></h4>
                    <h5>Sisi : <?= $bujursangkar->get_sisi() ?></h5>
                    <h5><?= $bujursangkar->dekrispi() . $bujursangkar->HITUNG_LUAS() ?></h5>
                    <hr>
                    <h4><b>SEGITGA SIKU-SIKU</b></h4>
                    <h5>Alas : <?= $segitiga->get_alas() ?></h5>
                    <h5>Tinggi : <?= $segitiga->get_tinggi() ?></h5>
                    <h5><?= $segitiga->dekrispi() . $segitiga->HITUNG_LUAS() ?></h5>
                    <hr>
                    <h4><b>LINGKARAN</b></h4>
                    <h5>Jari-Jari : <?= $lingkaran->get_jari() ?></h5>
                    <h5><?= $lingkaran->dekrispi() . $lingkaran->HITUNG_LUAS() ?></h5>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>