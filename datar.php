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
    <title>Bangun Datar</title>

    <script src="jquery-3.7.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/datar.css">
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
        <h2 class="luas"> Luas Bangun Datar</h2>
    </center>



    <div class="containercard">

        <!-- Persegi-->
        <div class="card" id="cardpersegi">
            <img src="img/persegi.png" id="navigasi" class="persegi">
            <div class="container">
                <h3 class="persegi"><b>Persegi</b></h3>
                <h5>Rumus = Sisi X Sisi</h5>
            </div>
            <div id="hitungluaspersegi"><br>
                <div>
                    Nilai Sisi
                    <input type="number" class="sisi1">
                </div>
                <div>
                    <button type="button" class="cmdLPersegi">Hitung Luas</button>
                </div>
                <div id="hasilPersegi">HASIL</div>
            </div>
        </div>

        <!-- Persegi Panjang -->
        <div class="card" id="cardppanjang">
            <img src="img/ppanjang.png" id="navigasi" class="persegipanjang">
            <div class="container">
                <h3 class="persegipanjang"><b>Persegi Panjang</b></h3>
                <h5>Rumus = Panjang X Lebar</h5>
            </div>
            <div id="hitungluaspersegipanjang"><br>
                <div>
                    Nilai Panjang
                    <input type="number" class="panjang">
                </div>
                <div>
                    Nilai Lebar
                    <input type="number" class="lebar">
                </div>
                <div>
                    <button type="button" class="cmdLPPanjang">Hitung Luas</button>
                </div>
                <div id="hasilPPanjang">HASIL</div>
            </div>
        </div>


        <!-- Segitiga -->
        <div class="card" id="cardsegitiga">
            <img src="img/segitiga.png" id="navigasi" class="segitiga">
            <div class="container">
                <h3 class="segitiga"><b>Segitiga</b></h3>
                <h5>Rumus = 1/2 X Alas X Tinggi</h5>
            </div>
            <div id="hitungluassegitiga"><br>
                <div>
                    Nilai Alas
                    <input type="number" class="alas">
                </div>
                <div>
                    Nilai Tinggi
                    <input type="number" class="tinggi">
                </div>
                <div>
                    <button type="button" class="cmdLSegi3">Hitung Luas</button>
                </div>
                <div id="hasilSegi3">HASIL</div>
            </div>
        </div>


        <!-- Jajargenjang -->
        <div class="card" id="cardjajargenjang">
            <img src="img/jajargenjang.png" id="navigasi" class="jajargenjang">
            <div class="container">
                <h3 class="jajargenjang"><b>Jajargenjang</b></h3>
                <h5>Rumus = Alas X Tinggi</h5>
            </div>
            <div id="hitungluasjajargenjang"><br>
                <div>
                    Nilai Alas
                    <input type="number" class="alas1">
                </div>
                <div>
                    Nilai Tinggi
                    <input type="number" class="tinggi1">
                </div>
                <div>
                    <button type="button" class="cmdLjajargenjang">Hitung Luas</button>
                </div>
                <div id="hasiljajargenjang">HASIL</div>
            </div>
        </div>


        <!-- Layang -->
        <div class="card" id="cardlayang">
            <img src="img/layang.png" id="navigasi" class="layang">
            <div class="container">
                <h3 class="layang"><b>Layang-layang</b></h3>
                <h5>Rumus = 1/2 X D1 X D2</h5>
            </div>
            <div id="hitungluaslayang"><br>
                <div>
                    Nilai Diagonal 1
                    <input type="number" class="d1">
                </div>
                <div>
                    Nilai Diagonal 2
                    <input type="number" class="d2">
                </div>
                <div>
                    <button type="button" class="cmdLlayang">Hitung Luas</button>
                </div>
                <div id="hasillayang">HASIL</div>
            </div>
        </div> <br>


        <!-- Trapesium -->
        <div class="card" id="cardtrapesium">
            <img src="img/trapesium.png" id="navigasi" class="trapesium">
            <div class="container">
                <h3 class="trapesium"><b>Trapesium</b></h3>
                <h5>Rumus = 1/2 X (P Atas + P Bawah) X Tinggi</h5>
            </div>
            <div id="hitungluastrapesium"><br>
                <div>
                    Panjang Atas
                    <input type="number" class="atas">
                </div>
                <div>
                    Panjang Bawah
                    <input type="number" class="bawah">
                </div>
                <div>
                    Tinggi <br>
                    <input type="number" class="tinggitrapes">
                </div>
                <div>
                    <button type="button" class="cmdLtrapesium">Hitung Luas</button>
                </div>
                <div id="hasiltrapesium">HASIL</div>
            </div>
        </div>
    </div>


    


    <script>
        $(function(){
            $("#hasilPersegi").hide();
            $("#hasilPPanjang").hide();
            $("#hasilSegi3").hide();
            $("#hasiljajargenjang").hide();
            $("#hasillayang").hide();
            $("#hasiltrapesium").hide();

            $("#hitungluassegitiga").hide();
            $("#hitungluaspersegi").hide();
            $("#hitungluaspersegipanjang").hide();
            $("#hitungluasjajargenjang").hide();
            $("#hitungluaslayang").hide();
            $("#hitungluastrapesium").hide();

            let judul = "Klik Tombol";

            //Persegi
            $("#cardpersegi").click(function(){
                $("#hitungluaspersegi").show(1000);
                $("#hitungluaspersegipanjang").hide(500);
                $("#hitungluassegitiga").hide(500);
                $("#hitungluasjajargenjang").hide(500);
                $("#hitungluaslayang").hide(500);
                $("#hitungluastrapesium").hide(500);
                judul = "Hitung Luas Persegi"
                $("h2").html(judul);
            });

            //Persegi Panjang
            $("#cardppanjang").click(function(){
                $("#hitungluaspersegipanjang").show(1000);
                $("#hitungluaspersegi").hide(500);
                $("#hitungluassegitiga").hide(500);
                $("#hitungluasjajargenjang").hide(500);
                $("#hitungluaslayang").hide(500);
                $("#hitungluastrapesium").hide(500);
                judul = "Hitung Luas Persegi Panjang"
                $("h2").html(judul);
            });

            //Segitiga
            $("#cardsegitiga").click(function(){
                $("#hitungluassegitiga").show(1000);
                $("#hitungluaspersegi").hide(500);
                $("#hitungluaspersegipanjang").hide(500);
                $("#hitungluasjajargenjang").hide(500);
                $("#hitungluaslayang").hide(500);
                $("#hitungluastrapesium").hide(500);
                judul = "Hitung Luas Segitiga"
                $("h2").html(judul);
            });

            //Jajargenjang
            $("#cardjajargenjang").click(function(){
                $("#hitungluassegitiga").hide(500);
                $("#hitungluaspersegi").hide(500);
                $("#hitungluaspersegipanjang").hide(500);
                $("#hitungluasjajargenjang").show(1000);
                $("#hitungluaslayang").hide(500);
                $("#hitungluastrapesium").hide(500);
                judul = "Hitung Luas Jajargenjang"
                $("h2").html(judul);
            });

            //Layang-layang
            $("#cardlayang").click(function(){
                $("#hitungluassegitiga").hide(500);
                $("#hitungluaspersegi").hide(500);
                $("#hitungluaspersegipanjang").hide(500);
                $("#hitungluasjajargenjang").hide(500);
                $("#hitungluaslayang").show(1000);
                $("#hitungluastrapesium").hide(500);
                judul = "Hitung Luas Layang-layang"
                $("h2").html(judul);
            });

            //Trapesium
            $("#cardtrapesium").click(function(){
                $("#hitungluassegitiga").hide(500);
                $("#hitungluaspersegi").hide(500);
                $("#hitungluaspersegipanjang").hide(500);
                $("#hitungluasjajargenjang").hide(500);
                $("#hitungluaslayang").hide(500);
                $("#hitungluastrapesium").show(1000);
                judul = "Hitung Luas Trapesium"
                $("h2").html(judul);
            });



            $("#h2").html(judul);



            //Persegi
            $(".cmdLPersegi").click(function(){
                //input nilai
                let S1 = $(".sisi1").val();
                //proses
                let Hasil = S1*S1;
                //output hasil
                let tx = "Hasil : <br> Luas Persegi dengan <br> Sisi : "+S1;
                tx += " adalah <br> Luas = Sisi X Sisi <br>";
                tx += "= "+S1+" X "+S1;
                tx += "<br>= "+Hasil+"<br><b> Jadi luasnya adalah "+Hasil;

                $("#hasilPersegi").html(tx);
                $("#hasilPersegi").show(1500);
            })

            //Persegi Panjang
            $(".cmdLPPanjang").click(function(){
                //input nilai
                let P = $(".panjang").val();
                let L = $(".lebar").val();
                //proses
                let Hasil = P*L;
                //output hasil
                let tx = "Hasil : <br> Luas Persegi Panjang dengan <br> Panjang : "+P+"<br>Lebar : "+L;
                tx += " adalah <br> Luas = Panjang X Lebar <br>";
                tx += "= "+P+" X "+L;
                tx += "<br>= "+Hasil+"<br><b> Jadi luasnya adalah "+Hasil;

                $("#hasilPPanjang").html(tx);
                $("#hasilPPanjang").show(1500);
            })

            //Segi3
            $(".cmdLSegi3").click(function(){
                //input nilai
                let A = $(".alas").val();
                let T = $(".tinggi").val();
                //proses
                let Hasil = 1/2*A*T;
                //output hasil
                let tx = "Hasil : <br> Luas Segitiga dengan <br> Alas : "+A+"<br>Tinggi : "+T;
                tx += " adalah <br> Luas = 1/2 X Alas X Tinggi <br>";
                tx += "= 1/2 X "+A+" X "+T;
                tx += "<br>= "+Hasil+"<br><b> Jadi luasnya adalah "+Hasil;
    
                $("#hasilSegi3").html(tx);
                $("#hasilSegi3").show(1500)
            })

            //Jajargenjang
            $(".cmdLjajargenjang").click(function(){
                //input nilai
                let A1 = $(".alas1").val();
                let T1 = $(".tinggi1").val();
                //proses
                let Hasil = A1*T1;
                //output hasil
                let tx = "Hasil : <br> Luas Jajargenjang dengan <br> Alas : "+A1+"<br>Tinggi : "+T1;
                tx += " adalah <br> Luas = Alas X Tinggi <br>";
                tx += "= "+A1+" X "+T1;
                tx += "<br>= "+Hasil+"<br><b> Jadi luasnya adalah "+Hasil;
    
                $("#hasiljajargenjang").html(tx);
                $("#hasiljajargenjang").show(1500)
            })

            //Layang
            $(".cmdLlayang").click(function(){
                //input nilai
                let D1 = $(".d1").val();
                let D2 = $(".d2").val();
                //proses
                let Hasil = 1/2*D1*D2;
                //output hasil
                let tx = "Hasil : <br> Luas Layang-layang dengan <br> Diagonal 1 : "+D1+"<br>Diagonal 2 : "+D2;
                tx += " adalah <br> Luas = 1/2 X Diagonal 1 X Diagonal 2 <br>";
                tx += "= 1/2 X "+D1+" X "+D2;
                tx += "<br>= "+Hasil+"<br><b> Jadi luasnya adalah "+Hasil;
    
                $("#hasillayang").html(tx);
                $("#hasillayang").show(1500)
            })

            //Trapesium
            $(".cmdLtrapesium").click(function(){
                //input nilai
                let B1 = $(".bawah").val();
                let A2 = $(".atas").val();
                let TT = $(".tinggitrapes").val();
                //proses
                let Hasil = 1/2*(parseInt(B1)+parseInt(A2))*TT;
                //output hasil
                let tx = "Hasil : <br> Luas Trapesium dengan <br> Panjang Bawah : "+B1+"<br>Panjang Atas : "+A2+"<br>Tinggi : "+TT;
                tx += " adalah <br> Luas = 1/2 X (Panjang Bawah + Panjang Atas) X Tinggi <br>";
                tx += "= 1/2 X ("+B1+" + "+A2+") X "+TT;
                tx += "<br>= "+Hasil+"<br><b> Jadi luasnya adalah "+Hasil;
    
                $("#hasiltrapesium").html(tx);
                $("#hasiltrapesium").show(1500)
            })
        })
    </script>
</body>
</html>