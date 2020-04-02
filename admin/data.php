<!DOCTYPE html>

<html>
<head>
	<title>Aa'admin</title>
    <link rel="stylesheet" type="text/css" media="screen" href="data.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">    
</head>
<body>
    
<header>
        <h1>INSER DATA</h1>
        <h1>Rumah Sakit Aa'Care</h1>
    </header>

    <h3>Menu</h3>
    <nav>
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Insert Data Berhasil!";
            } else {
                echo "Insert Data Gagal!";
            }
        ?>
    </p>
    <?php endif; ?>
        <ul>
            <li><a href="index.php">Kembali</a></li>
            <li><a href="form-daftar.php">Insert Data Baru</a></li>
            <li><a href="list-pasien.php">Data</a></li>
        </ul>
    </nav>


</body>
</html>