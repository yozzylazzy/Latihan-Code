<?php
$npm = $_POST['npm'];
$sks = $_POST['sks'];
$praktika = $_POST['praktika'];

//Manfaatkan built in function substr
//NPM tediri dari 10 digit
//Tampilkan jenjang pendidikan, nama fakultas, dan total biaya kuliah


if (substr($npm, 4, 1) == 2) {
    $biayasks = 350000;
    $biayapraktika = 500000;
    $jenjang = "Magister";
} else if (substr($npm, 4, 1) == 1) {
    $biayasks = 250000;
    $biayapraktika = 400000;
    $jenjang = "Sarjana";
} else if (substr($npm, 4, 1) == 0) {
    $biayasks = 200000;
    $biayapraktika = 300000;
    $jenjang = "Diploma III";
} else {
    $biayasks = 0;
    $biayapraktika = 0;
    $jenjang = "error";
}

if (substr($npm, 5, 1) == 1) {
    $biayapengembangan = 1000000;
    $fakultas = "Ekonomi";
} else if (substr($npm, 5, 1) == 2) {
    $biayapengembangan = 1500000;
    $fakultas = "Teknik";
} else {
    $biayapengembangan = 0;
    $fakultas = "error";
}

$totalbiayasks = $biayasks * $sks;
$totalbiayapraktika = $biayapraktika * $praktika;
$total = $totalbiayasks + $totalbiayapraktika + $biayapengembangan;
?>

<!DOCTYPE html>
<html>

<head>
    <title>
        HASIL SUMBISI FORM
    </title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
</head>

<body>
    <header>
        <div class="fluid-container bg-dark text-center text-white p-4">
            <h2>INFORMASI DATA SUBMISI</h2>
        </div>
    </header>
    <main>
        <div class="container mt-3 mb-3">
            <div class="card">
                <div class="row">
                    <div class="col-4" style="">
                        <span class="material-symbols-outlined"
                            style="font-size: 14vw; vertical-align: middle;margin:auto;">
                            person
                        </span>
                    </div>
                    <div class="col-8">
                        <H4>INFORMASI MAHASISWA</H4>
                        <p>NPM : <?= $npm ?> </p>
                        <p>Jumlah SKS : <?= $sks ?> </p>
                        <p>Jumlah Praktika : <?= $praktika ?> </p>

                        <p>Jenjang Pendidikan : <?= $jenjang ?> </p>
                        <p>Nama Fakultas : <?= $fakultas ?> </p>
                    </div>
                </div>


            </div>
            <div class="mt-2 mb-2">
                <div class="card">
                    <div class="row">
                        <div class="col-4">
                            <span class="material-symbols-outlined"
                                style="font-size: 14vw; vertical-align: middle;margin:auto;text-align:center">
                                payments
                            </span>
                        </div>
                        <div class="col-8">
                            <H4>RINCIAN PEMBAYARAN KULIAH</H4>
                            <p>Total Biaya SKS :<?= $totalbiayasks ?></p>
                            <p>Total Biaya Praktika :<?= $totalbiayapraktika ?></p>
                            <p>Total Biaya Pengembangan :<?= $biayapengembangan ?></p>
                            <hr>
                            <p>Total Biaya Kuliah :<?= $total ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <footer>
        <div class="fluid-container bg-dark text-center text-white p-3">
            <h5>Developed By @Yosef Adrian</h5>
        </div>
    </footer>
</body>

</html>