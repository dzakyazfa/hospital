<!DOCTYPE html>
<html>
<head>
    <title>Aa'Admin</title>
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