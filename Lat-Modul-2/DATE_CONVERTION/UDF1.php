<?php

//UDF DENGAN VARIABLE RETURN VALUE-PASS REFERENCE
function date_conversion_substr(&$date)
{
    $day = substr($date, 0, 2);
    $month = substr($date, 3, 2);
    $year = substr($date, 6, 4);
    $date = $year . "-" . $month . "-" . $day;
}
$date = $_POST['date'];

//UDF DENGAN PARAMETER DAN RETURN VALUE
/*function date_convertion($date)
{
    $date = explode("-", $date);
    $date = $date[2] . "-" . $date[1] . "-" . $date[0];
    return $date;
}*/

//print date_convertion($date);

date_conversion_substr($date);
//print $date;

?>

<!DOCTYPE html>
<html>

<head>
    <title>
        HASIL DATE CONVERTION
    </title>
    <!-- CSS only -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <div class="container mt-5 mb-5 text-center">
        <div class="container-xl">
            <form action="UDF1.php" method="post">
                <div class="card p-5 my-2" style="width: 75%;">
                    <div class="container text-center">
                        <h1><strong>HASIL KONVERSI TANGGAL ANDA</strong></h1>
                    </div>
                    <div class="card p-3" style="width: 80%;">
                        <h3><?= $date ?></h3>
                    </div>
                </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>