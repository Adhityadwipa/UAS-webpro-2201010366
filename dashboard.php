<?php

    include_once 'config.php';
    session_start();

    if( !isset($_SESSION['username']) ){
        $username = $_SESSION['username'];
        header('Location: login.php');
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
    <header>
      <div class="brand">
        <span class="fab fa-github"></span>
        <a href="dashboard.php"><h1 class="acount">A-Count</h1></a>
      </div>
      <span class="fas fa-bars" id="menuIcon" onclick="toggle()"></span>
      <div class="navbar" id="nav">
        <div class="searchBox">
          <input type="text" placeholder="Mau cari rumus apa?" />
          <span class="fas fa-search" id="searchIcon"></span>
        </div>
        <ul>
          <li>
            <span class="fa fa-user-circle" id="headIcon"></span>
            <a href="#"> Profile </a>
            <span class="username"><?= $_SESSION['username'] ?></span>
          </li>
          <li>
            <span class="fas fa-sign-out" id="headIcon"></span>
            <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal"> Logout </a>
          </li>
        </ul>
      </div>
    </header>



    <div class="containercard">
        <div class="card" id="carddasar">
            <a href="operasi.php" class="operasi"><img src="img/fast_math.png">
            <div class="container">
                <h2 id="judul"><b>Operasi Dasar</b></h2>
            </div>
        </div>
        <div class="card" id="carddatar">
            <a href="datar.php"><img src="img/bangundatar.png"></a>
            <div class="container">
                <h2 id="judul"><b>Luas Bangun Datar</b></h2>
            </div>
        </div>
        <div class="card" id="carddatar">
            <a href="kdatar.php"><img src="img/bangundatar.png"></a>
            <div class="container">
                <h2 id="judul"><b>Keliling Bangun Datar</b></h2>
            </div>
        </div>
        <div class="card" id="cardruang">
            <a href="ruang.php"><img src="img/bangunruang.jpg"></a>
            <div class="container">
                <h2 id="judul"><b>Luas Bangun Ruang</b></h2>
            </div>
        </div>
        <div class="card" id="cardsuhu">
            <a href="suhu.php"><img src="img/suhu1.png">
            <div class="container">
                <h2 id="judul"><b>Fisika Suhu</b></h2>
            </div>
        </div>
    </div>

    
    


    <footer class="sticky-footer bg-dark color-light text-center">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Adhitya 2023</span>
            </div>
        </div>
    </footer>
</body>
</html>