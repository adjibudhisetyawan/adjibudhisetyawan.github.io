<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="home.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="navbar">
        <div class="judul">
            Aplikasi Pengelolaan Keuangan
        </div>
        <div class="nav-button">
            <div class="center">
                <a href="home.php" class="choosen">Home</a>
                <a href="profile.php">Profile</a>
            </div>
            <a href="logout.php" class="logout">Logout</a>
        </div>
    </div>

    <div class="content">
        Halo <strong><?php echo $_SESSION['namaDpn']." ".$_SESSION['namaTgh']." ".$_SESSION['namaBlk']?></strong>, Selamat datang di Aplikasi Pengelolaan Keuangan
    </div>
</body>
</html>