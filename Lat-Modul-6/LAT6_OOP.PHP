<?php
interface NILAI
{
    function HITUNG_NA();
    function STATUS_KELULUSAN();
}

class NILAI_NON_PRAKTIKA implements NILAI
{
    protected $quiz;
    protected $uts;
    protected $uas;
    function set_quiz($nilai)
    {
        $this->quiz = $nilai;
    }
    function set_uts($nilai)
    {
        $this->uts = $nilai;
    }
    function set_uas($nilai)
    {
        $this->uas = $nilai;
    }
    function get_quiz()
    {
        return $this->quiz;
    }
    function get_uts()
    {
        return $this->uts;
    }
    function get_uas()
    {
        return $this->uas;
    }

    function HITUNG_NA()
    {
        return ($this->quiz * 0.2 + $this->uts * 0.3 + $this->uas * 0.5);
    }
    function STATUS_KELULUSAN()
    {
        if ($this->HITUNG_NA() > 70) {
            return "LULUS";
        } else if ($this->HITUNG_NA() >= 50) {
            return "REMEDIAL";
        } else {
            return "GAGAL";
        }
    }
}

class NILAI_PRAKTIKA implements NILAI
{
    protected $praktika1;
    protected $praktika2;
    protected $praktika3;
    protected $praktika4;
    protected $praktika5;

    function set_praktika1($nilai)
    {
        $this->praktika1 = $nilai;
    }
    function set_praktika2($nilai)
    {
        $this->praktika2 = $nilai;
    }
    function set_praktika3($nilai)
    {
        $this->praktika3 = $nilai;
    }
    function set_praktika4($nilai)
    {
        $this->praktika4 = $nilai;
    }
    function set_praktika5($nilai)
    {
        $this->praktika5 = $nilai;
    }
    function get_praktika1()
    {
        return $this->praktika1;
    }
    function get_praktika2()
    {
        return $this->praktika2;
    }
    function get_praktika3()
    {
        return $this->praktika3;
    }
    function get_praktika4()
    {
        return $this->praktika4;
    }
    function get_praktika5()
    {
        return $this->praktika5;
    }
    function HITUNG_NA()
    {
        return ($this->praktika1 + $this->praktika2 + $this->praktika3 + $this->praktika4 + $this->praktika5) / 5;
    }
    function STATUS_KELULUSAN()
    {
        if ($this->HITUNG_NA() >= 60) {
            return "LULUS";
        } else {
            return "TIDAK LULUS";
        }
    }
}

$nilai_non_praktika = new NILAI_NON_PRAKTIKA();
$nilai_non_praktika->set_quiz(70);
$nilai_non_praktika->set_uts(85);
$nilai_non_praktika->set_uas(30);
//echo "Nilai Quiz : " . $nilai_non_praktika->get_quiz() . "<br>";
//echo "Nilai UTS : " . $nilai_non_praktika->get_uts() . "<br>";
//echo "Nilai UAS : " . $nilai_non_praktika->get_uas() . "<br>";
//echo "Nilai Praktika : " . $nilai_non_praktika->HITUNG_NA() . " Status Kelulusan : " . $nilai_non_praktika->STATUS_KELULUSAN() . "<BR>";
//echo "Status Kelulusan : " . $nilai_non_praktika->STATUS_KELULUSAN() . "<BR>";

