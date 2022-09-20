<!DOCTYPE html>
<html>

<head>
    <title>
        DATE CONVERTION FORM
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
    <!--Teksboks saja dengan format di Indonesia "DD-MM-YYY" 
berubah menjadi format "YYYY-MM-DD"-->
    <div class="container mt-5 mb-5 text-center">
        <div class="container-xl">
            <form action="UDF1.php" method="post">
                <div class="card p-5 my-2" style="width: 75%;">
                    <div class="container text-center">
                        <h1><strong>INDONESIAN DATE FORMAT CONVERTION TO SQL</strong></h1>
                    </div>
                    <div class="card p-3" style="width: 80%;">
                        <label for="date" style="text-align: left;">Silahkan Masukkan Tanggal Sesuai Format</label>
                        <input class="form-control" type="text" name="date" placeholder="DD-MM-YYYY"
                            pattern="\d{1,2}-\d{1,2}-\d{4}" required>
                        <input class="btn btn-primary mt-3" type="submit" value="CONVERT">
                    </div>
                </div>
                <!-- JavaScript Bundle with Popper -->
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>

</body>

</html>