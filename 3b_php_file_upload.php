<?php
// 3.e. PHP session
// fungsi session_start() diletakan awal tag html, untuk memulai sesi
session_start();

if (isset($_POST['submit'])) 
{ 
    // menginisialisasi variabel session
    $_SESSION['logId'] = session_id();
    $_SESSION['logName'] = $_POST['username'];
    $_SESSION['logPaswd'] = $_POST['password'];
    $_SESSION['logTime'] = date('d-m-Y h:i:s A');
    
}

// mgeecek apakah terjadi aksi logout session
if (isset($_POST['logout'])) 
{ 
    // menghapus file session dari server
    session_destroy();

    // mengarahkan ke halaman baru setelah submit
    header("location: 3_implement_abcde.php");

}

// // menampilkan detail array dari sesi log ini
// echo "Detail Session:<pre>";
// print_r($_SESSION);
// echo "</pre>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Uplod</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <br>
        <?php
        // 3.a. PHP Date ~awal statement~
        // Memanggil fungsi date.php dengan fungsi include
        echo "Detail Tanggal:<br>";
        @include('3a_date.php');

        // 3.b. PHP File Upload
        // // Menampilkan array detail file yang telah di uplod
        // echo "<br>Detail File Uplod:<pre>";
        // print_r($_FILES);
        // echo "</pre>";

        // mengambil data file pada dir temporary
        $namaFile = $_FILES['file']['name'];
        $namaBerkas = $_FILES['file']['tmp_name'];

        // menentukan lokasi file akan di pindah
        $dirFile = "databases/";

        // memindahkan file
        $fileUploded = move_uploaded_file($namaBerkas, $dirFile.$namaFile);

        // mencek boolean apakah file berhasil dipindahkan
        if ($fileUploded) {
            echo "<br>Upload file berhasil!<br>";
            echo "Nama: ".$_FILES['file']['name']."<br>";
            echo "Tipe: ".$_FILES['file']['type']."<br>";
            echo "Size: ".$_FILES['file']['size']."<br>";
            echo "Link: <a href='".$dirFile.$namaFile."'>".$namaFile."</a><br/>";
        } else {
            echo "<br>Tidak ada file yang diuplod!<br>";
        }
        // 3.b. PHP File Upload ~akhir statement~


        // 3.e. PHP session
        echo "<br>Detail Log Sesion:<br>";
        echo "Log ID : ".$_SESSION['logId']."<br>";
        echo "Log Username: ".$_SESSION['logName']."<br>";
        echo "Log Password: ".$_SESSION['logPaswd']."<br>";
        echo "Log Time : ".$_SESSION['logTime']."<br>";

        ?>

    <div>
        <form action="" method="post">
            <input type="submit" value="Log Out" name="logout">
        </form>
    </div>

</body>
</html>