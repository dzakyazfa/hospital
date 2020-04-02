<?php

include("config.php");

if(isset($_POST['Tambah'])){

    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $ttl = $_POST['TTL'];
    $pekerjaan = $_POST['pekerjaan'];
    $tipe = $_POST['tipe'];
    $no = $_POST['nomer'];

    $sql = "INSERT INTO pasien (nama, jk, TTL, pekerjaan, tipe, nomer) VALUE ('$nama', '$jk', '$ttl', '$pekerjaan', '$tipe', '$no')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: data.php?status=sukses');
    } else {
        header('Location: data.php?status=gagal');
    }

} else {
    die("Akses dilarang...");
}

?>