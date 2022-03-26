<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="home.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="navbar">
        <div class="judul">
            Aplikasi Pengelolaan Keuangan
        </div>
        <div class="nav-button">
            <div class="center">
                <a href="home.php">Home</a>
                <a href="profile.php" class="choosen">Profile</a>
            </div>
            <a href="logout.php" class="logout">Logout</a>
        </div>
    </div>

    <div class="head">
        Profil Pribadi
    </div>
    <div class="isi">
        <div class="isi-content">
            Nama Depan
            <strong><?php echo $_SESSION['namaDpn']?></strong>
        </div>
        <div class="isi-content">
            Nama Tengah
            <strong><?php echo $_SESSION['namaTgh']?></strong>
        </div>
        <div class="isi-content">
            Nama Belakang
            <strong><?php echo $_SESSION['namaBlk']?></strong>
        </div>
        <div class="isi-content">
            Tempat Lahir
            <strong><?php echo $_SESSION['tmptLahir']?></strong>
        </div>
        <div class="isi-content">
            Tgl Lahir
                <strong><?php echo $_SESSION['tglLahir']?></strong>
        </div>
        <div class="isi-content">
            NIK
            <strong><?php echo $_SESSION['nikSession']?></strong>
        </div>
        <div class="isi-content">
            Warga Negara
            <strong><?php echo $_SESSION['negaraSession']?></strong>
        </div>
        <div class="isi-content">
            Email
            <strong><?php echo $_SESSION['emailSession']?></strong>
        </div>
        <div class="isi-content">
            No HP
            <strong><?php echo $_SESSION['nohpSession']?></strong>
        </div>
        <div class="isi-content">
            Alamat
            <strong><?php echo $_SESSION['alamatSession']?></strong>
        </div>
        <div class="isi-content">
            Kode Pos
            <strong><?php echo $_SESSION['kodeposSession']?></strong>
        </div>
        <div class="isi-content">
            Foto Profil
            <?php
                $dir = "profile/". $_SESSION['usernameSession']."/images";
                $open = opendir($dir);
                while (($files = readdir($open)) != FALSE ){
                    if($files != "." && $files != ".." && $files != "Thumbs.db"){
                        echo "<img border='3' height='200'src='$dir/$files'>";
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>