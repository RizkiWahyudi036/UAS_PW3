<?php
session_start();
include "koneksi.php";

if (isset($_GET['email'])) {
  $email = $_GET['email'];
  $cek = mysqli_query($connection, "SELECT email FROM user WHERE email = '$email'") or die(mysqli_error($connection));

  if (mysqli_num_rows($cek) == 0) {
    echo "<script>window.history.back()</script>";
  } else {
    $del = mysqli_query($connection, "DELETE FROM user WHERE email = '$email'");
    if ($del) {
      mysqli_query($connection, "DELETE FROM member WHERE email = '$email'");
        echo '<script type ="text/JavaScript">';
        echo 'alert("Akun berhasil dihapus")';
        echo '</script>';
        echo "<script>window.location = 'index.php';</script>";
    } else {
      echo "<h2>Gagal menghapus akun</h2>";
      echo "<a href = 'index_logout.php'>Kembali</a>";
    }
  }
} else {
  echo "<script>window.history.back()</script>";
}