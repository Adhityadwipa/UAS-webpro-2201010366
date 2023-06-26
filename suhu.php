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
    <link rel="stylesheet" href="css/suhu.css">
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
        <h1 id="suhu">Konversi Suhu</h1>
        <div class="inputs">
            <div id="c">
                <h2>Celcius (C)</h2>
                <input type="number" name="celcius" id="celcius" class="input" placeholder="Celcius (C)">
            </div>
        </div>

        <div class="inputs">
            <div id="f">
                <h2>Fahrenheit (F)</h2>
                <input type="number" name="fahrenheit" id="fahrenheit" class="input" placeholder="Fahrenheit (F)">
            </div>
        </div>
            
        <div class="inputs">
            <div id="k">
                <h2>Kelvin (K)</h2>
                <input type="number" name="kelvin" id="kelvin" class="input" placeholder="Kelvin (K)">
            </div>
        </div>

        <div class="inputs">
            <div id="r">
                <h2>Reamur (R)</h2>
                <input type="number" name="reamur" id="reamur" class="input" placeholder="Reamur (R)">
            </div>
        </div>
    </main>
    <script src="script.js" type="text/javascript"></script>
</body>
</html>