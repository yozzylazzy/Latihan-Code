<?php
class SegiEmpat
{
    public $Panjang;
    public $Lebar;
    public $aman;
    function __construct($Panjang, $Lebar)
    {
        $this->Panjang = $Panjang;
        $this->Lebar = $Lebar;
    }
    function setPanjang($Panjang)
    {
        $this->Panjang = $Panjang;
    }
    function setLebar($Lebar)
    {
        $this->Lebar = $Lebar;
    }
    function getLuas()
    {
        return $this->Panjang * $this->Lebar;
    }
    function getKeliling()
    {
        return 2 * ($this->Panjang + $this->Lebar);
    }

    function cekInput()
    {
        $aman = false;
        if (isset($this->Panjang) && isset($this->Lebar)) {
            if (is_numeric($this->Panjang) && is_numeric($this->Lebar)) {
                $aman = true;
            } else {
                $this->setPanjang(0);
                $this->setLebar(0);
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

$SegiEmpat1 = new SegiEmpat(0, 0);

if (isset($_POST['submit'])) {
    if (isset($_POST['panjang'])  && isset($_POST['lebar'])) {
        $SegiEmpat1->setPanjang($_POST['panjang']);
        $SegiEmpat1->setLebar($_POST['lebar']);
        $SegiEmpat1->setAman("true");
    } else {
        $SegiEmpat1->setAman("false");
    }
}


/*if ($SegiEmpat1->cekInput()) {
    print "Panjang : " . $SegiEmpat1->Panjang . "<BR>";
    print "Lebar : " . $SegiEmpat1->Lebar . "<BR>";
    print "Luas segi-empat : " . $SegiEmpat1->getLuas() . "<BR>";
    print "Keliling segi-empat : " . $SegiEmpat1->getKeliling() . "<BR>";
} else {
    print "Input tidak valid";
}*/
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
        HASIL DARI KELAS SEGIEMPAT
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
                    <?php if ($SegiEmpat1->cekInput()) {
                        echo '<span class="material-symbols-outlined"
                        style="align-items : center; font-size:8vw; margin-botton:2%; color:green;">
                        check
                    </span>';
                        echo "<h3><b>INPUT BENAR, HASIL KELAS SEGIEMPAT</b></h3>";
                    } else {
                        echo '<span class="material-symbols-outlined"
                        style="align-items : center; font-size:8vw; margin-botton:2%; color:red;">
                        cancel
                    </span>';
                        echo '<h3><b>INPUT TIDAK VALID</b></h3>';
                    } ?>
                    <hr>
                    <form method="POST" action="" name="form">
                        <div class="row">
                            <div class="col-6">
                                <label for="teks" class="form-label" style="text-align: left;">Panjang</label>
                                <input id="panjang" name="panjang" class="form-control" type="number" value="" step="1"
                                    placeholder="Masukkan Panjang SegiEmpat">
                            </div>
                            <div class="col-6">
                                <label for="teks" class="form-label" style="text-align: left;">Lebar</label>
                                <input id="lebar" name="lebar" class="form-control" type="number" value="" step="1"
                                    placeholder="Masukkan Lebar SegiEmpat">
                            </div>
                        </div>
                        <div class="d-grid gap-2 mt-3">
                            <button class="btn btn-primary btn-lg btn-block" type="submit" value="submit"
                                name="submit">SUBMIT</button>
                        </div>
                    </form>
                    <hr>
                    <h4>Panjang : <?php
                                    if (isset($SegiEmpat1->Panjang)) {
                                        echo $SegiEmpat1->Panjang;
                                    }
                                    ?></h4>
                    <h4>Lebar : <?= $SegiEmpat1->Lebar ?></h4>
                    <h4>Luas segi-empat : <?= $SegiEmpat1->getLuas() ?></h4>
                    <h4>Keliling segi-empat : <?= $SegiEmpat1->getKeliling() ?></h4>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>