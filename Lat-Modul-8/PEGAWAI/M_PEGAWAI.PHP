<?php
function KoneksiDB(){
    $host = "localhost";
    $user = "root";
    $psw = "yosef29";
    $db = "pegawai";
    return mysqli_connect($host, $user, $psw, $db);
}
function LoadPegawai(){
    $koneksi = KoneksiDB();
    $sql = "select nip, nama, golongan, divisi, alamat from pegawai";
    $result = mysqli_query($koneksi, $sql);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}
$data_pegawai = LoadPegawai();
?>