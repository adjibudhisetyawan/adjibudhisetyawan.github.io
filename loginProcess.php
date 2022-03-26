<?php
    session_start();

    if(isset($_POST['submit'])){
        $usernameLogin = isset($_SESSION['usernameSession']);
        $pass1 = isset($_SESSION['passwordSession1']);
        $pass2 = isset($_SESSION['passwordSession2']);
        if($_POST['username'] == $usernameLogin && $_POST['password'] == ($pass1 || $pass2)){
        // if(($_POST['username'] == isset($_SESSION['usernameSession']) && $_POST['password'] == isset($_SESSION['passwordSession1']))  ||  ($_POST['username'] == isset($_SESSION['usernameSession']) && $_POST['password'] == isset($_SESSION['passwordSession2']))){    
            echo "<script>
                  alert('login berhasil');
                  document.location.href='home.php';
                  </script>";
            // header("location:home.php");      
        }else{
            // echo "Maaf anda gagal login, pastikan username dan password sesuai<br>";
            // echo "<a href='login.php'>Back</a><br>";
            header("location:failMessage.php");
        }

    }
?>