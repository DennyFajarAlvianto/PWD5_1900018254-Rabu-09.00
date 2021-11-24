<?php
//memasukkan file kedalam dokumen kita, file tersebut bisa script PHP, file HTML dll
    include "koneksi.php";
//variabel sql untuk menghapus data menggunakan pencarian id
    $sql="delete from users where id_user= '$_GET[id]'";
    //variabel untuk mengkoneksi ke database
    mysqli_query($con, $sql);
    //variabel untuk menutup database
    mysqli_close($con);
    header('location:tampil_user.php');
?>