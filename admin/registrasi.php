<?php
include './koneksii.php';
$id = $_POST["id"];
$username = $_POST["username"];
$password = $_POST["password"];


$query = "INSERT INTO admin(id, username, password)
          VALUES ('$id','$username', '$password')";
$result = mysqli_query($connect, $query);
$num = mysqli_affected_rows($connect);
if($num>0){
    echo"Berhasil Tambah Data. <a href='index.php'>Kembali</a>";
}else{
    echo"Tidak Berhasil Tambah Data ".mysqli_connect_error();
}
?>