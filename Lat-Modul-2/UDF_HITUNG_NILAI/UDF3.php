<?php
$kuis = $_POST['kuis'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];

//UDF DENGAN RETURN VALUE
function hitung_nilai($kuis, $uts, $uas)
{
    $nilai = round(($kuis * 0.25 + $uts * 0.35 + $uas * 0.4), 2);
    return $nilai;
}

$na = hitung_nilai($kuis, $uts, $uas);

?>

<!DOCTYPE html>
<html>

<head>
    <title>
        HASIL CEK UDF PALINDROM
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

p {
    margin-bottom: 0%;
}
</style>

<body>
    <div class="container mt-5 mb-5 text-center">
        <div class="container-xl">
            <div class="card p-5 my-2" style="width: 75%;">
                <div class="container text-center">
                    <h1><strong>HASIL OUTPUT NILAI ANDA</strong></h1>
                </div>
                <div class="card p-3" style="width: 80%;">
                    <?php if ($na >= 86) {
                        echo '<h3><strong>Nilai Anda <span style="background:green ; border-style: solid; border-color:green; color:white; border-radius:1vw 1.8vw 1vw; border-width:0.7vw;">A</span></strong></h3>';
                    } else if ($na >= 71) {
                        echo '<h3><strong>Nilai Anda <span style="background:blue ; border-style: solid; border-color:blue; color:white; border-radius:1vw 1.8vw 1vw; border-width:0.7vw;">B</span></strong></h3>';
                    } else if ($na >= 61) {
                        echo '<h3><strong>Nilai Anda <span style="background:yellow ; border-style: solid; border-color:yellow; color:black; border-radius:1vw 1.8vw 1vw; border-width:0.7vw;">C</span></strong></h3>';
                    } else if ($na >= 51) {
                        echo '<h3><strong>Nilai Anda <span style="background:orange ; border-style: solid; border-color:orange; color:white; border-radius:1vw 1.8vw 1vw; border-width:0.7vw;">D</span></strong></h3>';
                    } else {
                        echo '<h3><strong>Nilai Anda <span style="background:red ; border-style: solid; border-color:red; color:white; border-radius:1vw 1.8vw 1vw; border-width:0.7vw;">E</span></strong></h3>';
                    } ?>
                </div>
                <div class="card p-3" style="width: 80%; text-align: left;">
                    <p><span class="material-symbols-outlined"
                            style="font-size: 2vw; align-items: center; vertical-align: middle; color: blue;">
                            menu_book
                        </span> Nilai Kuis (25%) : <?= round($kuis * 0.25, 2) ?></p>
                    <p><span class="material-symbols-outlined"
                            style="font-size: 2vw; align-items: center; vertical-align: middle; color: blue;">
                            menu_book
                        </span> Nilai UTS (35%) : <?= round($uts * 0.35, 2) ?></p>
                    <p><span class="material-symbols-outlined"
                            style="font-size: 2vw; align-items: center; vertical-align: middle; color: blue;">
                            menu_book
                        </span> Nilai UAS (40%) : <?= round($uas * 0.4, 2) ?></p>
                    <hr>
                    <p>Total Nilai Akhir : <?= round($kuis * 0.25 + $uts * 0.35 + $uas * 0.4, 2) ?></p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>