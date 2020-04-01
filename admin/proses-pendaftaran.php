<?php

include("config.php");

if(isset($_POST['Tambah'])){

    $Nama = $_POST['Nama_Pasien'];
    $JK = $_POST['Jenis_Kelamin'];
    $ttl = $_POST['TTL'];
    $pekerjaan = $_POST['Pekerjaan'];
    $Tipe = $_POST['Tipe_kamar'];
    $no = $_POST['No_kamar'];

    $sql = "INSERT INTO pasien (Nama_Pasien, Jenis_Kelamin, TTL, Pekerjaan, Tipe_Kamar, No_Kamar) VALUE ('$Nama', '$JK', '$ttl', '$pekerjaan', '$Tipe', '$no')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: list-pasien.php?status=sukses');
    } else {
        header('Location: list-pasien.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>