//echo "<hr>";
$nilai_praktika = new NILAI_PRAKTIKA();
$nilai_praktika->set_praktika1(90);
$nilai_praktika->set_praktika2(75);
$nilai_praktika->set_praktika3(55);
$nilai_praktika->set_praktika4(60);
$nilai_praktika->set_praktika5(80);
//echo "Nilai Praktika 1 : " . $nilai_praktika->get_praktika1() . "<br>";
//echo "Nilai Praktika 2 : " . $nilai_praktika->get_praktika2() . "<br>";
//echo "Nilai Praktika 3 : " . $nilai_praktika->get_praktika3() . "<br>";
//echo "Nilai Praktika 4 : " . $nilai_praktika->get_praktika4() . "<br>";
//echo "Nilai Praktika 5 : " . $nilai_praktika->get_praktika5() . "<br>";
//echo "Nilai Praktika : " . $nilai_praktika->HITUNG_NA() . " Status Kelulusan : " . $nilai_praktika->STATUS_KELULUSAN() . "<BR>";
//echo "Status Kelulusan : " . $nilai_praktika->STATUS_KELULUSAN() . "<BR>";
if (isset($_POST['submit'])) {
    /* echo $_POST['praktika2'];
    echo $_POST['praktika3'];
    echo $_POST['praktika4'];
    echo $_POST['praktika5'];*/
    if (isset($_POST['quiz']) && isset($_POST['uts']) && isset($_POST['uas']) && isset($_POST['praktika1']) && isset($_POST['praktika2']) && isset($_POST['praktika3']) && isset($_POST['praktika4']) && isset($_POST['praktika5'])) {
        if ($_POST['quiz'] != "" && $_POST['uts'] != "" && $_POST['uas'] != "" && $_POST['praktika1'] != "" && $_POST['praktika2'] != "" && $_POST['praktika3'] != "" && $_POST['praktika4'] != "" && $_POST['praktika5'] != "") {
            $nilai_non_praktika->set_quiz($_POST['quiz']);
            $nilai_non_praktika->set_uts($_POST['uts']);
            $nilai_non_praktika->set_uas($_POST['uas']);
            $nilai_praktika->set_praktika1($_POST['praktika1']);
            $nilai_praktika->set_praktika2($_POST['praktika2']);
            $nilai_praktika->set_praktika3($_POST['praktika3']);
            $nilai_praktika->set_praktika4($_POST['praktika4']);
            $nilai_praktika->set_praktika5($_POST['praktika5']);
        } else {
            $nilai_non_praktika->set_quiz("0");
            $nilai_non_praktika->set_uts("0");
            $nilai_non_praktika->set_uas("0");
            $nilai_praktika->set_praktika1("0");
            $nilai_praktika->set_praktika2("0");
            $nilai_praktika->set_praktika3("0");
            $nilai_praktika->set_praktika4("0");
            $nilai_praktika->set_praktika5("0");
        }
    }
}


?>

<!DOCTYPE html>
<html>

