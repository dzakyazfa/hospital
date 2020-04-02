<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Aa'Care Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">   
</head>

<body>
    <header>
        <h3>Daftar Pasien</h3>
    </header>

    <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table class="table">
    <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Tempat, Tanggal Lahir</th>
      <th scope="col">Pekerjaan</th>
      <th scope="col">Tipe Kamar</th>
      <th scope="col">No Kamar</th>
      <th scope="col">Update</th>
    </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM pasien";
        $query = mysqli_query($db, $sql);

        while($pasien = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$pasien['id']."</td>";
            echo "<td>".$pasien['nama']."</td>";
            echo "<td>".$pasien['jk']."</td>";
            echo "<td>".$pasien['TTL']."</td>";
            echo "<td>".$pasien['pekerjaan']."</td>";
            echo "<td>".$pasien['tipe']."</td>";
            echo "<td>".$pasien['nomer']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$pasien['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$pasien['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>