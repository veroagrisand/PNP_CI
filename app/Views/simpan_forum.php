<?php
session_start();
    include "config/koneksi.php";

    $username=$_SESSION['username'];
    $komentar=$_POST['comment'];
   

    $b=mysqli_query($conn,"INSERT INTO forum(username, comment) VALUES('$username','$komentar')") or die(mysqli_error($conn));

    if($b)
    {
        echo "<script>alert('Komentar Berhasil dikirim..!!')</script>";
        echo "<script>window.location.href='forum.php';</script>";
        
      
    }
    else
    {
        echo "Gagal Menyimpan Data Kategori";
    }
?>