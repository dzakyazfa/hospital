<!DOCTYPE html>
<html>
<head>
	<title>Aa'admin</title>
    <link rel="stylesheet" type="text/css" media="screen" href="admin.css"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins|Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php include 'cek-login.php'; ?>
<section id="nav-bar">
    
    <nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa fa-bars"></i>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="berita.php">PASIEN</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="servis.php">KAMAR</a>
      </li>
    </ul>
</div>
  </div>
</nav>
    </section>
    <section id="home">
      <div class="container">
        <div class="row">
          <div class="col-md-6 tulis">
            <p class="zonk"></p>         
            <p class="title"><?php echo "Selamat Datang ".$_SESSION['username'];  ?></p>
            <p class="text">Saat ini, anda berada di halaman Admin, halaman ini hanya bisa diakses oleh beberapa karyawan Rumah Sakit Aa'Care.Halaman ini digunakan untuk mengontrol data</p>
          </div>
          <div class="col-md-6 text-center">
            <img src="image/3568984.jpg" class="img-fluid">
          </div>
        </div>
      </div>
      <img src="image/ombakk.png" class="bottom-img">
    </section>

    <section id="footer">
        <div class="container text-center">
         <div class="row">
            <div class="col-md-4 footer-box">
            <p><b class="log">LOGOUT</b></p>
               <div class="image">
                 <a href="login.php">
                  <a href="logout.php"><img src="image/user (1).png" class="rounded-circle"></a>
                 </a></div>
            </div>
         </div>
        </div>
              </section>

</body>
</html>