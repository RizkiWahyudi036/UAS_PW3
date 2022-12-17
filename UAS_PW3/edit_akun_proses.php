<?php
if (isset($_POST['simpan'])) {
  include('koneksi.php');

  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $update = mysqli_query($connection, "UPDATE user SET
    username = '$username',
    password = '$password'
    WHERE email = '$email'")
    or die(mysqli_error($connection));

  if ($update) {
    echo "<script> alert('Data Akun berhasil diupdate'); window.location = 'index_logout.php'; </script>";
  } else {
    echo "<script> alert('Gagal Menyimpan Data Akun');</script>";
    echo "<a href='edit_akun.php ?email = " . $email . "'>kembali</a>";
  }
} else {
  echo "<script>window.history.back()</script>";
}