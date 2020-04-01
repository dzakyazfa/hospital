<?php

include("config.php");

if( !isset($_GET['id']) ){
    header('Location: list-pasien.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM pasien WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>EDIT</title>
</head>

<body>
    <header>
        <h3>Formulir Edit Data</h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $pasien['id'] ?>" />

        <p>
            <label for="Nama_Pasien">Nama: </label>
            <input type="text" name="Nama_Pasien" value="<?php echo $pasien['Nama_Pasien'] ?>" />
        </p>
        <p>
            <label for="Jenis_Kelamin">Jenis Kelamin: </label>
            <?php $JK = $pasien['Jenis_Kelamin']; ?>
            <label><input type="radio" name="Jenis_Kelamin" value="laki-Laki" <?php echo ($JK == 'Laki-Laki') ? "checked": "" ?>> Laki-Laki</label>
            <label><input type="radio" name="Jenis_Kelamin" value="perempuan" <?php echo ($JK == 'Perempuan') ? "checked": "" ?>> Perempuan</label>
        </p>
        <p>
            <label for="TTL">Tempat, Tanggal Lahir: </label>
            <input type="text" name="TTL" value="<?php echo $pasien['TTL'] ?>" />
        </p>
        <p>
            <label for="Pekerjaan">Pekerjaan: </label>
            <input type="text" name="Pekerjaan" value="<?php echo $pasien['Pekerjaan'] ?>" />
        </p>
        <p>
            <label for="Tipe_Kamar">Tipe Kamar: </label>
            <?php $Tipe = $pasien['Tipe_Kamar']; ?>
            <select name="Tipe Kamar">
                <option <?php echo ($Tipe == 'President Suit') ? "selected": "" ?>>President Suit</option>
                <option <?php echo ($Tipe == 'VVIP A') ? "selected": "" ?>>VVIP A</option>
                <option <?php echo ($Tipe == 'VVIP B') ? "selected": "" ?>>VVIP B</option>
                <option <?php echo ($Tipe == 'VVIP C') ? "selected": "" ?>>VVIP C</option>
            </select>
        </p>
        <p>
            <label for="No_Kamar">No Kamar: </label>
            <input type="text" name="No_Kamar" value="<?php echo $siswa['No_Kamar'] ?>" />
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>