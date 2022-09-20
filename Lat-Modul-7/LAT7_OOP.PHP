<?php
trait HonorHarian
{
    public function HonorHarian()
    {
        echo "Honor Harian";
    }
    public function setHadir($hadir)
    {
        $this->hadir = $hadir;
    }
    public function setTerlambat($terlambat)
    {
        $this->terlambat = $terlambat;
    }
    public function getHadir()
    {
        return $this->hadir;
    }
    public function getTerlambat()
    {
        return $this->terlambat;
    }
    public function HitungHonorHarian()
    {
        $this->HonorHarian = ($this->hadir * 90000) - ($this->terlambat * 0.01 * 90000 * $this->hadir);
        return $this->HonorHarian;
    }
}
trait HonorLembur
{
    public function HonorLembur()
    {
        echo "Honor Lembur";
    }
    public function setLembur($lembur)
    {
        $this->lembur = $lembur;
    }
    public function getLembur()
    {
        return $this->lembur;
    }
    public function HitungHonorLembur()
    {
        if ($this->lembur > 20) {
            $this->HonorLembur = $this->lembur * 30000;
        } else if ($this->lembur > 10) {
            $this->HonorLembur = $this->lembur * 25000;
        } else {
            $this->HonorLembur = $this->lembur * 20000;
        }
        return $this->HonorLembur;
    }
}

class SATPAM
{
    use HonorHarian;
    protected $Hadir;
    protected $Terlambat;
}

class OB
{
    protected $Hadir;
    protected $Terlambat;
    protected $Lembur;
    protected $HonorLemburPerJam;
    use HonorHarian, HonorLembur;
}

$SATPAM = new SATPAM();
$SATPAM->setHadir(24);
$SATPAM->setTerlambat(4);
/* echo "Hadir : " . $SATPAM->getHadir() . "<BR>";
echo "Terlambat : " . $SATPAM->getTerlambat() . "<BR>";
echo "Honor Harian : " . $SATPAM->HitungHonorHarian() . "<BR>"; */

/* echo '<hr>'; */

$STAFOB = new OB();
$STAFOB->setHadir(25);
$STAFOB->setTerlambat(1);
$STAFOB->setLembur(15);
/* echo "Hadir : " . $STAFOB->getHadir() . "<BR>";
echo "Terlambat : " . $STAFOB->getTerlambat() . "<BR>";
echo "Lembur : " . $STAFOB->getLembur() . "<BR>";
echo "Honor Harian : " . $STAFOB->HitungHonorHarian() . "<BR>";
echo "Honor Lembur : " . $STAFOB->HitungHonorLembur() . "<BR>"; */

if (isset($_POST['submit'])) {
    $SATPAM->setHadir($_POST['kehadiran']);
    $SATPAM->setTerlambat($_POST['keterlambatan']);
    $STAFOB->setHadir($_POST['kehadiran2']);
    $STAFOB->setTerlambat($_POST['keterlambatan2']);
    $STAFOB->setLembur($_POST['lembur']);
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
        TRAIT CLASS PBW-7
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
</head>

<body>
    <div class="container mt-5 mb-5 text-center">
        <div class="container-xl">
            <div class="card p-5 my-2" style="width: 75%;">
                <div class="card p-3" style="width: 80%;">
                    <?php if ($SATPAM->getHadir() != "" && $STAFOB->HitungHonorHarian() != "" && $STAFOB->HitungHonorLembur() != "") {
                        echo '<span class="material-symbols-outlined"
                        style="align-items : center; font-size:8vw; margin-botton:2%; color:green;">
                        check
                    </span>';
                        echo "<h3><b>BERIKUT HASIL SIMULASI NILAI ANDA</b></h3>";
                    } else {
                        echo '<span class="material-symbols-outlined"
                        style="align-items : center; font-size:8vw; margin-botton:2%; color:red;">
                        cancel
                    </span>';
                        echo '<h3><b>NILAI GAGAL DI PROSES</b></h3>';
                    } ?>
                    <hr>
                    <form method="POST" action="" name="form">
                        <div class="row">
                            <div class="col-6">
                                <label style="margin-bottom: 1rem;">FORM SIMULASI GAJI SATPAM</label>
                                <div class="form-group row">
                                    <label for="kehadiran" class="col-lg-5 col-form-label">HADIR</label>
                                    <div class="col-lg-5">
                                        <input id="kehadiran" name="kehadiran" class="form-control" type="number" value="" step="1" min="0" placeholder="Masukkan Total Kehadiran" style="margin-bottom: 1rem;" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="keterlambatan" class="col-lg-5 col-form-label">TERLAMBAT</label>
                                    <div class="col-lg-5">
                                        <input id="keterlambatan" name="keterlambatan" class="form-control" type="number" value="" step="1" min="0" placeholder="Masukkan Total Keterlambatan" style="margin-bottom: 1rem;" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <label style="margin-bottom: 1rem; text-align: center;">FORM SIMULASI GAJI STAFOB</label>
                                <div class="form-group row">
                                    <label for="kehadiran2" class="col-lg-5 col-form-label">HADIR</label>
                                    <div class="col-lg-5">
                                        <input id="kehadiran2" name="kehadiran2" class="form-control" type="number" value="" step=" 1" min="0" placeholder="Masukkan Total Kehadiran" style="margin-bottom: 1rem;" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="keterlambatan2" class="col-lg-5 col-form-label">TERLAMBAT</label>
                                    <div class="col-lg-5">
                                        <input id="keterlambatan2" name="keterlambatan2" class="form-control" type="number" value="" step="1" min="0" placeholder="Masukkan Total Keterlambatan" style="margin-bottom: 1rem;" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lembur" class="col-lg-5 col-form-label">LEMBUR</label>
                                    <div class="col-lg-5">
                                        <input id="lembur" name="lembur" class="form-control" type="number" value="" step="1" min="0" placeholder="Masukkan Total Jam Lembur" style="margin-bottom: 1rem;" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-grid gap-2 mt-3">
                            <button class="btn btn-primary btn-lg btn-block" type="submit" value="submit" name="submit">SUBMIT</button>
                        </div>
                    </form>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">SIMULASI GAJI SATPAM</h5>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">KEHADIRAN : <?= $SATPAM->getHadir() ?></p>
                                    <p class="card-text">KETERLAMBATAN : <?= $SATPAM->getTerlambat() ?></p>
                                    <p class="card-text">TOTAL HONOR HARIAN : <?= $SATPAM->HitungHonorHarian() ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">SIMULASI GAJI STAF OB</h5>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">KEHADIRAN : <?= $STAFOB->getHadir() ?></p>
                                    <p class="card-text">KETERLAMBATAN : <?= $STAFOB->getTerlambat() ?></p>
                                    <p class="card-text">TOTAL JAM LEMBUR : <?= $STAFOB->getLembur() ?></p>
                                    <p class="card-text">TOTAL HONOR HARIAN : <?= $STAFOB->HitungHonorHarian() ?></p>
                                    <p class="card-text">TOTAL HONOR LEMBUR : <?= $STAFOB->HitungHonorLembur() ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>