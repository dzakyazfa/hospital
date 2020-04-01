<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
</head>

<body>
    <header>
        <h3>Formulir Pasien</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>

        <p>
            <label for="Nama_Pasien">Nama: </label>
            <input type="text" name="nama"/>
        </p>
        <p>
            <label for="Jenis_Kelamin">Jenis Kelamin: </label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-Laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
        </p>
        <p>
            <label for="TTL">Tempat, Tanggal Lahir: </label>
            <input type="text" name="TTL" placeholder="kota, tanggal bulan tahun" />
        </p>
        <p>
            <label for="Pekerjaan">Pekerjaan: </label>
            <input type="text" name="Pekerjaan"/>
        </p>
        <p>
            <label for="Tipe_Kamar">Tipe Kamar: </label>
            <select name="Tipe_Kamar">
                <option>President Suit</option>
                <option>VVIP A</option>
                <option>VVIP B</option>
                <option>VVIP C</option>
            </select>
        </p>
        <p>
            <label for="No_Kamar">No Kamar: </label>
            <input type="text" name="No_Kamar"/>
        </p>
        <p>
            <input type="submit" value="Tambah" name="Tambah" />
        </p>

        </fieldset>

    </form>

    </body>
</html>