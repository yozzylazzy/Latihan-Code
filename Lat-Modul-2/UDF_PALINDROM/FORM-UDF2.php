<!DOCTYPE html>
<html>

<head>
    <title>
        PALINDROM TEXT FORM
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<style>
.card {
    margin: 0 auto;
    float: none;
    margin-bottom: 10px;
}
</style>

<body>
    <!--Mengecek Apakah Kalimat A dengan Kalimat A' sama-->
    <div class="container mt-5 mb-5 text-center">
        <div class="container-xl">
            <div class="card p-5 my-2" style="width: 75%;">
                <div class="container text-center">
                    <h1><strong>PENGECEK KALIMAT PALINDROM</strong></h1>
                </div>
                <div class="card p-3" style="width: 80%;">
                    <form action="UDF2.php" method="post">
                        <label for="date" style="text-align: center;">Silahkan Masukkan Kalimat Untuk di Cek
                            Apakah Palindrom</label>
                        <div class="row mt-3">
                            <div class="col-9">
                                <input class="form-control" type="text" name="kal" placeholder="Apa apa opo apa apa"
                                    width="100" required>
                            </div>
                            <div class="col-3">
                                <input class="btn btn-primary" type="submit" value="SUBMIT">
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>


</body>

</html>