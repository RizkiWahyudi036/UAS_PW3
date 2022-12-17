<?php

    if(isset($_POST['tambah']))
    {
        include_once 'koneksi.php';
        $userid = $_POST['userid'];
        $email  = $_POST['email'];
        $nama   = $_POST['nama'];
        $ttl    = $_POST['ttl'];
        $jk     = $_POST['jk'];
        
        $validasi = mysqli_query($connection,"SELECT * FROM member WHERE userid = '$userid' OR email = '$email'");
    
            if($validasi -> num_rows > 0){
            echo '<script type ="text/JavaScript">';  
            echo 'alert("Data UserID / Email Sudah Ada Silahkan Ganti")';  
            echo '</script>';
            echo "<script>window.location='join_member.php'</script>";
            }
            else {
                $input  = mysqli_query($connection, "INSERT INTO member VALUES ('$userid', '$email', '$nama', '$ttl','$jk')");
                if($input){
                echo '<script type ="text/JavaScript">';  
                echo 'alert("Join Member Berhasil")';  
                echo '</script>';
                echo "<script>window.location='index_logout.php'</script>";
                }
                else{
                echo "Gagal Join Member Silahkan Coba Lagi...";
                echo "<a href = 'join_member.php'>kembali</a>";
                }
        }
       
    }
    else
    {
        echo "<script>window.history.back()</script>";
    }