<?php
// 3.e. PHP session
// fungsi session_start() diletakan awal tag html, untuk memulai sesi
session_start();

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
    <title>PHP Funcition</title>
</head>
<body>

    <!-- 3.b. PHP File Upload -->
    <!-- action: tujuan file akan dikirimkan, metod: cara pengiriman, enctype: menentukan tipe file yang di uplod  -->
    <div>
        <form action="3b_php_file_upload.php" method="post" enctype="multipart/form-data">
            Nama Pengguan:<input type="text" name="username"><br>
            Kata Sandi:<input type="password" name="password"><br>
            Pilih file:<input type="file" name="file">
            <input type="submit" name="submit" value="submit"><br>
            <input type="submit" name="logout" value="remove log">
        </form>
    </div>

</body>
</html>