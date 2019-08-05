<?php include "koneksi.php"; 
    if (strlen($password) > 25 || strlen($confirm) < 6){
        echo "Password harus antara 6-25 karakter";
    }
    else {
    //untuk mengecek apakah form password dan form konfirmasi password sudah sama
        if ($password == $confirm){
            $sql_get = mysql_query ("SELECT * FROM users WHERE username = '$username'");
            $num_row = mysql_num_rows($sql_get);
        //fungsi script ini adalah untuk mengecek ketersediaan username, jika tidak tersedia maka program akan berjalan
            if ($num_row ==0) {
                $password = md5($password);
                $confirm = md5($confirm);
                $sql_insert = mysql_query("INSERT INTO users VALUES ('','$username','$password','$confirm')");
                echo "Pendaftaran berhasil. Login <a href='login.php'>disini</a>";
            }
            else {
                echo "Username sudah terdaftar";
            }
        }   else {
            echo "Password yang kamu masukan tidak sama!";
            }
        }
    
 
















?>