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
    <title>Operasi Dasar</title>

    <script src="jquery-3.7.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/operasi.css">
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



    <center>
        <h2 class="luas"> Operasi Dasar</h2>
    </center>



    <div class="containercard">

        <!-- Penjumlahaan-->
        <div class="card" id="cardpenjumlahan">
            <h1 class="operasi">+</h1>
            <div class="container">
                <h3 class="penjumlahan"><b>Penjumlahan</b></h3>
            </div>
            <div id="hitungpenjumlahan"><br>
                <div>
                    Bilangan 1
                    <input type="number" class="sisi1">
                </div>
                <div>
                    Bilangan 2
                    <input type="number" class="sisi2">
                </div>
                <div>
                    Bilangan 3
                    <input type="number" class="sisi3">
                </div>
                <div>
                    <button type="button" class="cmdLPenjumlahan">Hitung</button>
                </div> <br>
                <div id="hasilPenjumlahan">HASIL</div>
            </div>
        </div>

        <!-- Pengurangan -->
        <div class="card" id="cardpengurangan">
            <h1 class="operasi">-</h1>
            <div class="container">
                <h3 class="pengurangan"><b>Pengurangan</b></h3>
            </div>
            <div id="hitungpengurangan"><br>
                <div>
                    Bilangan 1
                    <input type="number" class="kurang1">
                </div>
                <div>
                    Bilangan 2
                    <input type="number" class="kurang2">
                </div>
                <div>
                    Bilangan 3
                    <input type="number" class="kurang3">
                </div>
                <div>
                    <button type="button" class="cmdLpengurangan">Hitung</button>
                </div> <br>
                <div id="hasilpengurangan">HASIL</div>
            </div>
        </div>


        <!-- Perkalian -->
        <div class="card" id="cardperkalian">
            <h1 class="operasi">X</h1>
            <div class="container">
                <h3 class="perkalian"><b>Perkalian</b></h3>
            </div>
            <div id="hitungperkalian"><br>
                <div>
                    Bilangan 1
                    <input type="number" class="x1">
                </div>
                <div>
                    Bilangan 2
                    <input type="number" class="x2">
                </div>
                <div>
                    Bilangan 3
                    <input type="number" class="x3">
                </div>
                <div>
                    <button type="button" class="cmdperkalian">Hitung</button>
                </div> <br>
                <div id="hasilperkalian">HASIL</div>
            </div>
        </div>


        <!-- Pembagian -->
        <div class="card" id="cardpembagian">
            <h1 class="operasi">/</h1>
            <div class="container">
                <h3 class="jajargenjang"><b>Pembagian</b></h3>
            </div>
            <div id="hitungpembagian"><br>
                <div>
                    Bilangan 1
                    <input type="number" class="bagi1">
                </div>
                <div>
                    Bilangan 2
                    <input type="number" class="bagi2">
                </div>
                <div>
                    <button type="button" class="cmdpembagian">Hitung</button>
                </div> <br>
                <div id="hasilpembagian">HASIL</div>
            </div>
        </div>
    </div>


    


    <script>
        $(function(){
            $("#hasilPenjumlahan").hide();
            $("#hasilpengurangan").hide();
            $("#hasilperkalian").hide();
            $("#hasilpembagian").hide();


            $("#hitungperkalian").hide();
            $("#hitungpenjumlahan").hide();
            $("#hitungpengurangan").hide();
            $("#hitungpembagian").hide();


            let judul = "Klik Tombol";

            //Penjumlahan
            $("#cardpenjumlahan").click(function(){
                $("#hitungpenjumlahan").show(1000);
                $("#hitungpengurangan").hide(500);
                $("#hitungperkalian").hide(500);
                $("#hitungpembagian").hide(500);
                judul = "Operasi Penjumlahan"
                $("h2").html(judul);
            });

            //Pengurangan
            $("#cardpengurangan").click(function(){
                $("#hitungpengurangan").show(1000);
                $("#hitungpenjumlahan").hide(500);
                $("#hitungperkalian").hide(500);
                $("#hitungluaspembagian").hide(500);
                judul = "Operasi Pengurangan"
                $("h2").html(judul);
            });

            //Perkalian
            $("#cardperkalian").click(function(){
                $("#hitungperkalian").show(1000);
                $("#hitungpenjumlahan").hide(500);
                $("#hitungpengurangan").hide(500);
                $("#hitungpembagian").hide(500);
                judul = "Operasi Perkalian"
                $("h2").html(judul);
            });

            //Pembagian
            $("#cardpembagian").click(function(){
                $("#hitungperkalian").hide(500);
                $("#hitungpenjumlahan").hide(500);
                $("#hitungpengurangan").hide(500);
                $("#hitungpembagian").show(1000);
                judul = "Operasi Pembagian"
                $("h2").html(judul);
            });



            $("#h2").html(judul);



            //Penjumlahaan
            $(".cmdLPenjumlahan").click(function(){
                //input nilai
                let S1 = $(".sisi1").val();
                let S2 = $(".sisi2").val();
                let S3 = $(".sisi3").val();
                //proses
                let Hasil = parseInt(S1)+parseInt(S2)+parseInt(S3);
                //output hasil
                let tx = "Hasil : <br> Penjumlahan dengan <br> Bilangan "+S1+", "+S2+", "+S3;
                tx += " adalah <br>"+S1+" + "+S2+" + "+S3+"<br>";
                tx += "= "+Hasil+"<br><b> Jadi hasil penjumlahannya adalah "+Hasil;

                $("#hasilPenjumlahan").html(tx);
                $("#hasilPenjumlahan").show(1500);
            })

            //Pengurangan
            $(".cmdLpengurangan").click(function(){
                //input nilai
                let K1 = $(".kurang1").val();
                let K2 = $(".kurang2").val();
                let K3 = $(".kurang3").val();
                //proses
                let Hasil = parseInt(K1)-parseInt(K2)-parseInt(K3);
                //output hasil
                let tx = "Hasil : <br> Pengurangan dengan <br> Bilangan "+K1+", "+K2+", "+K3;
                tx += " adalah <br>"+K1+" - "+K2+" - "+K3+"<br>";
                tx += "= "+Hasil+"<br><b> Jadi hasil pengurangannya adalah "+Hasil;

                $("#hasilpengurangan").html(tx);
                $("#hasilpengurangan").show(1500);
            })

            //Perkalian
            $(".cmdperkalian").click(function(){
                //input nilai
                let X1 = $(".x1").val();
                let X2 = $(".x2").val();
                let X3 = $(".x3").val();
                //proses
                let Hasil = X1*X2*X3;
                //output hasil
                let tx = "Hasil : <br> Perkalian dengan <br> Bilangan "+X1+", "+X2+", "+X3;
                tx += " adalah <br>"+X1+" X "+X2+" X "+X3+"<br>";
                tx += "= "+Hasil+"<br><b> Jadi hasil perkaliannya adalah "+Hasil;

                $("#hasilperkalian").html(tx);
                $("#hasilperkalian").show(1500);
            })

            //Pembagian
            $(".cmdpembagian").click(function(){
                //input nilai
                let B1 = $(".bagi1").val();
                let B2 = $(".bagi2").val();
                //proses
                let Hasil = B1/B2;
                //output hasil
                let tx = "Hasil : <br> Pembagian dengan <br> Bilangan "+B1+", "+B2;
                tx += " adalah <br>"+B1+" / "+B2+"<br>";
                tx += "= "+Hasil+"<br><b> Jadi hasil pembagiannya adalah "+Hasil;

                $("#hasilpembagian").html(tx);
                $("#hasilpembagian").show(1500);
            })
        })
    </script>
</body>
</html>