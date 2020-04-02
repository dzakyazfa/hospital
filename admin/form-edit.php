<?php

include("config.php");

if( !isset($_GET['id']) ){
    header('Location: list-pasien.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM pasien WHERE id=$id";
$query = mysqli_query($db, $sql);
$pasien = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Aa'Admin</title>
</head>

<body>
    <header>
        <h3>Form Edit Data</h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" value="<?php echo $pasien['nama'] ?>" />
        </p>
        <p>
            <label for="jk">Jenis Kelamin: </label>
            <?php $jk = $pasien['jk']; ?>
            <label><input type="radio" name="jk" value="Laki-Laki" <?php echo ($jk == 'Laki-Laki') ? "checked": "" ?>> Laki-Laki</label>
            <label><input type="radio" name="jk" value="Perempuan" <?php echo ($jk == 'Perempuan') ? "checked": "" ?>> Perempuan</label>
        </p>
        <p>
            <label for="TTL">Tempat, Tanggal Lahir: </label>
            <textarea name="TTL"><?php echo $pasien['TTL'] ?></textarea>
        </p>
        <p>
            <label for="pekerjaan">Pekerjaan: </label>
            <input type="text" name="pekerjaan" value="<?php echo $pasien['pekerjaan'] ?>" />
        </p>
        <p>
            <label for="tipe">Tipe Kamar: </label>
            <?php $tipe = $pasien['tipe']; ?>
            <select name="tipe">
                <option <?php echo ($tipe == 'President Suit') ? "selected": "" ?>>President Suit</option>
                <option <?php echo ($tipe == 'VVIP A') ? "selected": "" ?>>VVIP A</option>
                <option <?php echo ($tipe == 'VVIP B') ? "selected": "" ?>>VVIP B</option>
                <option <?php echo ($tipe == 'VVIP C') ? "selected": "" ?>>VVIP C</option>
                </select>
        </p>
        <p>
            <label for="nomer">No Kamar: </label>
            <textarea name="nomer"><?php echo $pasien['nomer'] ?></textarea>
        </p>
        <p>
            <input type="submit" value="Simpan" name="Simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>