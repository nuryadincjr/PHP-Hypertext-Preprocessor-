<?php
// 3.e. PHP session

// fungsi session_start() diletakan awal tag html, untuk memulai sesi
session_start();

// menginisialisasi variabel session
$_SESSION['logId'] = session_id();
$_SESSION['logName'] = $_POST['username'];
$_SESSION['logPaswd'] = $_POST['password'];
$_SESSION['logTime'] = date('d-m-Y'); 

if (isset($_POST['logout'])) { 
    // menghapus file session dari server
    session_destroy();

}

// menampilkan detail array dari sesi log ini
echo "Detail Session:<pre>";
print_r($_SESSION);
echo "</pre>";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Uplod</title>
</head>
<body>
    <br>
        <?php

        // 3.a. PHP Date ~awal statement~
        // Memanggil fungsi date.php dengan fungsi include
        echo "Detail Tanggal:<br>";
        @include('3a_date.php');

        // 3.b. PHP File Upload
        // Menampilkan array detail file yang telah di uplod
        echo "<br>Detail File Uplod:<pre>";
        print_r($_FILES);
        echo "</pre>";

        // mengambil data file pada dir temporary
        $namaFile = $_FILES['file']['name'];
        $namaBerkas = $_FILES['file']['tmp_name'];

        // menentukan lokasi file akan di pindah
        $dirFile = "databases/";

        // memindahkan file
        $fileUploded = move_uploaded_file($namaBerkas, $dirFile.$namaFile);

        // mencek boolean apakah file berhasil dipindahkan
        if ($fileUploded) {
            echo "Upload file berhasil!<br/>";
            echo "Link: <a href='".$dirFile.$namaFile."'>".$namaFile."</a><br/>";
        } else {
            echo "Upload file gagal!<br/>";
        }
        // 3.b. PHP File Upload ~akhir statement~


        // 3.e. PHP session
        echo "<br>Detail Log Sesion:";
        echo "Log ID : ".$_SESSION['logId']."<br>";
        echo "Log Nama : ".$_SESSION['logName']."<br>";
        echo "Log Password : ".$_SESSION['logPaswd']."<br>";
        echo "Log Time : ".$_SESSION['logTime']."<br>";

        ?>

</body>
</html>