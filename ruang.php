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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/ruang.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Konverter Suhu </title>
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


    <main>
        <h1 id="suhu">SEDANG DALAM TAHAP PEMBUATAN 😁🙏</h1>
        
    </main>
    <script src="script.js" type="text/javascript"></script>
</body>
</html>