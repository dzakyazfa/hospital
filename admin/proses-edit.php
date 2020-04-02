<?php

include("config.php");

if(isset($_POST['Simpan'])){

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $ttl = $_POST['TTL'];
    $pekerjaan = $_POST['pekerjaan'];
    $tipe = $_POST['tipe'];
    $no = $_POST['nomer'];

    $sql = "UPDATE pasien SET nama='$nama', jk='$jk', TTL='$ttl', pekerjaan='$pekerjaan', tipe='$tipe', nomer='$no' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: list-pasien.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }

} else {
    die("Akses dilarang...");
}

?>