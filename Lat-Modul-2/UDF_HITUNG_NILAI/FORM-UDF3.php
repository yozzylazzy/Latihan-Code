<!DOCTYPE html>
<html>

<head>
    <title>
        HITUNG NILAI AKHIR FORM
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

label {
    margin-bottom: 5%;
}
</style>

<body>
    <!--Mengecek Apakah Kalimat A dengan Kalimat A' sama-->
    <div class="container mt-5 mb-5 text-center">
        <div class="container-xl">
            <div class="card p-5 my-2" style="width: 75%;">
                <div class="container text-center">
                    <h1> <span class="material-symbols-outlined"
                            style="font-size: 5vw; align-items: center; vertical-align: middle; color: green;">
                            receipt_long
                        </span><strong>PENGHITUNG NILAI AKHIR</strong></h1>
                </div>
                <div class="card p-3" style="width: 80%;">
                    <form action="UDF3.php" method="post">
                        <h5 style="text-align: center;">Silahkan Masukkan Nilai Anda</h5>
                        <hr>
                        <div class="row mt-3 text-center">
                            <div class="col-3">
                                <label for="kuis">NILAI KUIS</label>
                                <input type="number" name="kuis" placeholder="80" min="1" max="100" step="0.1"
                                    style="width : 50%;" required>
                            </div>
                            <div class="col-3">
                                <label for="kuis">NILAI UTS</label>
                                <input type="number" name="uts" placeholder="80" min="1" max="100" step="0.1"
                                    style="width : 50%;" required>
                            </div>
                            <div class="col-3">
                                <label for="kuis">NILAI UAS</label>
                                <input type="number" name="uas" placeholder="80" min="1" max="100" step="0.1"
                                    style="width : 50%;" required>
                            </div>
                            <div class="col-3">
                                <input class="btn btn-primary" type="submit" value="SUBMIT" min="1" max="100"
                                    style="height: 6vw;">
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>