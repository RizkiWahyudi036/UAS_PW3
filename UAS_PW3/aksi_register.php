<?php

if (isset($_POST['register'])) {
    include 'koneksi.php';
    $email    = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    $validasi = mysqli_query($connection,"SELECT * FROM user WHERE email = '$email'");
    
    if($validasi -> num_rows > 0){
        echo '<script type ="text/JavaScript">';  
        echo 'alert("Email Sudah Terdaftar Silahkan Ganti !!!")';  
        echo '</script>';
        echo "<script>window.history.back()</script>";        
    }
        else {
            $query  = mysqli_query($connection, "INSERT INTO user (username, email,password)VALUES ('$username', '$email', '$password')");
            if($query){
            echo '<script type ="text/JavaScript">';  
            echo 'alert("Register Berhasil")';  
            echo '</script>';
            echo "<script>window.location='login.php'</script>";
            }
            else{
            echo "Register Gagal Silahkan Coba Lagi...";
            echo "<script>window.history.back()</script>";
            }
    }
}
else
{
    echo "<script>window.history.back()</script>";
}