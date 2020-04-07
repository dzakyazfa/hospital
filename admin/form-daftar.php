<!DOCTYPE html>
<html>
<head>
    <title>Aa'Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <h3>Form Data Pasien</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama"/>
        </p>
        <p>
            <label for="jk">Jenis Kelamin: </label>
            <label><input type="radio" name="jk" value="Laki-Laki"> Laki-Laki</label>
            <label><input type="radio" name="jk" value="Perempuan"> Perempuan</label>
        </p>
        <p>
            <label for="TTL">Tempat, Tanggal Lahir: </label>
            <textarea name="TTL"></textarea>
        </p>
        <p>
            <label for="pekerjaan">Pekerjaan: </label>
            <input type="text" name="pekerjaan">
        </p>
        <p>
            <label for="tipe">Tipe Kamar: </label>
            <select name="tipe">
                <option>President Suit</option>
                <option>VVIP A</option>
                <option>VVIP B</option>
                <option>VVIP C</option>
            </select>
        </p>
        <p>
            <label for="nomer">No Kamar: </label>
            <textarea name="nomer"></textarea>
        </p>
        <p>
            <input type="submit" value="Tambah" name="Tambah" />
        </p>

        </fieldset>

    </form>

    </body>
</html>