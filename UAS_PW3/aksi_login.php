<?php
session_start();
include "koneksi.php";
//tangkap data yang dikirim dari form login
$username = $_POST["username"];
$password = $_POST["password"];

//kueri data dari database
$query = mysqli_query($connection, "SELECT * FROM user WHERE (username='$username' OR email='$username') AND password='$password'");
$cek = mysqli_num_rows($query); //melakukan query

// mengambil data email yang sama dengan data username
$email = mysqli_query($connection, "SELECT * FROM user WHERE username='$username' OR email='$username'");
$tmp = mysqli_fetch_array($email); // melakukan fetch data

//mengecek apakah username dan password ada di database
if ($cek == TRUE && $username == $tmp['username']) {
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['email'] = $tmp['email'];
    header("location:index_logout.php");
}
elseif($cek == TRUE && $username == $tmp['email']) {
    $_SESSION['username'] = $tmp['username'];
    $_SESSION['password'] = $password;
    $_SESSION['email'] = $username;
    header("location:index_logout.php");
}
else {
    echo "<script> alert('Username atau Password Salah'); window.location = 'login.php'; </script>";
}