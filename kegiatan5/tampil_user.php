<?php
    echo "<h2>User</h2>
    <form method=POST action=form_user.php>
        <input type=submit value='Tambah User'>
    </form>
    <table>
        <tr><th>No</th><th>Username</th><th>NamaLengkap</th><th>Email</th><th>Aksi</th></tr>";
        //memasukkan file kedalam dokumen kita, file tersebut bisa script PHP, file HTML dll
        include "koneksi.php";
        //sql untuk menampilkan data menggunakan pencarian id user
        $sql="select * from users order by id_user";
        //fungsi untuk menghubungkan ke database
        $tampil = mysqli_query($con,$sql);
        if (mysqli_num_rows($tampil) > 0) {
            $no=1;
            while ($r = mysqli_fetch_array($tampil)){
                //menampilkan id user, nama dan email
                //fungsi hapus data menggunakan pencarian id user
                echo "<tr><td>$no</td><td>$r[id_user]</td>
                <td>$r[nama]</td>
                <td>$r[email]</td>
                <td><a href='hapus_user.php?id=$r[id_user]'>Hapus</a></td>
                </tr>";
                $no++;
            }
            echo "</table>";
        } else {
        echo "0 results";
        }
    //fungsi untuk menutup database   
    mysqli_close($con);
?>
<br><br>
LOGIN <a href="form_login.php" style=" margin-right: 0px; font-size: 13px; font-family: Tahoma, Geneva, sans-serif;">&nbsp klik disini</a>