<head>
    <title>
        INTERFACE CLASS
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
                    <?php if (
                        $nilai_non_praktika->get_quiz() != null &&
                        $nilai_non_praktika->get_uts() != null &&
                        $nilai_non_praktika->get_uas() != null &&
                        $nilai_praktika->get_praktika1() != null &&
                        $nilai_praktika->get_praktika2() != null &&
                        $nilai_praktika->get_praktika3() != null &&
                        $nilai_praktika->get_praktika4() != null &&
                        $nilai_praktika->get_praktika5() != null
                    ) {
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
                                <label style="margin-bottom: 1rem;">Form Nilai NON-PRAKTIKA</label>
                                <div class="form-group row">
                                    <label for="quiz" class="col-lg-5 col-form-label">Nilai Quiz</label>
                                    <div class="col-lg-5">
                                        <input id="quiz" name="quiz" class="form-control" type="number"
                                            value="<?= $nilai_non_praktika->get_quiz() ?>" step="1" min="0"
                                            placeholder="Masukkan Nilai Quiz" style="margin-bottom: 1rem;" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="uts" class="col-lg-5 col-form-label">Nilai UTS</label>
                                    <div class="col-lg-5">
                                        <input id="uts" name="uts" class="form-control" type="number"
                                            value="<?= $nilai_non_praktika->get_uts() ?>" step="1" min="0"
                                            placeholder="Masukkan Nilai UTS" style="margin-bottom: 1rem;" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="uas" class="col-lg-5 col-form-label">Nilai UAS</label>
                                    <div class="col-lg-5">
                                        <input id="uas" name="uas" class="form-control" type="number"
                                            value="<?= $nilai_non_praktika->get_uas() ?>" step="1" min="0"
                                            placeholder="Masukkan Nilai UAS" style="margin-bottom: 1rem;" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <label style="margin-bottom: 1rem; text-align: center;">Form Nilai PRAKTIKA</label>
                                <div class="form-group row">
                                    <label for="praktika1" class="col-lg-5 col-form-label">Nilai Praktika-1</label>
                                    <div class="col-lg-5">
                                        <input id="praktika1" name="praktika1" class="form-control" type="number"
                                            value="<?= $nilai_praktika->get_praktika1() ?>" step=" 1" min="0"
                                            placeholder="Masukkan Nilai Praktika-1" style="margin-bottom: 1rem;"
                                            required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="praktika2" class="col-lg-5 col-form-label">Nilai Praktika-2</label>
                                    <div class="col-lg-5">
                                        <input id="praktika2" name="praktika2" class="form-control" type="number"
                                            value="<?= $nilai_praktika->get_praktika2() ?>" step="1" min="0"
                                            placeholder="Masukkan Nilai Praktika-2" style="margin-bottom: 1rem;"
                                            required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="praktika3" class="col-lg-5 col-form-label">Nilai Praktika-3</label>
                                    <div class="col-lg-5">
                                        <input id="praktika3" name="praktika3" class="form-control" type="number"
                                            value="<?= $nilai_praktika->get_praktika3() ?>" step="1" min="0"
                                            placeholder="Masukkan Nilai Praktika-3" style="margin-bottom: 1rem;"
                                            required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="praktika4" class="col-lg-5 col-form-label">Nilai Praktika-4</label>
                                    <div class="col-lg-5">
                                        <input id="praktika4" name="praktika4" class="form-control" type="number"
                                            value="<?= $nilai_praktika->get_praktika4() ?>" step="1" min="0"
                                            placeholder="Masukkan Nilai Praktika-4" style="margin-bottom: 1rem;"
                                            required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="praktika5" class="col-lg-5 col-form-label">Nilai Praktika-5</label>
                                    <div class="col-lg-5">
                                        <input id="praktika5" name="praktika5" class="form-control" type="number"
                                            value="<?= $nilai_praktika->get_praktika5() ?>" step="1" min="0"
                                            placeholder="Masukkan Nilai Praktika-5" style="margin-bottom: 1rem;"
                                            required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-grid gap-2 mt-3">
                            <button class="btn btn-primary btn-lg btn-block" type="submit" value="submit"
                                name="submit">SUBMIT</button>
                        </div>
                    </form>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Hasil Nilai Non-Praktika</h5>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Quiz : <?= $nilai_non_praktika->get_quiz() ?></p>
                                    <p class="card-text">UTS : <?= $nilai_non_praktika->get_uts() ?></p>
                                    <p class="card-text">UAS : <?= $nilai_non_praktika->get_uas() ?></p>
                                    <p class="card-text">Nilai Akhir : <?= $nilai_non_praktika->HITUNG_NA() ?></p>
                                    <p class="card-text">STATUS KELULUSAN :
                                        <?= $nilai_non_praktika->STATUS_KELULUSAN() ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Hasil Nilai Praktika</h5>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Praktika-1 : <?= $nilai_praktika->get_praktika1() ?></p>
                                    <p class="card-text">Praktika-2 : <?= $nilai_praktika->get_praktika2() ?></p>
                                    <p class="card-text">Praktika-3: <?= $nilai_praktika->get_praktika3() ?></p>
                                    <p class="card-text">Praktika-4 : <?= $nilai_praktika->get_praktika4() ?></p>
                                    <p class="card-text">Praktika-5 : <?= $nilai_praktika->get_praktika5() ?></p>
                                    <p class="card-text">Nilai Akhir : <?= $nilai_praktika->HITUNG_NA() ?></p>
                                    <p class="card-text">STATUS KELULUSAN :
                                        <?= $nilai_praktika->STATUS_KELULUSAN() ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>