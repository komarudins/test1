<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Aplikasi SICAPER</title>
</head>
<body>
<div class="container">
<h1>Login SICAPER</h1>
<form action="" method="POST">
    <label>NIP</label><br>
    <input type="text" name="nip"><br>
    <label>Password</label><br>
    <input type="password" name="password"><br>
    <button type="submit" name="login">Log in</button>
</form>
</div>
<?php
include "koneksi.php";
if (isset($_POST['login'])){
    $nip = $_POST['nip'];
    $pass = md5($_POST['password']);
    $login=mysqli_query($koneksi, "SELECT * FROM guru
        WHERE nip='$nip' AND password='$pass'");
    $cocok=mysqli_num_rows($login);
    $r=mysqli_fetch_array($login);
    if ($cocok > 0){
        $_SESSION[nama_guru] = $r[nama_guru];
        header('location:index.php');
    }else{
        echo "<script>window.alert('Maaf, Anda Tidak Memiliki akses');
                window.location=('index.php')</script>";
    }
}
?>
</body>
</html>