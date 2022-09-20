<?php

$kal = $_POST['kal'];

//UDF DENGAN RETURN VALUE
function Polindrom_Cek($text)
{
    $temp = strrev($text);
    if (strtoupper($temp == $text)) {
        return true;
    } else {
        return false;
    }
}
//Polindrom_Cek($kal);

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
</style>

<body>
    <div class="container mt-5 mb-5 text-center">
        <div class="container-xl">
            <div class="card p-5 my-2" style="width: 75%;">
                <div class="container text-center">
                    <h1><strong>HASIL CEK POLINDROM</strong></h1>
                </div>
                <div class="card p-3" style="width: 80%;">
                    <?php if (Polindrom_Cek($kal) == "KALIMAT POLINDROM") {
                        echo '<span class="material-symbols-outlined" style="align-items : center; font-size:8vw; margin-botton:2%; color:green;">
                         check
                         </span>';
                        echo '<h3><b>KALIMAT POLINDROM</b></h3>';
                    } else {
                        echo '<span class="material-symbols-outlined" style="align-items : center; font-size:8vw; margin-botton:2%; color:red;">
                         cancel
                         </span>';
                        echo '<h3><b>BUKAN KALIMAT POLINDROM</b></h3>';
                    } ?>
                    <hr>
                    <h4>Kalimat Input : <?= $kal ?></h4>
                    <h4>Kalimat Reverse : <?= strrev($kal); ?></h4>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>