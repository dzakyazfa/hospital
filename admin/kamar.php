<!DOCTYPE html>

<html>
<head>
	<title>Aa'admin</title>
    <link rel="stylesheet" type="text/css" media="screen" href="kamar.css"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins|Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
</head>
<!DOCTYPE html>
<html>
<head>
    <title>DATA Aa'Care</title>
</head>

<body>
    <header>
        <h3>Insert Data Pasien Baru</h3>
        <h1>Rumah Sakit Aa'Care</h1>
    </header>

    <h4>Menu</h4>
    <nav>
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "penambahan data berhasil!";
            } else {
                echo "penambahan gagal!";
            }
        ?>
    </p>
    <?php endif; ?>
        <ul>
            <li><a href="index.php">Kembali</a></li>
            <li><a href="form-daftar.php">Daftar Baru</a></li>
            <li><a href="list-pasien.php">Data</a></li>
        </ul>
    </nav>


</body>
</html>