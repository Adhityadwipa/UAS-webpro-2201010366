<?php

    include_once 'config.php';
    session_start();
    
    if (isset($_SESSION['username'])) {
        header("Location: dashboard.php");
    }

    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $sql = "SELECT * FROM tb_user WHERE username='$username' AND password='".md5($password)."'";
        $result = mysqli_query($conn, $sql);

        if($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['username'];
            header("Location: dashboard.php");
        } else {
            echo "<script>
                    alert('Username atau Password salah!');
                </script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
</head>
<body>

    <div class="main">  	
        <input type="checkbox" id="chk" aria-hidden="true">

            <h6 class="intro"> Yalooo!!, Selamat datang di web ini,
            Silahkan login terlebih dahulu😁
            </h6>
            <div class="login">
                <form action="login.php" method="POST" autocomplete="off">
                    <label for="chk" aria-hidden="true">Login</label>
                    <input type="text" name="username" placeholder="Username" required=""
                    class="username">
                    <input type="password" name="password" placeholder="Password" required=""
                    class="pass">
                    <button type="submit" name="login">Login</button>
                    
                </form>
                <div class="text-center">
                    <a class="small" href="forgot-password.html">Lupa Password? </a>
                    <br>
                    <a class="small" href="register.php"> Buat Akun Baru!</a>
                </div>
                <br>
                <div 
                </div>
            </div>

    </div>
                                    
    </div>

</body>
</html>