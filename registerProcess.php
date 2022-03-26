<?php
    session_start();
    if(isset($_POST['submit'])){

        // print_r($_FILES);
        $namadepan = $_POST['nama-depan'];
        $namatengah = $_POST['nama-tengah'];
        $namabelakang = $_POST['nama-belakang'];
        $tempatlahir = $_POST['tempat-lahir'];
        $tgllahir = $_POST['tgl-lahir'];
        $nik = $_POST['nik'];
        $warganegara = $_POST['warga-negara'];
        $email = $_POST['email'];
        $nohp = $_POST['no-hp'];
        $alamat = $_POST['alamat'];
        $kodepos = $_POST['kode-pos'];
        $username = $_POST['username'];
        $password1 = $_POST['password1'];
        $password2 = $_POST['password2'];
        $fileName = $_FILES['berkas']['name'];
        $tempName = $_FILES['berkas']['tmp_name'];
        $fileType = $_FILES['berkas']['type'];

        if(empty($_POST['nama-depan'])){
            echo "<script>alert('Nama depan masih kosong'); window.history.back();</script>";
        }else if(empty($_POST['nama-tengah'])){
            echo "<script>alert('Nama tengah masih kosong'); window.history.back();</script>";
        }else if(empty($_POST['nama-belakang'])){
            echo "<script>alert('Nama belakang masih kosong'); window.history.back();</script>";
        }else if(empty($_POST['tempat-lahir'])){
            echo "<script>alert('Tempat lahir masih kosong'); window.history.back();</script>";
        }else if(empty($_POST['tgl-lahir'])){
            echo "<script>alert('Tanggal Lahir masih kosong'); window.history.back();</script>";
        }else if(empty($_POST['nik'])){
            echo "<script>alert('NIK masih kosong'); window.history.back();</script>";
        }else if(empty($_POST['warga-negara'])){
            echo "<script>alert('Warga Negara masih kosong'); window.history.back();</script>";
        }else if(empty($_POST['email'])){
            echo "<script>alert('Email masih kosong'); window.history.back();</script>";
        }else if(empty($_POST['no-hp'])){
            echo "<script>alert('No HP masih kosong'); window.history.back();</script>";
        }else if(empty($_POST['alamat'])){
            echo "<script>alert('Alamat masih kosong'); window.history.back();</script>";
        }else if(empty($_POST['kode-pos'])){
            echo "<script>alert('Kode Pos masih kosong'); window.history.back();</script>";
        }else if(empty($_POST['username'])){
            echo "<script>alert('Username masih kosong'); window.history.back();</script>";
        }else if(empty($_POST['password1'])){
            echo "<script>alert('Password 1 masih kosong'); window.history.back();</script>";
        }else if(empty($_POST['password2'])){
            echo "<script>alert('Password 2 masih kosong'); window.history.back();</script>";
        }else if(empty($_FILES['berkas']['name'])){
            echo "<script>alert('Foto Profil harus ada'); window.history.back();</script>";
        }else{
            $directory = "./profile/$username/images";
            mkdir($directory, 0777, true);
            move_uploaded_file($tempName, "profile/$username/images/$fileName");
            echo "<script>alert('Registrasi Berhasil'); document.location.href='index.php';</script>";
        }

        

        

        $_SESSION['namaDpn'] = $namadepan;
        $_SESSION['namaTgh'] = $namatengah;
        $_SESSION['namaBlk'] = $namabelakang;
        $_SESSION['tmptLahir'] = $tempatlahir;
        $_SESSION['tglLahir'] = $tgllahir;
        $_SESSION['nikSession'] = $nik;
        $_SESSION['negaraSession'] = $warganegara;
        $_SESSION['emailSession'] = $email;
        $_SESSION['nohpSession'] = $nohp;
        $_SESSION['alamatSession'] = $alamat;
        $_SESSION['kodeposSession'] = $kodepos;
        $_SESSION['usernameSession'] = $username;
        $_SESSION['passwordSession1'] = $password1;
        $_SESSION['passwordSession2'] = $password2;

        
        
        
        // else{
        //     echo "<script>alert('File must be jpeg/jpg/png');</script>";
        // }
        
        // header("location:index.php");
        
        
    }
?>
