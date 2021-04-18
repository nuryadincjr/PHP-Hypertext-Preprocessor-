<?php
// 3.e. PHP session
// fungsi session_start() diletakan awal tag html, untuk memulai sesi
session_start();

// mencek apakah telah terjadi session
if ($_SESSION != null)
{
    // menampilkan detail array dari sesi log ini
    echo "Detail Session:<pre>";
    print_r($_SESSION);
    echo "</pre>";
}
else
    echo "<h3>Belum ada Session</h3>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Funcition</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>

    <!-- 3.b. PHP File Upload -->
    <!-- action: tujuan file akan dikirimkan, metod: cara pengiriman, enctype: menentukan tipe file yang di uplod  -->
    <div>
        <form action="3b_php_file_upload.php" method="post" enctype="multipart/form-data">
            <label for="">Nama Pengguan</label><input type="text" name="username"><br>
            <label for="">Kata Sandi</label><input type="password" name="password"><br>
            <label for="">Pilih file</label><input type="file" name="file"><br>
            <input class="btn" type="submit" name="submit" value="submit">
        </form>
    </div>

</body>
</html>