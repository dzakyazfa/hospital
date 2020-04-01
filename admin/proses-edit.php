<?php

include("config.php");

if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $Nama = $_POST['Nama_Pasien'];
    $JK = $_POST['Jenis_Kelamin'];
    $ttl = $_POST['TTL'];
    $pekerjaan = $_POST['Pekerjaan'];
    $Tipe = $_POST['Tipe_Kamar'];
    $no = $_POST['No_Kamar'];
    
    $sql = "UPDATE pasien SET Nama_Pasien='$Nama', Jenis_Kelamin='$JK', TTL='$ttl', Pekerjaan='$pekerjaan', Tipe_Kamar='$Tipe', No_Kamar='$no' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ) {

        header('Location: list-pasien.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>